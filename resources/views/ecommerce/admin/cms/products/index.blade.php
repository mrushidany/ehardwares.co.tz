@extends('ecommerce.admin.main')

@section('content')
<div class="card-body bg-light">
    <div class="card mb-3">
        <div class="card-body position-relative">
            <div class="row">
                <div class="col-auto ms-auto">
                    <div class="p-card">
                        <div style="margin-left: -450%;">
                            <h6 class="mb-0">New Product Section</h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between offset-md-2">
                        <div class="order-md-1">
                            <button class="btn btn-sm text-primary border order-md-0" type="button" data-bs-toggle="modal" data-bs-target="#new_product_modal">
                                <span class="fas fa-plus me-2"></span>New Product
                            </button>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body pt-0">
                        <table class="table mb-0 table-borderless fs--2 border-200 overflow-hidden new_product_table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
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



