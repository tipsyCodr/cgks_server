<x-filament::page>
    <div class="mb-6 flex justify-end">
        <x-filament::button
            color="success"
            tag="a"
            href="{{ route('filament.admin.resources.media.create') }}"
            icon="heroicon-o-plus"
        >

            Create
        </x-filament::button>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
        @foreach ($this->getRecords() as $record)
            <div class="group relative bg-white dark:bg-gray-900 rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden border border-gray-200 dark:border-gray-700 hover:border-primary-300 dark:hover:border-primary-600">
                @php $url = Storage::url($record->file); @endphp

                <!-- Media Container -->
                <div class="relative aspect-square overflow-hidden bg-gray-100 dark:bg-gray-800">
                    @if($record->type === 'image')
                        <img 
                            src="{{ $url }}" 
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" 
                            alt="{{ $record->title }}"
                        />
                    @elseif($record->type === 'video')
                        <video 
                            src="{{ $url }}" 
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" 
                            muted
                            preload="metadata"
                        ></video>
                        <!-- Video Play Icon -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="bg-black/50 rounded-full p-3 backdrop-blur-sm">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                    @endif

                    <!-- Type Badge -->
                    <div class="absolute top-2 left-2">
                        <span class="inline-flex items-center px-2 py-1 rounded-md text-xs font-medium bg-white/90 dark:bg-gray-800/90 text-gray-700 dark:text-gray-300 backdrop-blur-sm border border-gray-200 dark:border-gray-600">
                            @if($record->type === 'image')
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            @else
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                </svg>
                            @endif
                            {{ ucfirst($record->type) }}
                        </span>
                    </div>


                </div>

                <!-- Content Section -->
                <div class="p-3 space-y-2">
                    <h3 class="text-sm font-semibold text-gray-900 dark:text-white line-clamp-2 leading-tight">
                        {{ $record->title }}
                    </h3>
                    
                    <!-- Action Buttons -->
                    <div class="flex items-center gap-2">
                        <x-filament::button
                            color="primary"
                            size="xs"
                            tag="a"
                            href="{{ route('filament.admin.resources.media.edit', $record) }}"
                            class="flex-1"
                        >
                            <div class="flex gap-2">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg> Edit
                            </div>
                        </x-filament::button>

                        <form
                            method="POST"
                            action="{{ route('custom.media.delete', $record) }}"
                            onsubmit="return confirm('Are you sure you want to delete this item?');"
                            class="flex-1"
                        >
                            @csrf
                            @method('DELETE')
                            <x-filament::button 
                                color="danger" 
                                size="xs" 
                                type="submit"
                                class="w-full"
                            >
                                <div class="flex gap-2">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg> Delete
                                </div>
                            </x-filament::button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</x-filament::page>