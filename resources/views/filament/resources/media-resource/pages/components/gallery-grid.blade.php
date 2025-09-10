<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 p-4">
    @foreach ($this->getFilteredTableQuery()->get() as $record)
        <div class="bg-white rounded shadow p-2 border text-center">
            @php
                $url = Storage::url($record->file);
            @endphp

            @if($record->type === 'image')
                <img src="{{ $url }}" class="w-full h-40 object-cover rounded mb-2" />
            @elseif($record->type === 'video')
                <video src="{{ $url }}" class="w-full h-40 rounded mb-2" controls></video>
            @endif

            <div class="text-sm font-medium truncate">{{ $record->title }}</div>
            <div class="text-xs text-gray-500">{{ $record->type }}</div>
            <x-filament::button color="primary" size="sm" href="{{ route('filament.admin.resources.media.edit', $record) }}">
                Edit
            </x-filament::button>
        </div>
    @endforeach
    
</div>
