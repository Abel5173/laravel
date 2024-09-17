<x-layout>

    <x-slot:heading>
        Register
    </x-slot:heading>
    
    <form method="POST" action="/register" class="max-w-3xl max-h-full mx-auto mt-12 bg-gray-50 p-8 rounded-xl shadow-lg space-y-8" enctype="multipart/form-data">
        @csrf

        <!-- Form Heading -->
        <h2 class="text-3xl font-semibold text-gray-900 mb-6 text-center">Create Your Account</h2>

        <div class="flex flex-col gap-6">

            <!-- First Name -->
            <x-form-field>
                <x-form-label for="first_name">First Name</x-form-label>
                <div class="mt-1">
                    <x-form-input name="first_name" id="first_name" autocomplete="first_name" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-lime-300" />
                    <x-form-error name="first_name" />
                </div>
            </x-form-field>

            <!-- Last Name -->
            <x-form-field>
                <x-form-label for="last_name">Last Name</x-form-label>
                <div class="mt-1">
                    <x-form-input name="last_name" id="last_name" autocomplete="last_name" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-lime-300" />
                    <x-form-error name="last_name" />
                </div>
            </x-form-field>

            <!-- Email -->
            <x-form-field class="sm:col-span-2">
                <x-form-label for="email">Email</x-form-label>
                <div class="mt-1">
                    <x-form-input name="email" id="email" type="email" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-lime-300" />
                    <x-form-error name="email" />
                </div>
            </x-form-field>

            <!-- Password -->
            <x-form-field class="sm:col-span-2">
                <x-form-label for="password">Password</x-form-label>
                <div class="mt-1">
                    <x-form-input name="password" id="password" type="password" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-lime-300" />
                    <x-form-error name="password" />
                </div>
            </x-form-field>

            <!-- Confirm Password -->
            <x-form-field class="sm:col-span-2">
                <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <div class="mt-1">
                    <x-form-input name="password_confirmation" id="password_confirmation" type="password" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-lime-300" />
                    <x-form-error name="password_confirmation" />
                </div>
            </x-form-field>
            
            <!-- Divider -->
            <div class="border-t w-full border-gray-300 my-6"></div>

            <!-- Employer Name -->
            <x-form-field class="sm:col-span-2">
                <x-form-label for="name">Employer Name</x-form-label>
                <div class="mt-1">
                    <x-form-input name="name" id="name" required 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring focus:ring-lime-300" />
                    <x-form-error name="name" />
                </div>
            </x-form-field>

            <!-- Company Logo -->
            <x-form-field class="sm:col-span-2">
                <x-form-label for="logo">Company Logo</x-form-label>
                <div class="mt-1">
                    <x-photo-input name="logo" id="logo" />
                    <x-form-error name="logo" />
                </div>
            </x-form-field>
            
            <!-- Divider -->
            <div class="border-t w-full border-gray-300 my-6"></div>
            
            <!-- Action Buttons -->
            <div class="flex items-center justify-end space-x-4">
                <a href="/" class="text-sm font-semibold text-gray-500 hover:text-gray-700 transition-colors duration-200">Cancel</a>
                <x-form-button class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-6 py-3 rounded-lg transition-all duration-300">Register</x-form-button>
            </div>

        </div>
    </form>


</x-layout>