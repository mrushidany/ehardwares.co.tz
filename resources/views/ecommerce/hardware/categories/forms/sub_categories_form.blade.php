<div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 900px">
    <div class="modal-content position-relative">
        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
            <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="hardware_category_form">
            <div class="modal-body p-0">
                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light text-center">
                    <h4 class="mb-1" id="modalExampleDemoLabel">Add a new sub-hardware category </h4>
                </div>
                <div class="p-4 pb-0">
                    <div class="row">
                        <div class="mb-3 col-4">
                            <label for="main_category">Main Category</label>
                            <select class="form-select js-choice" id="organizerSingle" size="1" name="main_category_id" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Select main category</option>
                                <option>Massachusetts Institute of Technology</option>
                                <option>University of Chicago</option>
                                <option>GSAS Open Labs At Harvard</option>
                                <option>California Institute of Technology </option>
                              </select>
                        </div>
                        <div class="mb-3 col-4">
                            <label class="col-form-label" for="hardware_category_name">Name</label>
                            <input class="form-control" name="name" type="text">
                        </div>
                        <div class="mb-3 col-4">
                            <label class="col-form-label" for="description">Description</label>
                            <textarea class="form-control" rows="2" name="description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-warning me-1 mb-1 reset_hardware_category" type="reset">Reset</button>
                <button class="btn btn-outline-success me-1 mb-1 save_hardware_category" type="button">Save</button>
                <button class="btn btn-outline-success me-1 mb-1 disabled loading_button" style="display: none;" type="button">Saving .....</button>
            </div>
        </form>
    </div>
</div>
