<x-front.layouts.main>

    <section class="container mx-auto max-w-screen-lg min-h-[calc(100vh-8.25rem)] lg:min-h-[calc(100vh-21.75rem)]">
        <div class="px-2 lg:px-0">

            <div class="mt-7 grid grid-cols-12 gap-2">
                <div class="col-span-12 lg:col-span-4">

                    <livewire:dashboard.chat-list/>

                </div>


                <!-- LEFT PANEL -->
                <div class="col-span-12 lg:col-span-8">

                    <livewire:dashboard.chat-conversation/>

                </div>
            </div>

        </div>
    </section>

</x-front.layouts.main>
