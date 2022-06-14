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
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 900px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="hardware_category_form" enctype="multipart/form-data">
                <div class="modal-body p-0">
                    <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light text-center">
                        <h4 class="mb-1" id="modalExampleDemoLabel">Add a new product for a new product section </h4>
                    </div>
                    <div class="p-4 pb-0">
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label class="col-form-label" for="name">Name</label>
                                <input class="form-control" name="name" type="text" value="">
                            </div>
                            <div class="mb-3 col-6">
                                <label class="col-form-label" for="image">Image</label>
                                <input class="form-control" name="image" type="file" accept="image/*" onchange="verifyImageUpload(e)">
                            </div>
                            <div class="mb-3 col-12">
                                <label class="col-form-label" for="description">Description</label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-warning me-1 mb-1 reset_hardware_stock" type="reset">Reset</button>
                    <button class="btn btn-outline-success me-1 mb-1 save_new_product" onclick="produccc()" type="button">Save</button>
                    <button class="btn btn-outline-success me-1 mb-1 disabled loading_button" style="display: none;" type="button">Saving .....</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="application/javascript">
    window.URL = window.URL || window.webkitURl;

    function verifyImageUpload(e)
    {
        alert('We have managed to access the function');
    }
</script>



@endsection


