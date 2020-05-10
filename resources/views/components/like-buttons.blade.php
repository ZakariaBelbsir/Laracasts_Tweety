<div class="flex items-center">
    <form action="/tweets/{{$tweet->id}}/like" method="post">
        @csrf
        <div class="flex items-center {{$tweet->isLikedBy(auth()->user()) ? 'text-blue-500' : 'text-gray-500'}} mr-2">
            <button type="submit"><i class="fas fa-thumbs-up mr-2"></i></button>
            <span class="text-xs">{{$tweet->likes ?: 0}}</span>
        </div>
    </form>
    <form action="/tweets/{{$tweet->id}}/like" method="post">
        @csrf
        @method('delete')
        <div class="flex items-center {{$tweet->isDislikedBy(auth()->user()) ? 'text-blue-500' : 'text-gray-500'}}">
            <button type="submit"><i class="fas fa-thumbs-down mr-2"></i></button>
            <span class="text-xs">{{$tweet->dislikes ?: 0}}</span>
        </div>
    </form>
</div>
