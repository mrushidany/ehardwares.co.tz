@extends('ecommerce.admin.main')

@section('content')
<div class="card mb-3">
    <div class="card-header bg-light">
        <h5 class="mb-0">Website Data</h5>
    </div>
    <div class="card-body fs--1 pb-0">
        <div class="row">
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="d-flex position-relative align-items-center mb-2">
                    <span class="fas fa-laptop-code text-primary fs-5"></span> &nbsp;&nbsp;
                    <div class="flex-1">
                        <h6 class="fs-0 mb-0">
                            <a class="stretched-link" href="{{ route('app_settings') }}"> App Settings</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
