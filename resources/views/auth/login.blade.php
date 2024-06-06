<x-guest-layout>
    @section('title', 'Login')
    {{-- <div class="flex items-center justify-center min-h-screen bg-gray-100"> --}}
        <div class="w-full max-w-md p-8 ">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-gray-800">Welcome Back!</h2>
                <p class="mt-2 text-sm text-gray-600">Login to continue your journey</p>
            </div>
            <form method="POST" action="{{ route('login') }}" class="space-y-6 mt-4">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="form-input mt-1 block w-full rounded-md border-2 shadow-sm focus:border-purple-700 focus:ring focus:ring-purple-700 focus:ring-opacity-50"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" class="form-input mt-1 block w-full rounded-md border-2 shadow-sm focus:border-purple-700 focus:ring focus:ring-purple-700 focus:ring-opacity-50"/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="w-full py-3 bg-purple-600 text-white rounded-md hover:bg-purple-700 focus:outline-none focus:bg-purple-700">Login</button>
                </div>
            </form>
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="font-medium text-purple-600 hover:text-purple-500 transition duration-200 ease-in-out">Sign Up</a></p>
            </div>
        </div>
    {{-- </div> --}}
</x-guest-layout>
