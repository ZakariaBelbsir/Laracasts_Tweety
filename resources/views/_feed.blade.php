<div class="border border-gray-300 rounded-lg border-b border-b-gray-400">
    @forelse($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4">No tweets yet</p>
    @endforelse
    {{ $tweets->links() }}
</div>
