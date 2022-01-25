@extends('ecommerce.admin.main')

@section('content')
<div class="row g-3 mb-3">
    <div class="col-xxl-6 col-xl-12">
        <div class="row g-3">
            <div class="col-12">
                <div class="card bg-transparent-50 overflow-hidden">
                    <div class="card-header position-relative">
                        <div class="bg-holder d-none d-md-block bg-card z-index-1" style="background-image:url({{ asset('ecommerce/assets/img/illustrations/ecommerce-bg.png') }});background-size:230px;background-position:right bottom;z-index:-1;"></div>
                        <!--/.bg-holder-->
                        <div class="position-relative z-index-2">
                            <div>
                                <h3 class="text-primary mb-1">{{ $greeting }}, {{ Auth::user()->first_name }} !</h3>
                                    <p>Here’s what happening with
                                        <i style="color: orangered">
                                            <strong>ehardwares.co.tz</strong>
                                        </i>&nbsp;today
                                    </p>
                            </div>
                            <div class="d-flex py-3">
                                <div class="pe-3">
                                    <p class="text-600 fs--1 fw-medium">Today's visit </p>
                                    <h4 class="text-800 mb-0">3</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
