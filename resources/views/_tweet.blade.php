    <div class="flex p-4 {{$loop->last ? '' : 'border-b border-gray-400'}}">
        <div class="mr-2 flex-shrink-0">
            <a href="{{route('profile', $tweet->user)}}">
                <img src="{{$tweet->user->avatar}}" alt="" class="rounded-full mr-3" height="50" width="50">
            </a>
        </div>
        <div class="w-full">
            <a href="{{route('profile', $tweet->user)}}">
                <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
            </a>
            <div class="flex justify-between w-full">
                <p class="text-sm mb-3">{{$tweet->body}} </p>
                @can('delete', $tweet)
                    <form action="/tweets/{{$tweet->id}}/delete" method="post" class="bg-red-500 text-xs text-white rounded-lg px-4 py-2">
                        @csrf
                        @method('delete')
                        <button type="submit" class="">Delete</button>
                    </form>
                @endcan
            </div>
            <x-like-buttons :tweet="$tweet" />
        </div>

    </div>

