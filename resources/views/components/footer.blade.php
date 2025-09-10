@php
        $settingsModel = new \App\Models\Settings();
        $settings = [
            'mobile' => $settingsModel   ->getSetting('mobile'),
            'email' => $settingsModel->getSetting('email'),
            'location' => $settingsModel->getSetting('location'),
            'facebook' => $settingsModel->getSetting('facebook'),
            'twitter' => $settingsModel->getSetting('twitter'),
            'linkedin' => $settingsModel->getSetting('linkedin'),
        ];


@endphp
<footer class="bg-[#013f3a] text-white py-12 mt-12" style="background-color: rgb(4, 28, 27);">
    <div class="container mx-auto px-4">
        <div class="grid max-w-7xl mx-auto justify-center md:grid-cols-3 gap-8">
            <div class="space-y-4">
                <div class="flex flex-col items-start space-x-3">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-20 ">

                    <div>
                        <h3 class="text-2xl font-bold">{{ env('APP_INITIALS') }}</h3>
                        {{-- <p class="text-gray-400 text-sm">{{ config('app.name', '{{ env('APP_INITIALS') }}') }}{{ env('APP_INITIALS') }}</p> --}}
                    </div>
                </div>
                <p class="text-gray-400">
                    Connect, grow, and share success with our business networking community.<br>
                    Empowering local entrepreneurs through trusted business networking and community support.
                </p>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4 text-[#ff8001]">Resources</h4>
                <div class="space-y-2">
                    <a href="{{ route('membership') }}" class="block text-gray-400 hover:text-[#ff8001] transition duration-300">Join {{ env('APP_INITIALS')}}</a>
                    {{-- <a href="#testimonials" class="block text-gray-400 hover:text-[#ff8001] transition duration-300">Testimonials</a> --}}
                    <a href="{{ route('privacy') }}" class="block text-gray-400 hover:text-[#ff8001] transition duration-300">Privacy Policy</a>
                    <a href="{{ route('csae') }}" class="block text-gray-400 hover:text-[#ff8001] transition duration-300">Child Safety Policy</a>
                </div>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4 text-[#ff8001]">Contact Info</h4>
                <div class="space-y-3">
                    <p class="text-gray-400 flex items-center">
                        <i class="fas fa-phone mr-3 text-[#ff8001]"></i>{{ $settings['mobile'] }}
                    </p>
                    <p class="text-gray-400 flex items-center">
                        <i class="fas fa-envelope mr-3 text-[#ff8001]"></i>{{ $settings['email'] }}
                    </p>
                    <p class="text-gray-400 flex items-start">
                        <i class="fas fa-map-marker-alt mr-3 mt-1 text-[#ff8001]"></i>{{ $settings['location'] }}
                    </p>
                    <div class="flex space-x-4 mt-2">
                        <a href="{{ $settings['facebook'] }}" class="text-gray-400 hover:text-[#ff8001]">
                            <span class="sr-only">Facebook</span>
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="{{ $settings['twitter'] }}" class="text-gray-400 hover:text-[#ff8001]">
                            <span class="sr-only">Twitter</span>
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="{{ $settings['linkedin'] }}" class="text-gray-400 hover:text-[#ff8001]">
                            <span class="sr-only">LinkedIn</span>
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-[#000c0a] mt-8 pt-8 text-center">
            <p class="text-gray-400">&copy; {{ date('Y') }} {{ config('app.name', ' env("APP_INITIALS")') }}. All rights reserved.</p>
            <p class="text-gray-500 text-sm mt-2">"From Businessman to Businessman – A local network to grow local business"</p>
        </div>
    </div>
</footer>
