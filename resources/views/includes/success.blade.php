@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('deleted'))
    <div class="alert alert-danger">
        {{ session()->get('deleted') }}
    </div>
@endif
