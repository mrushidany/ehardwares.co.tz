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
                                <a class="btn btn-outline-primary btn-sm me-1 mb-1 category_button" href=""><i class="fas fa-plus"></i>&nbsp;Category</a>
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
