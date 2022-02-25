<div class="card mb-3">
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-auto ms-auto">
                <div class="nav nav-pills nav-pills-falcon flex-grow-1">
                    <span>
                        <button class="btn btn-outline-primary btn-sm me-1 mb-1" type="button" data-bs-toggle="modal" data-bs-target="#hardware_sub_category_modal">
                            <i class="fas fa-plus"></i>&nbsp; Sub-Category
                        </button>
                        <button class="btn btn-outline-primary btn-sm me-1 mb-1" type="button" data-bs-toggle="modal" data-bs-target="#hardware_sub_category_modal">
                            <i class="fas fa-file-csv"></i>
                        </button>
                        <div class="modal fade" id="hardware_sub_category_modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <th>Category Name</th>
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
