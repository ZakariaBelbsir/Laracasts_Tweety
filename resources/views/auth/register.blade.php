<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
                    <div class="font-bold text-lg mb-4">Register</div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-6">
                                <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
                                <input type="text" name="name" id="name" required class="border border-gray-400 p-2 w-full" value="{{'name'}}">
                                @error('name')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                                <input type="text" name="username" id="username" required class="border border-gray-400 p-2 w-full" value="{{'username'}}">
                                @error('username')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                                <input type="email" name="email" id="email" required class="border border-gray-400 p-2 w-full" value="{{'email'}}">
                                @error('email')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                                <input type="password" name="password" id="password" required class="border border-gray-400 p-2 w-full">
                                @error('password')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password Confirmation</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" required class="border border-gray-400 p-2 w-full">
                                @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                        </form>
        </div>
    </div>
</x-master>
