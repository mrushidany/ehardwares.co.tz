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
                                <div class="ps-3">
                                    <p class="text-600 fs--1">Today’s total sales </p>
                                    <h4 class="text-800 mb-0">10,000 /=</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="mb-0 list-unstyled">
                            <li class="alert mb-0 rounded-0 py-3 px-card alert-warning border-x-0 border-top-0">
                                <div class="row flex-between-center">
                                    <div class="col">
                                        <div class="d-flex">
                                            <div class="fas fa-circle mt-1 fs--2"></div>
                                            <p class="fs--1 ps-2 mb-0">
                                                <strong>5 invoices</strong> needs to be approved
                                            </p>
                                        </div>
                                    </div>
                                     <div class="col-auto d-flex align-items-center">
                                        <a class="alert-link fs--1 fw-medium" href="#!">View products
                                            <i class="fas fa-chevron-right ms-1 fs--2"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top border-x-0 border-top-0">
                                <div class="row flex-between-center">
                                    <div class="col">
                                        <div class="d-flex">
                                            <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                            <p class="fs--1 ps-2 mb-0">
                                                <strong>7 orders</strong> have payments that need to be captured
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <a class="alert-link fs--1 fw-medium" href="#!">View payments
                                            <i class="fas fa-chevron-right ms-1 fs--2"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top  border-0">
                                <div class="row flex-between-center">
                                    <div class="col">
                                        <div class="d-flex">
                                            <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                            <p class="fs--1 ps-2 mb-0">
                                                <strong>50+ orders</strong> need to be fulfilled
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <a class="alert-link fs--1 fw-medium" href="#!">View orders
                                            <i class="fas fa-chevron-right ms-1 fs--2"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card h-md-100 ecommerce-card-min-width">
                            <div class="card-header pb-0">
                                <h6 class="mb-0 mt-2 d-flex align-items-center">Weekly Sales
                                    <span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Calculated according to last week's sales" aria-label="Calculated according to last week's sales">
                                        <span class="far fa-question-circle" data-fa-transform="shrink-1"></span>
                                    </span>
                                </h6>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-end">
                                <div class="row">
                                    <div class="col">
                                        <p class="font-sans-serif lh-1 mb-1 fs-2">10K /=</p>
                                        <span class="badge badge-soft-success rounded-pill fs--2">+3.5%</span>
                                    </div>
                                    <div class="col-auto ps-0">
                                        <div class="echart-bar-weekly-sales h-100 echart-bar-weekly-sales-smaller-width" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1642598351989">
                                            <div style="position: relative; width: 104px; height: 51px; padding: 0px; margin: 0px; border-width: 0px;">
                                                <canvas data-zr-dom-id="zr_0" width="104" height="51" style="position: absolute; left: 0px; top: 0px; width: 104px; height: 51px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                            </div>
                                            <div class=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card product-share-doughnut-width">
                            <div class="card-header pb-0">
                                <h6 class="mb-0 mt-2 d-flex align-items-center">Products in Store</h6>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-column justify-content-between">
                                        <p class="font-sans-serif lh-1 mb-1 fs-2">34.6%</p>
                                        <span class="badge badge-soft-warning rounded-pill fs--2">
                                            <span class="fas fa-caret-up me-1"></span> 3.5%
                                        </span>
                                    </div>
                                    <div>
                                        <canvas class="my-n5" id="marketShareDoughnut" width="112" height="112" style="display: block; box-sizing: border-box; height: 112px; width: 112px;"></canvas>
                                        <p class="mb-0 text-center fs--2 mt-4 text-500">Target:
                                            <span class="text-800">55% </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-header pb-0">
                                <h6 class="mb-0 mt-2 d-flex align-items-center">Total Order</h6>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-end">
                                    <div class="col">
                                        <p class="font-sans-serif lh-1 mb-1 fs-2">58.4K</p>
                                        <div class="badge badge-soft-primary rounded-pill fs--2">
                                            <span class="fas fa-caret-up me-1"></span>13.6%
                                        </div>
                                    </div>
                                    <div class="col-auto ps-0">
                                        <div class="total-order-ecommerce" data-echarts="{&quot;series&quot;:[{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:[110,100,250,210,530,480,320,325]}],&quot;grid&quot;:{&quot;bottom&quot;:&quot;-10px&quot;}}" _echarts_instance_="ec_1642598351995" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;">
                                            <div style="position: relative; width: 144px; height: 64px; padding: 0px; margin: 0px; border-width: 0px;">
                                                <canvas data-zr-dom-id="zr_0" width="144" height="64" style="position: absolute; left: 0px; top: 0px; width: 144px; height: 64px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                            </div>
                                            <div class=""></div>
                                        </div>
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
