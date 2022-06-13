@extends('ecommerce.admin.main')

@section('content')
<div class="row g-3">
    <div class="col">
      <div class="row g-3">
        <div class="col-md-4 col-xxl-12">
          <div class="card h-100">
            <div class="card-body">
              <div class="row flex-between-center g-0">
                <div class="col-6 d-lg-block flex-between-center">
                  <h6 class="mb-2 text-900">Active Users</h6>
                  <h4 class="fs-3 fw-normal text-700 mb-0">765k</h4>
                </div>
                <div class="col-auto h-100">
                  <div style="height: 50px; min-width: 80px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" data-echarts="{&quot;xAxis&quot;:{&quot;show&quot;:false,&quot;boundaryGap&quot;:false},&quot;series&quot;:[{&quot;data&quot;:[3,7,6,8,5,12,11],&quot;type&quot;:&quot;line&quot;,&quot;symbol&quot;:&quot;none&quot;}],&quot;grid&quot;:{&quot;right&quot;:&quot;0px&quot;,&quot;left&quot;:&quot;0px&quot;,&quot;bottom&quot;:&quot;0px&quot;,&quot;top&quot;:&quot;0px&quot;}}" _echarts_instance_="ec_1655112109481"><div style="position: relative; width: 80px; height: 50px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="80" height="50" style="position: absolute; left: 0px; top: 0px; width: 80px; height: 50px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xxl-12">
          <div class="card h-100">
            <div class="card-body">
              <div class="row flex-between-center">
                <div class="col d-md-flex d-lg-block flex-between-center">
                  <h6 class="mb-md-0 mb-lg-2">Revenue</h6><span class="badge rounded-pill badge-soft-success"><svg class="svg-inline--fa fa-caret-up fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="fas fa-caret-up"></span> Font Awesome fontawesome.com --> 61.8%</span>
                </div>
                <div class="col-auto">
                  <h4 class="fs-3 fw-normal text-700" data-countup="{&quot;endValue&quot;:82.18,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;M&quot;,&quot;prefix&quot;:&quot;$&quot;}">$82.18M</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xxl-12">
          <div class="card h-100">
            <div class="card-body">
              <div class="row flex-between-center">
                <div class="col d-md-flex d-lg-block flex-between-center">
                  <h6 class="mb-md-0 mb-lg-2">Conversion</h6><span class="badge rounded-pill badge-soft-primary"><svg class="svg-inline--fa fa-caret-up fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="fas fa-caret-up"></span> Font Awesome fontawesome.com --> 29.4%</span>
                </div>
                <div class="col-auto">
                  <h4 class="fs-3 fw-normal text-primary" data-countup="{&quot;endValue&quot;:28.5,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;%&quot;}">28.50%</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
