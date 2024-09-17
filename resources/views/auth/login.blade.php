<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>
    
        <form method="POST" action="/login" class="max-w-md mx-auto mt-10 bg-white p-8 rounded-lg shadow-lg">
        @csrf
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Login to Your Account</h2>
        
        <div class="space-y-8">
            <div class="grid grid-cols-1 gap-6">
                
                <!-- Email Field -->
                <x-form-field>
                    <x-form-label for="email">Email</x-form-label>
                    <div class="mt-1 relative">
                        <x-form-input name="email" id="email" type="email" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-emerald-300 focus:outline-none" />
                        <x-form-error name="email" />
                    </div>
                </x-form-field>
                
                <!-- Password Field -->
                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-1 relative">
                        <x-form-input name="password" id="password" type="password" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-emerald-300 focus:outline-none" />
                        <x-form-error name="password" />
                    </div>
                </x-form-field>

            </div>
        </div>

        <!-- Action Buttons -->
        <div class="mt-6 flex items-center justify-between">
            <a href="#" class="text-sm font-semibold text-gray-600 hover:text-emerald-600 transition-colors duration-200">Cancel</a>
            <x-form-button class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-2 rounded-lg transition-all duration-300">Login</x-form-button>
        </div>

        <!-- Extra Links -->
        <div class="mt-4 text-sm text-gray-600 text-center">
            <a href="/register" class="hover:underline hover:text-emerald-500">Don't have an account? Sign up</a>
        </div>
    </form>


</x-layout>