<div class="card mb-3">
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-auto ms-auto">
                <div class="nav nav-pills nav-pills-falcon flex-grow-1">
                    <span>
                        <button class="btn btn-falcon-success rounded-pill btn-sm me-1 mb-1" type="button" data-bs-toggle="modal" data-bs-target="#hardware_sub_category_modal">
                            <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                            <span class="ms-1">&nbsp; Sub-Category</span>
                        </button>
                        <button class="btn btn-falcon-success rounded-pill btn-sm me-1 mb-1" type="button" data-bs-toggle="modal" data-bs-target="#hardware_sub_category_modal">
                            <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                            <span class="ms-1"><i class="fas fa-file-csv"></i></span>
                        </button>
                        <div class="modal fade hardware_sub_category_modal" id="hardware_sub_category_modal" tabindex="-1" role="dialog" aria-hidden="true">
                            @include('ecommerce.hardware.categories.forms.sub_categories_form')
                        </div>
                    </span>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-body pt-0">
                    <table class="table table-striped table-bordered hardware_sub_categories_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sub-Category Name</th>
                                <th>Description</th>
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
