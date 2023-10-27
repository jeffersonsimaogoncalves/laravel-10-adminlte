<x-admin>
    @section('title')
        {{ 'Dashboard' }}
    @endsection
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulations !</strong> You loged in successfully.
        <button type="button" class="btn btn-sm float-end float-right" data-bs-dismiss="alert" aria-label="Close">&times;</button>
      </div>
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>
</x-admin>
