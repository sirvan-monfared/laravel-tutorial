<div>


    <div>
        <form wire:submit="submit">

            <select class="bg-white border border-gray-300 py-1" wire:model="greeting">
                @foreach($greetings as $greet)
                    <option value="{{ $greet->greeting }}">{{ $greet->greeting }}</option>
                @endforeach
            </select>

            <input type="text"
                   class="bg-white border border-gray-300 py-1"
                   wire:model="name"
            >

            <button
                type="submit"
                class="bg-blue-500 text-white py-1 px-4 mt-4 cursor-pointer"
            >
                Greet!
            </button>
        </form>

        <p class="mt-3">
            @error('name') {{ $message }}  @enderror
        </p>
    </div>
    <div>
        {{ $greetingMessage }}
    </div>
</div>
