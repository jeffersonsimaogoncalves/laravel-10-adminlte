@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn btn-sm float-end float-right" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@endif
@if (session()->has('secondary'))
    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
        {{ session()->get('secondary') }}
        <button type="button" class="btn btn-sm float-end float-right" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@endif
@if (session()->has('primary'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session()->get('primary') }}
        <button type="button" class="btn btn-sm float-end float-right" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@endif
@if (session()->has('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session()->get('warning') }}
        <button type="button" class="btn btn-sm float-end float-right" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@endif
@if (session()->has('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session()->get('danger') }}
        <button type="button" class="btn btn-sm float-end float-right" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@endif
@if (session()->has('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ session()->get('info') }}
        <button type="button" class="btn btn-sm float-end float-right" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@endif
@if (session()->has('light'))
    <div class="alert alert-light alert-dismissible fade show" role="alert">
        {{ session()->get('light') }}
        <button type="button" class="btn btn-sm float-end float-right" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@endif
@if (session()->has('dark'))
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
        {{ session()->get('dark') }}
        <button type="button" class="btn btn-sm float-end float-right" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@endif
