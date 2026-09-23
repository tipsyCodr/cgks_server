@php
    use App\Filament\Resources\ShortResource;

    /** @var \App\Models\Short $record */
    $record = $getRecord();

    $thumb = ShortResource::youtubeThumbnail($record->url) ?? ShortResource::placeholderThumbnail();
    $isActive = (bool) ($record->is_active ?? false);
    $platformLabel = $record->platform ? ucfirst($record->platform) : null;

    $platformIcon = match ($record->platform) {
        'youtube' => '<svg viewBox="0 0 24 24" fill="currentColor" style="width:11px;height:11px"><path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31.9 31.9 0 0 0 0 12a31.9 31.9 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31.9 31.9 0 0 0 24 12a31.9 31.9 0 0 0-.5-5.8zM9.6 15.6V8.4l6.3 3.6-6.3 3.6z"/></svg>',
        'instagram' => '<svg viewBox="0 0 24 24" fill="currentColor" style="width:11px;height:11px"><path d="M12 2.2c2.7 0 3 0 4.1.1 1 0 1.5.2 1.9.4.5.2.8.4 1.1.7.4.4.6.7.8 1.1.1.4.3.9.3 1.9 0 1 .1 1.4.1 4.1s0 3-.1 4.1c0 1-.2 1.5-.3 1.9-.2.5-.4.8-.8 1.1-.3.4-.7.6-1.1.8-.4.1-.9.3-1.9.3-1 0-1.4.1-4.1.1s-3 0-4.1-.1c-1 0-1.5-.2-1.9-.3a3.3 3.3 0 0 1-1.1-.8c-.4-.3-.6-.7-.8-1.1-.1-.4-.3-.9-.3-1.9 0-1-.1-1.4-.1-4.1s0-3 .1-4.1c0-1 .2-1.5.3-1.9.2-.5.4-.8.8-1.1.3-.4.7-.6 1.1-.8.4-.1.9-.3 1.9-.3 1 0 1.4-.1 4.1-.1zM12 0C9.3 0 8.9 0 7.8.1 6.7.1 6 .3 5.4.5a5.3 5.3 0 0 0-2 1.3 5.3 5.3 0 0 0-1.2 2C2 4 1.8 4.7 1.7 5.8 1.6 6.9 1.6 7.3 1.6 12s0 5.1.1 6.2c0 1.1.3 1.8.5 2.4a5.3 5.3 0 0 0 1.3 2 5.3 5.3 0 0 0 2 1.2c.5.2 1.2.4 2.3.5C8.9 24.4 9.3 24.4 12 24.4s3.1 0 4.2-.1c1.1 0 1.8-.3 2.4-.5a5.3 5.3 0 0 0 2-1.3 5.3 5.3 0 0 0 1.2-2c.2-.5.4-1.2.5-2.3.1-1.1.1-1.5.1-6.2s0-3.1-.1-4.2c0-1.1-.3-1.8-.5-2.4a5.3 5.3 0 0 0-1.3-2 5.3 5.3 0 0 0-2-1.2c-.5-.2-1.2-.4-2.3-.5C15.1 0 14.7 0 12 0zm0 5.8a6.2 6.2 0 1 0 0 12.4 6.2 6.2 0 0 0 0-12.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.4-10.8a1.4 1.4 0 1 0 0 2.9 1.4 1.4 0 0 0 0-2.9z"/></svg>',
        default => '',
    };

    $badgeBg = match ($record->platform) {
        'youtube'   => 'background:#dc2626;',
        'instagram' => 'background:linear-gradient(135deg,#f58529,#dd2a7b,#8134af);',
        default     => 'background:#6b7280;',
    };

    $createdAt = $record->created_at?->diffForHumans() ?? '';
@endphp

