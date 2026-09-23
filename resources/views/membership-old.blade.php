<x-app>
        <div class='h-24'>s</div>

    <div class="content bg-emerald-900 p-4" style="background-image: url('{{ asset('img/poster.jpg') }}');background-size: cover;background-repeat: no-repeat;" >
            {{-- @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded-md mb-4 max-w-lg mx-auto">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-500 text-white p-4 rounded-md mb-4 max-w-lg mx-auto">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded-md mb-4 max-w-lg mx-auto">
                    <p class="font-bold">Please correct the following errors:</p>
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

        <div class="max-w-6xl mx-auto flex flex-col md:flex-row">
            <div class="w-full md:w-1/2">
                <form method="POST" action="{{ route('membership.register') }}" enctype="multipart/form-data" class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
                    @csrf
                    <h1 class="text-2xl font-bold mb-4">Membership Form</h1>

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Full Name: <span class="text-red-500">*</span></label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full px-3 py-2 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-md" required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="company" class="block text-gray-700 font-bold mb-2">Business Name:</label>
                        <input type="text" name="company" id="company" value="{{ old('company') }}" class="w-full px-3 py-2 border @error('company') border-red-500 @else border-gray-300 @enderror rounded-md">
                        @error('company')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="category" class="block text-gray-700 font-bold mb-2">Business Category: <span class="text-red-500">*</span></label>
                        <input type="text" name="category" id="category" value="{{ old('category') }}" class="w-full px-3 py-2 border @error('category') border-red-500 @else border-gray-300 @enderror rounded-md" required>
                        @error('category')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="mobile" class="block text-gray-700 font-bold mb-2">Phone No.: <span class="text-red-500">*</span></label>
                        <input type="text" name="mobile" id="mobile" value="{{ old('mobile') }}" class="w-full px-3 py-2 border @error('mobile') border-red-500 @else border-gray-300 @enderror rounded-md" required>
                        @error('mobile')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="bio" class="block text-gray-700 font-bold mb-2">Short Description of Your Business *</label>
                        <textarea name="bio" id="bio" class="w-full px-3 py-2 border @error('bio') border-red-500 @else border-gray-300 @enderror rounded-md">{{ old('bio') }}</textarea>
                        @error('bio')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email: <span class="text-red-500">*</span></label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full px-3 py-2 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-md" required>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 font-bold mb-2">City / Location: <span class="text-red-500">*</span></label>
                        <textarea name="address" id="address" class="w-full px-3 py-2 border @error('address') border-red-500 @else border-gray-300 @enderror rounded-md" required>{{ old('address') }}</textarea>
                        @error('address')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="payment_details" class="block text-gray-700 font-bold mb-2">Payment Details: <span class="text-red-500">*</span></label>
                        <textarea name="payment_details" id="payment_details" class="w-full px-3 py-2 border @error('payment_details') border-red-500 @else border-gray-300 @enderror rounded-md" required>{{ old('payment_details') }}</textarea>
                        <p class="text-sm text-gray-500 mt-1">Include transaction ID, payment method, etc.</p>
                        @error('payment_details')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="payment_screenshot" class="block text-gray-700 font-bold mb-2">Payment Screenshot: <span class="text-red-500">*</span></label>
                        <input type="file" name="payment_screenshot" id="payment_screenshot" class="w-full px-3 py-2 border @error('payment_screenshot') border-red-500 @else border-gray-300 @enderror rounded-md" accept="image/*" required>
                        <p class="text-sm text-gray-500 mt-1">Upload an image of your payment receipt/screenshot (JPG, PNG, JPEG). Max size: 5MB</p>
                        @error('payment_screenshot')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="other_details" class="block text-gray-700 font-bold mb-2">Why do you want to join {{ env('APP_INITIALS') }}?</label>
                        <textarea name="other_details" id="other_details" class="w-full px-3 py-2 border @error('other_details') border-red-500 @else border-gray-300 @enderror rounded-md">{{ old('other_details') }}</textarea>
                        @error('other_details')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Register
                        </button>
                    </div>
                </form>
            </div>
            <div class="poster hidden md:block md:w-1/2">
                <!-- Poster content here if needed -->
            </div>
        </div>
    </div>
</x-app>
