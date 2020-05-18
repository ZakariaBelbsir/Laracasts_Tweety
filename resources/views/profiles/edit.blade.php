<x-app>
    <form action="{{$user->path()}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
            <input type="text" name="name" id="name" required class="border border-gray-400 p-2 w-full" value="{{$user->name}}">
            @error('name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
            <input type="text" name="username" id="username" required class="border border-gray-400 p-2 w-full" value="{{$user->username}}">
            @error('username')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="description" class="block mb-2 uppercase font-bold text-xs text-gray-700">Description</label>
            <textarea name="description" id="description" class="w-full border border-gray-400 p-2"></textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div>
            <div class="mb-6">
                <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">Avatar</label>
                <div class="flex">
                    <input type="file" name="avatar" id="avatar" class="border border-gray-400 p-2 w-full">
                    <img src="{{$user->avatar}}" alt="your avatar" width="40">
                </div>
                @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div>
            <div class="mb-6">
                <label for="banner" class="block mb-2 uppercase font-bold text-xs text-gray-700">Banner</label>
                <div class="flex">
                    <input type="file" name="banner" id="banner" class="border border-gray-400 p-2 w-full">
                    <img src="{{$user->banner}}" alt="your banner" width="40">
                </div>
                @error('banner')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
            <input type="email" name="email" id="email" required class="border border-gray-400 p-2 w-full" value="{{$user->email}}">
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

        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">Submit</button>
        <a href="{{$user->path()}}" class="hover:underline">Cancel</a>

    </form>
</x-app>
