<div class="row">

    <div class="col-md-12 mb-3">
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control">
        </div>
    </div>

    <x-input label="First Name" name="name" :value="$customer->name"/>

    <x-input label="Last Name" name="last_name" :value="$customer->last_name"/>

    <x-input type="email" label="Email Address" name="email" :value="$customer->email"/>

    <x-input label="Phone" name="phone" :value="$customer->phone"/>

    <x-input label="Credit Card Number" name="card_number" :value="$customer->card_number"/>


    <div class="col-md-12 mb-3">
        <div class="form-group">
            <label for="">Biography</label>
            <textarea name="biography" class="form-control">{{ old('biography', $customer->biography) }}</textarea>
            @error('biography')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> {{ $button_title ?? 'Create' }}</button>
    </div>
</div>
