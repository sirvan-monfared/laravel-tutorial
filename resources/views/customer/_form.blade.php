<div class="row">

    <div class="col-md-12 mb-3">
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control">
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <label for="">First Name</label>
            <input type="text" name="name" class="form-control" value="{{ $customer->name }}">
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" name="last_name" class="form-control" value="{{ $customer->last_name }}">
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" value="{{ $customer->email }}">
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}">
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <div class="form-group">
            <label for="">Credit Card</label>
            <input type="text" name="card_number" class="form-control" value="{{ $customer->card_number }}">
        </div>
    </div>

    <div class="col-md-12 mb-3">
        <div class="form-group">
            <label for="">Biography</label>
            <textarea name="biography" class="form-control">{{ $customer->biography }}</textarea>
        </div>
    </div>
    <div class="col-md-12 mb-3">
        <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> {{ $button_title ?? 'Create' }}</button>
    </div>
</div>
