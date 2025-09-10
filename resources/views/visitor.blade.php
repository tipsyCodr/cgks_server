<x-app>
        <div class='h-24'>s</div>

    <!-- Start Generation Here -->
    <div class="max-w-6xl mx-auto py-10">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">Visitor</h1>
        </div>
        <form action="{{ route('visitor.register') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Enter your name">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Enter your email">
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" id="phone" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Enter your phone number">
        </div>
        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <input type="text" name="address" id="address" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Enter your address">
        </div>
        <div class="mb-4">
            <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
            <input type="text" name="company" id="company" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Enter your company name">
        </div>
        <div class="mb-4">
            <label for="position" class="block text-sm font-medium text-gray-700">Business Category</label>
            <input type="text" name="position" id="position" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Enter your business category">
        </div>
    
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Register</button>
    </form>
</div>
<!-- End Generation Here -->

</x-app>