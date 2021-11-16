@if ($message = Session::get('success'))
    <div role="alert" class="alert alert-success alert-dismissable fade show">
        <strong>{{ $message }}</strong>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if ($message = Session::get('error'))
    <div role="alert" class="alert alert-danger alert-dismissable fade show">
        <strong>{{ $message }}</strong>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
