@extends('ecommerce.admin.main')

@section('content')
<div class="row g-3">
    <div class="col-xxl-8">
        <div class="card overflow-hidden h-100">
            <div class="card-body p-0">
                <div class="row g-3">
                    <div class="col-md-12">
                        <div class="p-card">
                            <div class="">
                                <h6 class="mb-0">New Product Section</h6>
                            </div>
                            <div class="d-flex justify-content-between offset-md-9">
                                <div class="order-md-1">
                                    <button class="btn btn-sm text-primary border order-md-0" type="button" data-bs-toggle="modal" data-bs-target="#new_product_modal">
                                        <span class="fas fa-plus me-2"></span>New Product
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="scrollbar">
                            <table class="table mb-0 table-borderless fs--2 border-200 overflow-hidden new_product_table">
                                <thead class="bg-light">
                                    <tr class="text-800">
                                        <th class="sort">Name</th>
                                        <th class="sort text-center">Image</th>
                                        <th class="sort text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade hardware_stock_modal" id="new_product_modal" tabindex="-1" role="dialog" aria-hidden="true">
    @include('ecommerce.admin.cms.products.new_product_form')
</div>
@endsection



