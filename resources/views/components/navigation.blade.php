 <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <div class="">
                    {{-- <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-3 rounded-lg"> --}}
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-20 ">
                        {{-- <i class="fas fa-network-wired text-2xl"></i> --}}
                    </div>
                    <div class="hidden md:block">
                         <h1 class="text-2xl font-bold text-gray-800">{{ env('APP_FULL' )}}</h1>

                        {{-- <p class="text-[1.16rem] text-gray-600"> Business Network</p> --}}
                    </div>
                </div>

                <div class="hidden md:flex space-x-8">
                    <a href="{{ url('/') }}#home" class="text-gray-700 hover:text-blue-600 transition duration-300">Home</a>
                    <a href="{{ url('/') }}#about" class="text-gray-700 hover:text-blue-600 transition duration-300">About</a>
                    <a href="{{ url('/') }}#how-it-works" class="text-gray-700 hover:text-blue-600 transition duration-300">How It Works</a>
                    {{-- <a href="{{ url('/') }}#events" class="text-gray-700 hover:text-blue-600 transition duration-300">Events</a>
                    <a href="{{ url('/') }}#testimonials" class="text-gray-700 hover:text-blue-600 transition duration-300">Testimonials</a> --}}
                    <a href="{{ url('/') }}#contact" class="text-gray-700 hover:text-blue-600 transition duration-300">Contact</a>
                    {{-- <a href="{{ route('membership') }}" class="inline-flex pb-2 items-center px-1 pt-1 border-b-2 {{ request()->routeIs('membership') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                        Membership
                    </a> --}}
                    {{-- <a href="{{ route('visitor') }}" class="inline-flex pb-2 items-center px-1 pt-1 border-b-2 {{ request()->routeIs('visitor') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                        Visitor
                    </a> --}}
                    {{-- <a href="{{ route('expression-of-interest') }}" class="inline-flex pb-2 items-center px-1 pt-1 border-b-2 {{ request()->routeIs('expression-of-interest') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} text-sm font-medium">
                        Expression of Interest
                    </a> --}}
                </div>

                <div class="flex space-x-4">
                    <a href="{{ route('membership') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                        Join Now
                    </a>
                    <button class="md:hidden text-gray-700" id="mobile-menu-btn">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden" id="mobile-menu-overlay">
        <div class="fixed right-0 top-0 h-full w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300" id="mobile-menu">
            <div class="p-6">
                <button class="text-gray-700 float-right" id="close-mobile-menu">
                    <i class="fas fa-times text-xl"></i>
                </button>
                <div class="mt-8 space-y-4">
                    <a href="#home" class="block text-gray-700 hover:text-blue-600">Home</a>
                    <a href="#about" class="block text-gray-700 hover:text-blue-600">About</a>
                    <a href="#how-it-works" class="block text-gray-700 hover:text-blue-600">How It Works</a>
                    <a href="#events" class="block text-gray-700 hover:text-blue-600">Events</a>
                    <a href="#testimonials" class="block text-gray-700 hover:text-blue-600">Testimonials</a>
                    <a href="#contact" class="block text-gray-700 hover:text-blue-600">Contact</a>
                    <a href="{{ route('visitor') }}" class="block text-gray-700 hover:text-blue-600">Visitor</a>
                    {{-- <a href="{{ route('expression-of-interest') }}" class="block text-gray-700 hover:text-blue-600">Expression of Interest</a> --}}
                </div>
            </div>
        </div>
        </div>


    @if (session('success') || session('error'))
        <div
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 3000)"
            x-show="show"
            class="fixed top-20 right-5 z-50"
        >
            @if (session('success'))
                <div class="bg-green-500 text-white px-6 py-3 rounded shadow-lg flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-500 text-white px-6 py-3 rounded shadow-lg flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                    <span>{{ session('error') }}</span>
                </div>
            @endif
        </div>
    @endif



