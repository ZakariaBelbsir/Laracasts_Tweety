    <div class="flex p-4">
        <div class="mr-2">
            <a href="{{route('profile', $tweet->user)}}">
                <img src="{{$tweet->user->avatar}}" alt="" class="rounded-full mr-3" height="50" width="50">
            </a>
        </div>
        <div>
            <a href="{{route('profile', $tweet->user)}}">
                <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
            </a>
            <p class="text-sm">{{$tweet->body}} </p>
        </div>
    </div>

