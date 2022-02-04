@extends('ecommerce.admin.main')


@section('content')
<div class="card mb-3">
    <div class="card-header position-relative min-vh-25 mb-7">
        <div class="bg-holder rounded-3 rounded-bottom-0" style="background-image:url({{ asset('ecommerce/assets/img/generic/4.jpg') }});"></div>
      <!--/.bg-holder-->
        <div class="avatar avatar-5xl avatar-profile">
            @if (Auth::user()->hasRole('super_administrator'))
                <img class="rounded-circle img-thumbnail shadow-sm" src="{{ asset('ecommerce/assets/img/team/5-thumb.png') }}" width="200" alt="">
            @else
                <img class="rounded-circle img-thumbnail shadow-sm" src="{{ asset('ecommerce/assets/img/team/avatar.png') }}" width="200" alt="">
            @endif
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                <h4 class="mb-1">&nbsp;{{ Auth::user()->first_name ." ". Auth::user()->last_name }}
                    <span data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Verified" aria-label="Verified">
                        <small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small>
                    </span>
                </h4>
                <h5 class="fs-0 fw-normal">&nbsp;{{ $role_name }}</h5>
                <p class="text-500">{{ $location }}</p>
                <button class="btn btn-falcon-primary btn-sm px-3" type="button">
                    <i class="fas fa-edit"></i>&nbsp;Edit
                </button>
                <div class="border-dashed-bottom my-4 d-lg-none"></div>
            </div>
        </div>
    </div>
</div>
@endsection
