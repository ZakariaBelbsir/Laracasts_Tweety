<x-app>
    <div>
        <header class="mb-6 w-full relative">
            <div class="relative">
                <img src="{{$user->banner}}" class="rounded-lg h-64 w-full mb-2" alt="">
                <img src="{{ $user->avatar  }}" alt="your avatar"
                     class="rounded-full mr-3 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                     style="left:50%;"
                     width="150">
            </div>
            <div class="flex justify-between mb-6">
                <div style="max-width: 270px;">
                    <h2 class="font-bold text-2xl mb-0 ">{{$user->name}}</h2>
                    <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
                </div>
                <div>
                    @can('edit', $user)
                    <a href="{{$user->path('edit')}}" class="h-full bg-white text-black border border-gray-300 rounded-full py-2 px-4 text-sm">Edit Profile</a>
                    @endcan
                    <x-follow_button :user="$user"></x-follow_button>
                </div>
            </div>
            <p class="text-sm">{{$user->description? $user->description : 'No description yet.'}}</p>
        </header>
        <hr>
        @include('_feed', ['tweets' => $tweets])
    </div>
</x-app>
