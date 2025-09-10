<x-app>
        <div class='h-24'>s</div>

    <div class="pt-6 max-w-6xl mx-auto px-4" x-data="{ choice: 'expression_of_interest' }">
        <h1 class="text-2xl font-bold mb-4">Are you interested in becoming a member of {{ env('APP_INITIALS') }}?</h1>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Choose an option</label>
            <div>
                <label class="inline-flex items-center">
                    <input selected type="radio" name="choice" @click="choice = 'expression_of_interest'"
                        value="expression_of_interest" class="form-radio text-[#013f3a]" checked>
                    <span class="ml-2">Yes, I'm ready to get started</span>
                </label>
            </div>
            <div>
                <label class="inline-flex items-center">
                    <input type="radio" name="choice" @click="choice = 'request_for_information'"
                        value="request_for_information" class="form-radio text-[#013f3a]">
                    <span class="ml-2">Maybe, I would like more information</span>
                </label>
            </div>
            <div>
                <label class="inline-flex items-center">
                    <input type="radio" name="choice" @click="choice = 'feedback_form'" value="feedback_form"
                        class="form-radio text-[#013f3a]">
                    <span class="ml-2">No, not as of now</span>
                </label>
            </div>
        </div>
        <div class="">
            <h1 class="text-2xl font-bold mt-4"> {{ env('APP_INITIALS') }} Meeting: <span x-text="choice.replace(/_/g, ' ').replace(/^./, c => c.toUpperCase())"></span></h1>
            <p class="mb-4">Thank you for visiting our chapter. We would like to collect some feedback.</p>
            <form action="{{ route('expression-of-interest.store') }}" method="post" class="col-span-2">
                @csrf
                <input type="hidden" name="form_type" x-model="choice">

                <!-- First section - Chapter info -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label for="chapter_name" class="block text-gray-700 font-bold mb-2">Chapter Name</label>
                        <input type="text" name="chapter_name"  id="chapter_name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Name">
                    </div>
                    <div class="mb-4">
                        <label for="region" class="block text-gray-700 font-bold mb-2">Region</label>
                        <input type="text" name="region"  id="region"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Region">
                    </div>
                    <div class="mb-4">
                        <label for="invited_by" class="block text-gray-700 font-bold mb-2">Who Invited You to this
                            Meeting?</label>
                        <input type="text" name="invited_by" id="invited_by"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Inviter's Name">
                    </div>
                    <div class="mb-4">
                        <label for="visit_date" class="block text-gray-700 font-bold mb-2">Chapter Visit Date</label>
                        <input type="date" name="visit_date" id="visit_date"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="referral_source" class="block text-gray-700 font-bold mb-2">How did you hear about
                            us?</label>
                        <input type="text" name="referral_source" id="referral_source"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Referral Source">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Have you been a {{ env('APP_INITIALS') }} member previously?</label>
                        <div class="flex space-x-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="previous_member" value="1"
                                    class="form-radio text-[#013f3a]">
                                <span class="ml-2">Yes</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="previous_member" value="0"
                                    class="form-radio text-[#013f3a]">
                                <span class="ml-2">No</span>
                            </label>
                        </div>
                    </div>
                </div>

                <h1 class="text-4xl text-[#013f3a] py-10 font-bold mb-4">ABOUT YOU</h1>

                <!-- Second section - About you -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label for="first_name" class="block text-gray-700 font-bold mb-2">First</label>
                        <input type="text" name="first_name" id="first_name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="First Name" required>
                    </div>
                    <div class="mb-4">
                        <label for="last_name" class="block text-gray-700 font-bold mb-2">Last</label>
                        <input type="text" name="last_name" id="last_name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Last Name" required>
                    </div>
                    <div class="mb-4">
                        <label for="company_name" class="block text-gray-700 font-bold mb-2">Company Name</label>
                        <input type="text" name="company_name" id="company_name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Company Name" required>
                    </div>
                    <div class="mb-4">
                        <label for="professional_classification" class="block text-gray-700 font-bold mb-2">What is your Professional Classification?</label>
                        <input type="text" name="professional_classification" id="professional_classification"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Professional Classification" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" name="email" id="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Email" required>
                    </div>
                    <div class="mb-4">
                        <label for="mobile" class="block text-gray-700 font-bold mb-2">Mobile</label>
                        <input type="tel" name="mobile" id="mobile"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Mobile" required>
                    </div>

                    <!-- Full width elements -->
                    <div class="mb-4 md:col-span-2">
                        <label class="block text-gray-700 font-bold mb-2">On a scale of 1-10, How was your experience in this meeting?</label>
                        <div class="flex flex-wrap gap-2">
                            @for ($i = 1; $i <= 10; $i++)
                                <label class="inline-flex items-center">
                                    <input type="radio" name="experience_rating" value="{{ $i }}" class="form-radio text-[#013f3a]" required>
                                    <span class="ml-2">{{ $i }}</span>
                                </label>
                            @endfor
                        </div>
                    </div>
                    <div class="mb-4 md:col-span-2">
                        <label for="product_service_feedback" class="block text-gray-700 font-bold mb-2">Describe Your Product or Service (be specific) and your Feedback.</label>
                        <textarea name="product_service_feedback" id="product_service_feedback" rows="4"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Your feedback here..." required></textarea>
                    </div>

                    <div class="mb-4 md:col-span-2">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="agreement" value="agree" class="form-checkbox text-[#013f3a]" required>
                            <span class="ml-2">I Agree to the Terms and Conditions & Privacy Policy</span>
                        </label>
                    </div>
                    <div class="mb-4 md:col-span-2">
                        <p class="text-gray-600 text-sm">Privacy Policy: By submitting this Application, you agree to receive communication from or relating to {{ env('APP_INITIALS') }}, and further agree that {{ env('APP_INITIALS') }} may share your information and any other information and material you provide with other {{ env('APP_INITIALS') }} members, affiliates, vendors, and third parties in order to provide you services as a {{ env('APP_INITIALS') }} member. Please visit <a href="{{ route('privacy') }}" class="text-[#013f3a]">{{ env('APP_INITIALS') }} Privacy Policy</a>.</p>
                    </div>
                    <div class="mb-4 md:col-span-2">
                        <button type="submit" class="bg-[#013f3a] text-white px-4 py-2 rounded hover:bg-indigo-700 focus:outline-none focus:shadow-outline">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>
