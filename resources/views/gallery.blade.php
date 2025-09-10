<x-app>
    <div class="container max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Gallery</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($gallery ?? [] as $index => $image)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 cursor-pointer group" 
                     onclick="openLightbox({{ $index }})">
                    @if(($image['type'] ?? 'image') === 'image')
                        <div class="relative overflow-hidden">
                            <img src="storage/{{ $image['file'] }}" 
                                 alt="{{ $image['title'] ?? 'Gallery Image' }}" 
                                 class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                            <!-- Overlay on hover -->
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                                </svg>
                            </div>
                        </div>
                    @else
                        <div class="relative overflow-hidden">
                            <video class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" 
                                   preload="metadata">
                                <source src="storage/{{ $image['file'] }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <!-- Video overlay -->
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                    @endif
                    @if(!empty($image['title']))
                        <div class="p-4">
                            <p class="text-gray-700 text-sm font-medium line-clamp-2">{{ $image['title'] }}</p>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        @if(empty($gallery))
            <p class="text-gray-500 mt-8 text-center">No images to display.</p>
        @endif
    </div>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center">
        <!-- Close button -->
        <button onclick="closeLightbox()" 
                class="absolute top-4 right-4 text-white hover:text-gray-300 z-60 p-2 rounded-full hover:bg-white/10 transition-colors">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <!-- Navigation buttons -->
        <button onclick="previousImage()" 
                class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 p-3 rounded-full hover:bg-white/10 transition-colors">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        
        <button onclick="nextImage()" 
                class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 p-3 rounded-full hover:bg-white/10 transition-colors">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>

        <!-- Content container -->
        <div class="max-w-7xl max-h-full w-full h-full flex items-center justify-center p-4">
            <div class="relative max-w-full max-h-full">
                <!-- Image container -->
                <div id="lightbox-content" class="flex items-center justify-center">
                    <!-- Content will be inserted here by JavaScript -->
                </div>
                
                <!-- Caption -->
                <div id="lightbox-caption" class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 text-white">
                    <h3 id="lightbox-title" class="text-lg font-semibold mb-1"></h3>
                    <p id="lightbox-counter" class="text-sm text-gray-300"></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const galleryData = @json($gallery ?? []);
        let currentIndex = 0;

        function openLightbox(index) {
            currentIndex = index;
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            document.body.style.overflow = 'hidden';
            
            showImage(index);
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
            document.body.style.overflow = 'auto';
            
            // Stop any playing videos
            const videos = document.querySelectorAll('#lightbox-content video');
            videos.forEach(video => {
                video.pause();
                video.currentTime = 0;
            });
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % galleryData.length;
            showImage(currentIndex);
        }

        function previousImage() {
            currentIndex = (currentIndex - 1 + galleryData.length) % galleryData.length;
            showImage(currentIndex);
        }

        function showImage(index) {
            const item = galleryData[index];
            const content = document.getElementById('lightbox-content');
            const title = document.getElementById('lightbox-title');
            const counter = document.getElementById('lightbox-counter');
            
            // Clear previous content
            content.innerHTML = '';
            
            if (item.type === 'video') {
                const video = document.createElement('video');
                video.src = 'storage/' + item.file;
                video.controls = true;
                video.autoplay = true;
                video.className = 'max-w-full max-h-[80vh] object-contain';
                content.appendChild(video);
            } else {
                const img = document.createElement('img');
                img.src = 'storage/' + item.file;
                img.alt = item.title || 'Gallery Image';
                img.className = 'max-w-full max-h-[80vh] object-contain';
                content.appendChild(img);
            }
            
            // Update caption
            title.textContent = item.title || 'Gallery Item';
            counter.textContent = `${index + 1} / ${galleryData.length}`;
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            const lightbox = document.getElementById('lightbox');
            if (!lightbox.classList.contains('hidden')) {
                switch(e.key) {
                    case 'Escape':
                        closeLightbox();
                        break;
                    case 'ArrowLeft':
                        previousImage();
                        break;
                    case 'ArrowRight':
                        nextImage();
                        break;
                }
            }
        });

        // Close on background click
        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });
    </script>

    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        /* Smooth animations */
        #lightbox {
            transition: opacity 0.3s ease-in-out;
        }
        
        #lightbox-content img,
        #lightbox-content video {
            transition: opacity 0.2s ease-in-out;
        }
    </style>
</x-app>