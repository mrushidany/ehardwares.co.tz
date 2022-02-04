@extends('ecommerce.admin.main')

@section('content')
<div class="card mb-3">
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col">
                <nav style="--falcon-breadcrumb-divider: '»';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Hardware Categories</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
    <div class="card-body bg-light">
        <div class="card mb-3">
            <div class="card-body position-relative">
                <div class="row">
                    <div class="col-auto ms-auto">
                        <div class="nav nav-pills nav-pills-falcon flex-grow-1">
                            <span>
                                <button class="btn btn-outline-primary btn-sm me-1 mb-1" type="button" data-bs-toggle="modal" data-bs-target="#error-modal">
                                    <i class="fas fa-plus"></i>&nbsp;Category
                                </button>
<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
          <h4 class="mb-1" id="modalExampleDemoLabel">Add a new illustration </h4>
        </div>
        <div class="p-4 pb-0">
          <form>
            <div class="mb-3">
              <label class="col-form-label" for="recipient-name">Recipient:</label>
              <input class="form-control" id="recipient-name" type="text" />
            </div>
            <div class="mb-3">
              <label class="col-form-label" for="message-text">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="button">Understood </button>
      </div>
    </div>
  </div>
</div>
                            </span>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body pt-0">
                            <table class="table table-striped table-bordered hadware_categories_table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Description</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
