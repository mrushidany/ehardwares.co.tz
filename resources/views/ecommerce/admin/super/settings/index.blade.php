@extends('ecommerce.admin.main')

@section('content')
<div class="card mb-3">
    <div class="card-header bg-light">
        <h5 class="mb-0">Settings</h5>
    </div>
    <div class="card-body fs--1 pb-0">
        <div class="row">
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="d-flex position-relative align-items-center mb-2">
                    <span class="fas fa-users text-primary fs-5"></span> &nbsp;&nbsp;
                    <div class="flex-1">
                        <h6 class="fs-0 mb-0">
                            <a class="stretched-link" href="{{ route('all_users') }}">Users</a>
                        </h6>
                        <p class="mb-1">{{ $users }} users</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="d-flex position-relative align-items-center mb-2">
                    <span class="fas fa-cogs text-primary fs-5"></span> &nbsp;&nbsp;
                    <div class="flex-1">
                        <h6 class="fs-0 mb-0">
                            <a class="stretched-link" href="">Settings</a>
                        </h6>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
