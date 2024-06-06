<x-guest-layout>
    @section('title', 'Register')
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-custom-blue to-custom-purple">
        <!-- Registration Card -->
        <div class="w-full max-w-md p-custom-padding space-y-6 bg-white rounded-lg shadow-custom-light">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-gray-800">Sign Up</h2>
                <p class="mt-2 text-sm text-gray-600">Join us and start your journey today!</p>
            </div>
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-input mt-1 block w-full rounded-md border-2 shadow-sm focus:border-purple-700 focus:ring focus:ring-purple-700 focus:ring-opacity-50 "/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="form-input mt-1 block w-full rounded-md border-2 shadow-sm focus:border-purple-700 focus:ring focus:ring-purple-700 focus:ring-opacity-50 "/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" class="form-input mt-1 block w-full rounded-md border-2 shadow-sm focus:border-purple-700 focus:ring focus:ring-purple-700 focus:ring-opacity-50 "/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-input mt-1 block w-full rounded-md border-2 shadow-sm focus:border-purple-700 focus:ring focus:ring-purple-700 focus:ring-opacity-50 "/>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="w-full py-3 bg-purple-600 text-white rounded-md hover:bg-purple-700 focus:outline-none focus:bg-purple-700 ">Register</button>
                </div>
            </form>
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">Already have an account? <a href="{{ route('login') }}" class="font-medium text-custom-blue hover:text-custom-purple transition duration-200 ease-in-out">Login here</a></p>
            </div>
        </div>
    </div>
</x-guest-layout>
