@extends('ecommerce.admin.main')

@section('content')
    <div class="col-lg-6 col-xl-12 col-xxl-6 h-100 user_data">
        <div class="d-flex mb-4">
            <span class="fa-stack me-2 ms-n1">
                <i class="fas fa-circle fa-stack-2x text-300"></i>
                <i class="fa-inverse fa-stack-1x text-primary fas fa-check-double"></i>
            </span>
            <div class="col">
                <h5 class="mb-0 text-primary position-relative">
                    <span class="bg-200 dark__bg-1100 pe-3">Add new user details</span>
                    <span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span>
                </h5>
            </div>
        </div>
        <div class="card theme-wizard h-100 mb-5">
            <div class="card-header bg-light pt-3 pb-2">
                <ul class="nav justify-content-between nav-wizard">
                    <li class="nav-item">
                        <a class="nav-link active fw-semi-bold" href="#account_tab" data-bs-toggle="tab" data-wizard-step="data-wizard-step">
                             <span class="nav-item-circle-parent">
                                 <span class="nav-item-circle">
                                    <span class="fas fa-lock"></span>
                                </span>
                            </span>
                            <span class="d-none d-md-block mt-1 fs--1">Account</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semi-bold" href="#roles_and_priviledges_tab" data-bs-toggle="tab" data-wizard-step="data-wizard-step">
                            <span class="nav-item-circle-parent">
                                <span class="nav-item-circle">
                                    <span class="fas fa-user"></span>
                                </span>
                            </span>
                            <span class="d-none d-md-block mt-1 fs--1">Roles and Priviledges</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semi-bold" href="#done_tab" data-bs-toggle="tab" data-wizard-step="data-wizard-step">
                            <span class="nav-item-circle-parent">
                                <span class="nav-item-circle">
                                    <span class="fas fa-thumbs-up"></span>
                                </span>
                            </span>
                            <span class="d-none d-md-block mt-1 fs--1">Done</span>
                        </a>
                    </li>
                </ul>
            </div>
        <div class="card-body py-4" id="wizard-controller">
            <div class="tab-content">
                @include('ecommerce.admin.super.settings.users.add_user.tabs.account_tab')
                @include('ecommerce.admin.super.settings.users.add_user.tabs.roles_and_priviledges_tab')
                @include('ecommerce.admin.super.settings.users.add_user.tabs.done_tab')

        </div>
    </div>
    <div class="card-footer bg-light">
        <div class="px-sm-3 px-md-5">
            <ul class="pager wizard list-inline mb-0">
                <li class="previous">
                    <button class="btn btn-link ps-0 d-none" type="button">
                        <span class="fas fa-chevron-left me-2" data-fa-transform="shrink-3"></span>Prev
                    </button>
                </li>
                <li class="next">
                    <button class="btn btn-primary px-5 px-sm-6" type="submit">Next
                        <span class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3"> </span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
@endsection

