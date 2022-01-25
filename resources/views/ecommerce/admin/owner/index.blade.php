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
                  <p>Here’s what happening with <i style="color: orangered"><strong>ehardwares.co.tz<strong></i>&nbsp; today </p>
                </div>
                <div class="d-flex py-3">
                  <div class="pe-3">
                    <p class="text-600 fs--1 fw-medium">Today's visit </p>
                    <h4 class="text-800 mb-0"></h4>
                  </div>
                  <div class="ps-3">
                    <p class="text-600 fs--1">Today’s total sales </p>
                    <h4 class="text-800 mb-0"> /=</h4>
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
                        <svg class="svg-inline--fa fa-circle fa-w-16 mt-1 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <div class="fas fa-circle mt-1 fs--2"></div> Font Awesome fontawesome.com -->
                        <p class="fs--1 ps-2 mb-0"><strong>5 invoices</strong> needs to be approved</p>
                      </div>
                    </div>
                    <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View products<svg class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fas fa-chevron-right ms-1 fs--2"></i> Font Awesome fontawesome.com --></a></div>
                  </div>
                </li>
                <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top border-x-0 border-top-0">
                  <div class="row flex-between-center">
                    <div class="col">
                      <div class="d-flex">
                        <svg class="svg-inline--fa fa-circle fa-w-16 mt-1 fs--2 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <div class="fas fa-circle mt-1 fs--2 text-primary"></div> Font Awesome fontawesome.com -->
                        <p class="fs--1 ps-2 mb-0"><strong>7 orders</strong> have payments that need to be captured</p>
                      </div>
                    </div>
                    <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View payments<svg class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fas fa-chevron-right ms-1 fs--2"></i> Font Awesome fontawesome.com --></a></div>
                  </div>
                </li>
                <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top  border-0">
                  <div class="row flex-between-center">
                    <div class="col">
                      <div class="d-flex">
                        <svg class="svg-inline--fa fa-circle fa-w-16 mt-1 fs--2 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <div class="fas fa-circle mt-1 fs--2 text-primary"></div> Font Awesome fontawesome.com -->
                        <p class="fs--1 ps-2 mb-0"><strong>50+ orders</strong> need to be fulfilled</p>
                      </div>
                    </div>
                    <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View orders<svg class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fas fa-chevron-right ms-1 fs--2"></i> Font Awesome fontawesome.com --></a></div>
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
                          <!-- <span class="far fa-question-circle" data-fa-transform="shrink-1"></span> Font Awesome fontawesome.com --></span></h6>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row">
                    <div class="col">
                      <p class="font-sans-serif lh-1 mb-1 fs-2">$47K</p><span class="badge badge-soft-success rounded-pill fs--2">+3.5%</span>
                    </div>
                    <div class="col-auto ps-0">
                      <div class="echart-bar-weekly-sales h-100 echart-bar-weekly-sales-smaller-width" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1642598351989"><div style="position: relative; width: 104px; height: 51px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="104" height="51" style="position: absolute; left: 0px; top: 0px; width: 104px; height: 51px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card product-share-doughnut-width">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2 d-flex align-items-center">Product Share</h6>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column justify-content-between">
                      <p class="font-sans-serif lh-1 mb-1 fs-2">34.6%</p><span class="badge badge-soft-warning rounded-pill fs--2"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="fas fa-caret-up me-1"></span> Font Awesome fontawesome.com -->3.5%</span>
                    </div>
                    <div><canvas class="my-n5" id="marketShareDoughnut" width="112" height="112" style="display: block; box-sizing: border-box; height: 112px; width: 112px;"></canvas>
                      <p class="mb-0 text-center fs--2 mt-4 text-500">Target: <span class="text-800">55% </span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card h-md-100 h-100">
                <div class="card-body">
                  <div class="row h-100 justify-content-between g-0">
                    <div class="col-5 col-sm-6 col-xxl pe-2">
                      <h6 class="mt-1">Market Share</h6>
                      <div class="fs--2 mt-3">
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">Falcon</span></div>
                          <div class="d-xxl-none">57%</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Sparrow</span></div>
                          <div class="d-xxl-none">20%</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-warning"></span><span class="fw-semi-bold">Phoenix</span></div>
                          <div class="d-xxl-none">22%</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto position-relative">
                      <div class="echart-product-share" _echarts_instance_="ec_1642598351991" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"><div style="position: relative; width: 106px; height: 106px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="106" height="106" style="position: absolute; left: 0px; top: 0px; width: 106px; height: 106px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>
                      <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2">26M</div>
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
                      <div class="badge badge-soft-primary rounded-pill fs--2"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="fas fa-caret-up me-1"></span> Font Awesome fontawesome.com -->13.6%</div>
                    </div>
                    <div class="col-auto ps-0">
                      <div class="total-order-ecommerce" data-echarts="{&quot;series&quot;:[{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:[110,100,250,210,530,480,320,325]}],&quot;grid&quot;:{&quot;bottom&quot;:&quot;-10px&quot;}}" _echarts_instance_="ec_1642598351995" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"><div style="position: relative; width: 144px; height: 64px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="144" height="64" style="position: absolute; left: 0px; top: 0px; width: 144px; height: 64px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-6 col-xl-12">
      <div class="card py-3 mb-3">
        <div class="card-body py-3">
          <div class="row g-0">
            <div class="col-6 col-md-4 border-200 border-bottom border-end pb-4">
              <h6 class="pb-1 text-700">Orders </h6>
              <p class="font-sans-serif lh-1 mb-1 fs-2">15,450 </p>
              <div class="d-flex align-items-center">
                <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                <h6 class="fs--2 ps-3 mb-0 text-primary"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up"></span> Font Awesome fontawesome.com -->21.8%</h6>
              </div>
            </div>
            <div class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-end pb-4 ps-3">
              <h6 class="pb-1 text-700">Items sold </h6>
              <p class="font-sans-serif lh-1 mb-1 fs-2">1,054 </p>
              <div class="d-flex align-items-center">
                <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                <h6 class="fs--2 ps-3 mb-0 text-warning"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up"></span> Font Awesome fontawesome.com -->21.8%</h6>
              </div>
            </div>
            <div class="col-6 col-md-4 border-200 border-bottom border-end border-md-end-0 pb-4 pt-4 pt-md-0 ps-md-3">
              <h6 class="pb-1 text-700">Refunds </h6>
              <p class="font-sans-serif lh-1 mb-1 fs-2">$145.65 </p>
              <div class="d-flex align-items-center">
                <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                <h6 class="fs--2 ps-3 mb-0 text-success"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up"></span> Font Awesome fontawesome.com -->21.8%</h6>
              </div>
            </div>
            <div class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-bottom-0 border-md-end pt-4 pb-md-0 ps-3 ps-md-0">
              <h6 class="pb-1 text-700">Gross sale </h6>
              <p class="font-sans-serif lh-1 mb-1 fs-2">$100.26 </p>
              <div class="d-flex align-items-center">
                <h6 class="fs--1 text-500 mb-0">$109.65 </h6>
                <h6 class="fs--2 ps-3 mb-0 text-danger"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up"></span> Font Awesome fontawesome.com -->21.8%</h6>
              </div>
            </div>
            <div class="col-6 col-md-4 border-200 border-md-bottom-0 border-end pt-4 pb-md-0 ps-md-3">
              <h6 class="pb-1 text-700">Shipping </h6>
              <p class="font-sans-serif lh-1 mb-1 fs-2">$365.53 </p>
              <div class="d-flex align-items-center">
                <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                <h6 class="fs--2 ps-3 mb-0 text-success"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up"></span> Font Awesome fontawesome.com -->21.8%</h6>
              </div>
            </div>
            <div class="col-6 col-md-4 pb-0 pt-4 ps-3">
              <h6 class="pb-1 text-700">Processing </h6>
              <p class="font-sans-serif lh-1 mb-1 fs-2">861 </p>
              <div class="d-flex align-items-center">
                <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                <h6 class="fs--2 ps-3 mb-0 text-info"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up"></span> Font Awesome fontawesome.com -->21.8%</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <div class="row flex-between-center g-0">
            <div class="col-auto">
              <h6 class="mb-0">Total Sales</h6>
            </div>
            <div class="col-auto d-flex">
              <div class="form-check mb-0 d-flex"><input class="form-check-input form-check-input-primary" id="ecommerceLastMonth" type="checkbox" checked="checked"><label class="form-check-label ps-2 fs--2 text-600 mb-0" for="ecommerceLastMonth">Last Month<span class="text-dark d-none d-md-inline">: $32,502.00</span></label></div>
              <div class="form-check mb-0 d-flex ps-0 ps-md-3"><input class="form-check-input ms-2 form-check-input-warning opacity-75" id="ecommercePrevYear" type="checkbox" checked="checked"><label class="form-check-label ps-2 fs--2 text-600 mb-0" for="ecommercePrevYear">Prev Year<span class="text-dark d-none d-md-inline">: $46,018.00</span></label></div>
            </div>
            <div class="col-auto">
              <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-total-sales-ecomm" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-total-sales-ecomm"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body pe-xxl-0">
          <!-- Find the JS file for the following chart at: src/js/charts/echarts/total-sales-ecommerce.js-->
          <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
          <div class="echart-line-total-sales-ecommerce" data-echart-responsive="true" data-options="{&quot;optionOne&quot;:&quot;ecommerceLastMonth&quot;,&quot;optionTwo&quot;:&quot;ecommercePrevYear&quot;}" _echarts_instance_="ec_1642598351992" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;">
            <div style="position: relative; width: 818px; height: 298px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                <canvas data-zr-dom-id="zr_0" width="818" height="298" style="position: absolute; left: 0px; top: 0px; width: 818px; height: 298px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
            </div>
            <div class="" style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; background-color: rgb(249, 250, 253); border-width: 1px; border-radius: 4px; color: rgb(11, 23, 39); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 7px 10px; top: 0px; left: 0px; transform: translate3d(132px, -18px, 0px); border-color: rgb(216, 226, 239); pointer-events: none; visibility: hidden; opacity: 0;">
                <span class="fas fa-circle" style="color: #2c7be5"></span>
                <span class="text-600">Last Month: 60</span><br>
                <span class="fas fa-circle" style="color: rgba(245,128,62, 0.6)"></span>
                <span class="text-600">Previous Year: 40</span>
            </div>
        </div>
    </div>
  </div>
</div>
</div>

@endsection
