@if($form->message['message'] ?? false)
        @if($form->message['type'] === 'success')
            <p class="py-2 px-4 bg-emerald-500 text-white rounded-md ">{{ $form->message['message'] }}</p>
        @else
            <p class="py-2 px-4 bg-rose-500 text-white rounded-md">{{ $form->message['message'] }}</p>
        @endif
    @endif
