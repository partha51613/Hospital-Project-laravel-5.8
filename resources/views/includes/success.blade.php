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

@if(session()->has('added'))
    <div class="alert alert-success">
        {{ session()->get('added') }}
    </div>
@endif

@if(session()->has('edited'))
    <div class="alert alert-success">
        {{ session()->get('edited') }}
    </div>
@endif
