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
                @include('_friends_list')
            </div>
        </main>
    </section>
</x-master>
