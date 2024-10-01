<x-layout>
    <div class="container ">
        <div class="row">
            <div class="col-3">
                <x-card button-text="Continue Reading..." title="Harry Potter and the sorcerer`s stone">
                    <x-slot name="image">
                        <img class="card-img-top" src="{{ $customer->image }}" alt="Card image cap">
                    </x-slot>

                    <x-slot name="body">
                        <p class="card-text">{{ $customer->body }}</p>
                    </x-slot>
                </x-card>
            </div>
            <div class="col-3">
                <x-card button-text="Continue Reading..." title="Harry Potter and the sorcerer`s stone">
                    <x-slot name="image">
                        <img class="card-img-top" src="{{ $customer->image }}" alt="Card image cap">
                    </x-slot>

                    <x-slot name="body">
                        <p class="card-text">{{ $customer->body }}</p>
                    </x-slot>
                </x-card>
            </div>
            <div class="col-3">
                <x-card button-text="Continue Reading..." title="Harry Potter and the sorcerer`s stone">
                    <x-slot name="image">
                        <img class="card-img-top" src="{{ $customer->image }}" alt="Card image cap">
                    </x-slot>

                    <x-slot name="body">
                        <p class="card-text">{{ $customer->body }}</p>
                    </x-slot>
                </x-card>
            </div>
        </div>

    </div>


    <x-slot:js>
        <script>
            alert('yess');
        </script>
    </x-slot:js>



</x-layout>
