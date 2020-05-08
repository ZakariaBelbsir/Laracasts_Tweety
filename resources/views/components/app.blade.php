<x-master>
    <section class="px-8">
        <main class="mx-auto">
            <div class="flex justify-between">
                <div class="lg:w-32">
                    @include('_sidebar_links')
                </div>
                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
                    {{ $slot }}
                </div>
                <div class="lg:w-1/6 bg-blue-100 rounded p-4">
                    @include('_friends_list')
                </div>
            </div>
        </main>
    </section>
</x-master>
