@extends('ecommerce.admin.main')

@section('content')
<div class="row g-0">
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-center">
                <div class="col">
                    <nav style="--falcon-breadcrumb-divider: '»';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Hardware Stock</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-body bg-light">
    <div class="card mb-3">
        <div class="card-body position-relative">
            <div class="row">
                <div class="col-auto ms-auto">
                    <div class="nav nav-pills nav-pills-falcon flex-grow-1">
                        <span>
                            <button class="btn btn-falcon-success rounded-pill btn-sm me-1 mb-1" type="button">
                                <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                                <span class="ms-1">Stock</span>
                            </button>
                            <button class="btn btn-falcon-success rounded-pill btn-sm me-1 mb-1" type="button">
                                <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                                <span class="ms-1"><i class="fas fa-file-csv"></i></span>
                            </button>
                            <div class="modal fade hardware_category_modal" id="hardware_category_modal" tabindex="-1" role="dialog" aria-hidden="true">
                                @include('ecommerce.hardware.categories.forms.hardware_category_form')
                            </div>
                        </span>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body pt-0">
                        <table class="table table-striped table-bordered hardware_stocks_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Units</th>
                                    <th>Qunatity</th>
                                    <th>Price</th>
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
@endsection

@section('scripts')
<script type="application/javascript">
let main_datatable = $('.hardware_stocks_table').DataTable({
    serverSide: true,
    processing: true,
    lengthMenu: [[10, 25, 50], [10, 25, 50]],
    ajax: {
        url: "{{ route('hardware_category_list') }}",
    },
    columns: [
        {data: 'category_name', name: 'category_name', orderable: true, searchable: true},
        {data: 'description', name: 'description', orderable: false, searchable: true},
        {data: 'action', name: 'action', orderable: false, searchable: false },
    ],
    language: {
        zeroRecords: "<div class='alert alert-info' style='background-color: #ccf6e4'>No matching hardware category(ies) found</div>",
        emptyTable: "<div class='alert alert-info' style='background-color: #ccf6e4'>No hardware category(ies) found</div>"
    },


});

</script>


@endsection
