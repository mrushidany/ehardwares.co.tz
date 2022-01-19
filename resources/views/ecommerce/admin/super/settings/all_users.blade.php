@extends('ecommerce.admin.super.main')

@section('content')
<div class="card z-index-1 mb-3" >
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">All users </h5>
            </div>
      </div>
    </div>
    <div class="card-body px-0 py-0">
      <div class="table-responsive scrollbar">
        <table class="table table-sm fs--1 mb-0 overflow-hidden">
          <thead class="bg-200 text-900">
            <tr>
              <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Name</th>
              <th class="sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
              <th class="sort pe-1 align-middle white-space-nowrap" data-sort="product">Phone Number</th>
              <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="payment">Role</th>
              <th class="no-sort pe-1 align-middle data-table-row-action"></th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>


@endsection
