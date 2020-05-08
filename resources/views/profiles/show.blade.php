<x-app>
    <div>
        <header class="mb-6 w-full relative">
            <img src="/image/banner.jpg" class="rounded-lg h-64 w-full mb-2" alt="">
            <div class="flex justify-between mb-4">
                <div>
                    <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                    <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
                </div>
                <div>
                    <a href="" class="bg-white rounded-full border border-gray-300 py-2 px-4 text-sm">Edit Profile</a>
                    <a href="" class="bg-blue-400 rounded-full shadow py-2 px-4 text-white text-sm">Follow Me</a>
                </div>
            </div>
            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                A error nisi nostrum nulla odit, quo quos temporibus. Cumque dignissimos
                distinctio error ipsam iste obcaecati perferendis quia reiciendis.
                Adipisci consequatur dolore earum est eveniet excepturi exercitationem.</p>
            <img src="{{$user->avatar}}" alt="your avatar" class="rounded-full mr-3 absolute" style="width: 150px; left: calc(50% - 75px); top: 138px;">
        </header>
        <hr>
        @include('_feed', ['tweets' => $user->tweets])
    </div>
</x-app>
