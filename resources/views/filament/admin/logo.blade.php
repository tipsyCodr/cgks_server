@php
    // config('app.name') is "CGKS | Chhattisgarh Kranti Sena" (from .env).
    // Split on "|" so the short initials show large and the full name as a subtitle.
    // Using config() (not env()) keeps this working after `php artisan config:cache`.
    $appName = config('app.name');
    $parts = explode('|', $appName);
    $initials = trim($parts[0] ?? '') ?: $appName;
    $full = trim($parts[1] ?? '');
@endphp

<div class="flex items-center gap-x-2">
    <img
        src="{{ asset('img/logo.png') }}"
        alt="{{ $initials }}"
        class="h-9 w-9 shrink-0 rounded-md object-contain"
    />

    <span class="flex flex-col justify-center leading-tight">
        <span class="text-base font-bold tracking-tight text-gray-950 dark:text-white">
            {{ $initials }}
        </span>

        @if ($full !== '')
            <span class="text-xs font-medium text-gray-500 dark:text-gray-400">
                {{ $full }}
            </span>
        @endif
    </span>
</div>