<div class="fi-short-card" style="
    display:flex;
    flex-direction:column;
    border-radius:0.75rem;
    overflow:hidden;
    background:var(--fi-body-bg, #fff);
    border:1px solid rgba(0,0,0,.08);
    transition:all .2s ease;
    height:100%;
" onmouseenter="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 24px rgba(0,0,0,.12)'"
   onmouseleave="this.style.transform='translateY(0)';this.style.boxShadow='none'"
>
    {{-- Thumbnail area — consistent 3:4 ratio works well for portrait shorts --}}
    <a
        href="{{ $record->url }}"
        target="_blank"
        rel="noopener noreferrer"
        title="{{ $record->title ?: 'Open short' }}"
        style="
            position:relative;
            display:block;
            width:100%;
            aspect-ratio:3/4;
            overflow:hidden;
            background:#111827;
            flex-shrink:0;
            {{ $isActive ? '' : 'opacity:.5;filter:grayscale(40%);' }}
        "
    >
        {{-- Thumbnail --}}
        <img
            src="{{ $thumb }}"
            alt="{{ $record->title }}"
            loading="lazy"
            style="
                position:absolute;inset:0;
                width:100%;height:100%;
                object-fit:cover;object-position:center;
                transition:transform .3s ease;
            "
            onmouseenter="this.style.transform='scale(1.05)'"
            onmouseleave="this.style.transform='scale(1)'"
        />

        {{-- Top gradient for badges --}}
        <span style="position:absolute;top:0;left:0;right:0;height:40%;background:linear-gradient(180deg,rgba(0,0,0,.45) 0%,transparent 100%);pointer-events:none;"></span>

        {{-- Bottom gradient for readability --}}
        <span style="position:absolute;bottom:0;left:0;right:0;height:35%;background:linear-gradient(0deg,rgba(0,0,0,.5) 0%,transparent 100%);pointer-events:none;"></span>

        {{-- Centered play button --}}
        <span style="
            position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);
            display:flex;align-items:center;justify-content:center;
            width:44px;height:44px;border-radius:50%;
            background:rgba(0,0,0,.45);
            backdrop-filter:blur(6px);-webkit-backdrop-filter:blur(6px);
            border:1.5px solid rgba(255,255,255,.25);
            opacity:.85;transition:opacity .2s ease;
        ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff" style="width:18px;height:18px;margin-left:2px;">
                <path d="M8 5v14l11-7z"/>
            </svg>
        </span>

        {{-- Platform badge --}}
        @if ($platformLabel)
            <span style="
                position:absolute;top:8px;left:8px;
                display:inline-flex;align-items:center;gap:3px;
                padding:2px 8px;border-radius:9999px;
                font-size:10px;font-weight:700;color:#fff;
                letter-spacing:.03em;
                {{ $badgeBg }}
                box-shadow:0 1px 4px rgba(0,0,0,.2);
            ">
                {!! $platformIcon !!}
                {{ $platformLabel }}
            </span>
        @endif

        {{-- Inactive indicator --}}
        @unless ($isActive)
            <span style="
                position:absolute;top:8px;right:8px;
                display:inline-flex;align-items:center;gap:3px;
                padding:2px 8px;border-radius:9999px;
                font-size:10px;font-weight:700;
                color:#fbbf24;background:rgba(0,0,0,.55);
                backdrop-filter:blur(4px);-webkit-backdrop-filter:blur(4px);
            ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" style="width:11px;height:11px;">
                    <path d="M3.28 2.22a.75.75 0 00-1.06 1.06l14.5 14.5a.75.75 0 101.06-1.06l-1.745-1.745a10.029 10.029 0 003.3-4.38 1.651 1.651 0 000-1.185A10.004 10.004 0 009.999 3a9.956 9.956 0 00-4.744 1.194L3.28 2.22zM7.752 6.69l1.092 1.092a2.5 2.5 0 013.374 3.373l1.092 1.092a4 4 0 00-5.558-5.558z"/>
                    <path d="M10.748 13.93l2.523 2.523A9.987 9.987 0 0110 17a10.004 10.004 0 01-9.335-6.41 1.651 1.651 0 010-1.186A10.007 10.007 0 014.052 5.11L5.47 6.53a4 4 0 005.27 5.27l.008.13z"/>
                </svg>
                Hidden
            </span>
        @endunless
    </a>

    {{-- Info section — fixed height keeps all cards even --}}
    <div class="text-gray-950 dark:text-white" style="
        padding:10px 12px;
        display:flex;
        flex-direction:column;
        gap:2px;
        flex:1;
        min-height:0;
        border-top:1px solid rgba(0,0,0,.05);
    ">
        {{-- Title --}}
        <p style="
            margin:0;
            font-size:13px;font-weight:600;line-height:1.35;
            display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;
        ">
            {{ $record->title ?: 'Untitled Short' }}
        </p>

        {{-- Meta row: timestamp + status --}}
        <div class="text-gray-500 dark:text-gray-400" style="
            display:flex;align-items:center;justify-content:space-between;
            margin-top:auto;
            padding-top:4px;
            font-size:11px;font-weight:500;
        ">
            @if ($createdAt)
                <span>{{ $createdAt }}</span>
            @else
                <span></span>
            @endif

            @if ($isActive)
                <span style="display:inline-flex;align-items:center;gap:3px;color:#16a34a;">
                    <span style="width:6px;height:6px;border-radius:50%;background:#16a34a;display:inline-block;"></span>
                    Active
                </span>
            @else
                <span style="display:inline-flex;align-items:center;gap:3px;color:#9ca3af;">
                    <span style="width:6px;height:6px;border-radius:50%;background:#9ca3af;display:inline-block;"></span>
                    Hidden
                </span>
            @endif
        </div>
    </div>
</div>
