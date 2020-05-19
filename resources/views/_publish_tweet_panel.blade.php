<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea name="body" id="" class="w-full" required placeholder="What's up doc?"></textarea>
        <label for="image">Attach a photo?</label>
        <input type="file" name="image" id="image">
        <hr class="my-4">
        <footer class="flex justify-between items-center">
            <img src="{{auth()->user()->avatar}}" alt="your avatar" class="rounded-full mr-3" width="40" height="40">
            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-10 text-sm text-white hover:bg-blue-600">Publish</button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-2">{{$message}}</p>
    @enderror
</div>
