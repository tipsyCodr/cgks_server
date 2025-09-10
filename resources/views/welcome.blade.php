<x-app>
<body class="bg-gray-50" x-data="bgRotator()" x-init="start()">

    <!-- Hero Section -->
    <section id="home" class="relative text-white pt-32 pb-32 overflow-hidden min-h-[90vh]">
        <!-- Background with fade transition -->
        <template x-for="(image, index) in images" :key="index">
            <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000"
                :style="'background-image: url(img/banner/' + image + '.png)'"
                :class="{ 'opacity-100': index === counter, 'opacity-0': index !== counter }">
            </div>
        </template>

        <!-- Main Content -->
        <div class="relative z-10 container mx-auto px-4 max-w-8xl">
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="space-y-6">
                    <button @click="paused = !paused"
                        class="text-sm mt-6 px-4 py-2 bg-white/10 border border-white/20 rounded hover:bg-white/20 transition flex items-center space-x-2">
                        <span>
                            <i class="fas fa-play" x-show="paused"></i>
                            <i class="fas fa-pause" x-show="!paused"></i>
                        </span>
                        {{-- <span x-text="paused ? 'Resume Background' : 'Pause Background'"></span> --}}
                    </button>
                    <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                        Welcome to <span class="text-[#ff8001]">{{ env('APP_INITIALS') }}</span>
                    </h1>
                    <h2 class="text-xl md:text-2xl text-[#ff8001]">
                        {{ env('APP_NAME') }}
                    </h2>
                    <p class="text-lg text-green-100 leading-relaxed">
                        The region's premier platform for entrepreneurs to connect, collaborate, and grow together.
                        Unite Chhattisgarh's business community through powerful weekly networking.
                    </p>
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20">
                        <p class="text-[#ff8001] font-semibold italic text-lg">
                            "From Businessman to Businessman – A local network to grow local business"
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        {{-- <a href="#join"
                            class="bg-[#ff8001] text-[#013f3a] px-8 py-4 rounded-lg font-bold hover:bg-orange-400 transition duration-300 text-center">
                            <i class="fas fa-user-plus mr-2"></i>Join Now
                        </a> --}}
                        <a href="#events"
                            class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-bold hover:bg-white hover:text-[#013f3a] transition duration-300 text-center">
                            <i class="fas fa-calendar mr-2"></i>Attend a Meeting
                        </a>
                    </div>


                </div>

            </div>
        </div>
    </section>

        <!-- About Section -->
        <section id="about" class="py-16 max-w-7xl mx-auto bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-[#013f3a] mb-4">About {{ env('APP_INITIALS') }}</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        {{ env('APP_INITIALS') }} was founded to bridge the gap between local entrepreneurs in Chhattisgarh by creating a
                        structured, referral-driven business network where members help each other grow.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    <div class="flex flex-col h-full space-y-8">
                        <div class="bg-gradient-to-br from-[#013f3a] to-indigo-600 text-white p-8 rounded-xl flex-1 flex flex-col">
                            <h3 class="text-2xl font-bold mb-4">
                                <i class="fas fa-eye mr-3"></i>Our Vision
                            </h3>
                            <p class="leading-relaxed flex-1">
                                To empower local entrepreneurs of Chhattisgarh by building a trusted business network
                                that promotes collaboration, growth, and opportunities through regional connection and
                                community support.
                            </p>
                        </div>

                        <div
                            class="bg-gradient-to-r from-[#ff8001]/10 to-orange-50 p-6 rounded-xl border-l-4 border-[#ff8001] flex-1 flex flex-col">
                            <h3 class="text-2xl font-bold text-[#ff8001] mb-4">
                                <i class="fas fa-star text-[#ff8001] mr-3"></i>Our Uniqueness
                            </h3>
                            <ul class="space-y-3 text-gray-600 flex-1">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-[#013f3a] mr-3 mt-1"></i>
                                    We operate 100% in Chhattisgarhi, ensuring comfort and relatability
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-[#013f3a] mr-3 mt-1"></i>
                                    Our community is built on trust, collaboration, and growth
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex flex-col h-full space-y-6">
                        <div class="bg-gradient-to-br from-[#ff8001] to-teal-600 text-white p-8 rounded-xl flex-1 flex flex-col">
                            <h3 class="text-2xl font-bold mb-4">
                                <i class="fas fa-bullseye mr-3"></i>Our Mission
                            </h3>
                            <p class="leading-relaxed flex-1">
                                Our mission is to create a strong and inclusive business ecosystem in Chhattisgarh where
                                business owners can connect, exchange referrals, grow their businesses, and learn from
                                each other — all while embracing the pride of our local language and culture.
                            </p>
                        </div>

                        <div
                            class="bg-gradient-to-r from-[#013f3a]/10 to-indigo-50 p-6 rounded-xl border-l-4 border-[#013f3a] flex-1 flex flex-col">
                            <h3 class="text-2xl font-bold text-[#013f3a] mb-4">
                                <i class="fas fa-lightbulb text-[#013f3a] mr-3"></i>Why {{ env('APP_INITIALS') }} Was Started
                            </h3>
                            <p class="text-gray-600 leading-relaxed flex-1">
                                Many small and medium business owners in Chhattisgarh lack structured networking
                                platforms. {{ env('APP_INITIALS') }} was born to fill that gap by providing a supportive, local language-based
                                ecosystem.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Values Section -->
        <section class="py-16 bg-[#013f3a]  text-white">
            <div class="container max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Our Core Values</h2>
                <p class="text-xl text-green-100">The principles that guide our community</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white/10 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-white/20">
                <div class="bg-[#ff8001]/20 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-handshake text-[#ff8001] text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Trust & Integrity</h3>
                <p class="text-green-100">Building strong relationships based on mutual respect and ethical practices.</p>
                </div>

                <div class="bg-white/10 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-white/20">
                <div class="bg-[#ff8001]/20 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-users text-[#ff8001] text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Local Empowerment</h3>
                <p class="text-green-100">Supporting and uplifting local businesses across Chhattisgarh.</p>
                </div>

                <div class="bg-white/10 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-white/20">
                <div class="bg-[#ff8001]/20 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-rocket text-[#ff8001] text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Collaboration Over Competition</h3>
                <p class="text-green-100">Growing together through meaningful partnerships and referrals.</p>
                </div>

                <div class="bg-white/10 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-white/20">
                <div class="bg-[#ff8001]/20 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-heart text-[#ff8001] text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Cultural Pride</h3>
                <p class="text-green-100">Conducting business in Chhattisgarhi to keep our language and identity alive in the professional world.</p>
                </div>

                <div class="bg-white/10 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-white/20 md:col-span-2 lg:col-span-1">
                <div class="bg-[#ff8001]/20 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-chart-line text-[#ff8001] text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Commitment to Growth</h3>
                <p class="text-green-100">Helping every member grow personally and professionally through shared learning and support.</p>
                </div>
            </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="how-it-works" class="max-w-7xl mx-auto py-16 bg-white">
            <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-[#013f3a] mb-4">How It Works</h2>
                <p class="text-xl text-gray-600">Simple steps to join and benefit from our network</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Membership Process -->
                <div class="bg-gradient-to-br from-[#013f3a]/10 to-[#ff8001]/10 p-8 rounded-xl">
                <h3 class="text-2xl font-bold text-[#013f3a] mb-6">
                    <i class="fas fa-user-plus text-[#013f3a] mr-3"></i>Membership Process
                </h3>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                    <div
                        class="bg-[#013f3a] text-white rounded-full w-8 h-8 flex items-center justify-center font-bold">
                        1</div>
                    <span>Fill the online form</span>
                    </div>
                    <div class="flex items-center space-x-3">
                    <div
                        class="bg-[#013f3a] text-white rounded-full w-8 h-8 flex items-center justify-center font-bold">
                        2</div>
                    <span>Attend an introductory meeting</span>
                    </div>
                    <div class="flex items-center space-x-3">
                    <div
                        class="bg-[#013f3a] text-white rounded-full w-8 h-8 flex items-center justify-center font-bold">
                        3</div>
                    <span>Undergo basic orientation</span>
                    </div>
                </div>
                </div>

                <!-- Weekly Meeting Flow -->
                <div class="bg-gradient-to-br from-[#013f3a]/10 to-[#ff8001]/10 p-8 rounded-xl">
                <h3 class="text-2xl font-bold text-[#013f3a] mb-6">
                    <i class="fas fa-calendar-week text-[#013f3a] mr-3"></i>Weekly Meeting Flow
                </h3>
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                    <i class="fas fa-circle text-[#013f3a] text-xs"></i>
                    <span>Member Introductions</span>
                    </div>
                    <div class="flex items-center space-x-3">
                    <i class="fas fa-circle text-[#013f3a] text-xs"></i>
                    <span>Business Presentations</span>
                    </div>
                    <div class="flex items-center space-x-3">
                    <i class="fas fa-circle text-[#013f3a] text-xs"></i>
                    <span>Referral Exchange</span>
                    </div>
                    <div class="flex items-center space-x-3">
                    <i class="fas fa-circle text-[#013f3a] text-xs"></i>
                    <span>Training/Guest Sessions</span>
                    </div>
                    <div class="flex items-center space-x-3">
                    <i class="fas fa-circle text-[#013f3a] text-xs"></i>
                    <span>Networking Time</span>
                    </div>
                </div>
                </div>

                <!-- What Members Get -->
                <div class="bg-gradient-to-br from-[#ff8001]/10 to-[#013f3a]/10 p-8 rounded-xl">
                <h3 class="text-2xl font-bold text-[#ff8001] mb-6">
                    <i class="fas fa-gift text-[#ff8001] mr-3"></i>What Members Get
                </h3>
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                    <i class="fas fa-star text-[#ff8001]"></i>
                    <span>High-quality leads</span>
                    </div>
                    <div class="flex items-center space-x-3">
                    <i class="fas fa-star text-[#ff8001]"></i>
                    <span>Regular exposure</span>
                    </div>
                    <div class="flex items-center space-x-3">
                    <i class="fas fa-star text-[#ff8001]"></i>
                    <span>Business growth education</span>
                    </div>
                    <div class="flex items-center space-x-3">
                    <i class="fas fa-star text-[#ff8001]"></i>
                    <span>A trusted support system</span>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>


        <!-- Contact Section -->
        <section id="contact" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-[#013f3a] mb-4">Contact Us</h2>
                <p class="text-xl text-gray-600">Have Questions? We're Here to Help!</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <div class="space-y-8">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-[#013f3a] mb-6">Get in Touch</h3>

                    <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="bg-[#013f3a]/10 p-3 rounded-full">
                        <i class="fas fa-phone text-[#013f3a] text-xl"></i>
                        </div>
                        <div>
                        <h4 class="font-semibold text-[#013f3a]">Phone</h4>
                        <p class="text-gray-600">+91 XXXXX XXXXX</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="bg-[#ff8001]/10 p-3 rounded-full">
                        <i class="fas fa-envelope text-[#ff8001] text-xl"></i>
                        </div>
                        <div>
                        <h4 class="font-semibold text-[#013f3a]">Email</h4>
                        <p class="text-gray-600">info@cbnchhattisgarh.com</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="bg-[#ff8001]/10 p-3 rounded-full">
                        <i class="fas fa-map-marker-alt text-[#ff8001] text-xl"></i>
                        </div>
                        <div>
                        <h4 class="font-semibold text-[#013f3a]">Office/Meeting Venue</h4>
                        <p class="text-gray-600">Hotel Central Park, Bhilai</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="bg-[#013f3a]/10 p-3 rounded-full">
                        <i class="fab fa-whatsapp text-[#013f3a] text-xl"></i>
                        </div>
                        <div>
                        <h4 class="font-semibold text-[#013f3a]">WhatsApp</h4>
                        <a href="#" class="text-[#013f3a] hover:text-[#ff8001]">Send Message</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-[#013f3a] to-[#ff8001] text-white p-8 rounded-xl">
                    <h3 class="text-2xl font-bold mb-4">Ready to Network?</h3>
                    <p class="mb-6">Join our next meeting and experience the power of {{ env('APP_INITIALS') }} networking in action.
                    </p>
                    <a href="#events"
                    class="bg-white text-[#013f3a] px-6 py-3 rounded-lg font-bold hover:bg-[#ff8001] hover:text-white transition duration-300 inline-block">
                    <i class="fas fa-calendar-plus mr-2"></i>Register for Meeting
                    </a>
                </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg">
                <form action="{{ route('store.feedback') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                    <label class="block text-sm font-semibold text-[#013f3a] mb-2">Full Name *</label>
                    <input type="text" name="name" required
                        class="w-full px-4 py-3 rounded-lg border border-[#013f3a]/30 focus:outline-none focus:ring-2 focus:ring-[#ff8001] focus:border-transparent">
                    </div>

                    <div>
                    <label class="block text-sm font-semibold text-[#013f3a] mb-2">Phone Number *</label>
                    <input type="tel" name="mobile" required
                        class="w-full px-4 py-3 rounded-lg border border-[#013f3a]/30 focus:outline-none focus:ring-2 focus:ring-[#ff8001] focus:border-transparent">
                    </div>

                    <div>
                    <label class="block text-sm font-semibold text-[#013f3a] mb-2">Email Address *</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-3 rounded-lg border border-[#013f3a]/30 focus:outline-none focus:ring-2 focus:ring-[#ff8001] focus:border-transparent">
                    </div>

                    <div>
                    <label class="block text-sm font-semibold text-[#013f3a] mb-2">Your Message *</label>
                    <textarea name="message" rows="5" required
                        class="w-full px-4 py-3 rounded-lg border border-[#013f3a]/30 focus:outline-none focus:ring-2 focus:ring-[#ff8001] focus:border-transparent"></textarea>
                    </div>

                    <button type="submit"
                    class="w-full bg-[#ff8001] text-[#013f3a] px-8 py-4 rounded-lg font-bold hover:bg-[#013f3a] hover:text-white transition duration-300">
                    <i class="fas fa-paper-plane mr-2"></i>Send Message
                    </button>
                </form>
                </div>
            </div>
            </div>
        </section>
 <!-- Alpine Component -->
    <script>
        function bgRotator() {
            return {
                images: [1, 2], // Add your banner image numbers
                counter: 0,
                paused: false,
                intervalId: null,

                start() {
                    this.intervalId = setInterval(() => {
                        if (!this.paused) {
                            this.counter = (this.counter + 1) % this.images.length;
                        }
                    }, 4000); // Change image every 4 seconds
                }
            };
        }
    </script>


</x-app>
