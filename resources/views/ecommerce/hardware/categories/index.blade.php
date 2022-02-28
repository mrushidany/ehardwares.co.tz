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
                          <li class="breadcrumb-item active" aria-current="page">Hardware Categories</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-04a84c37-02de-4512-aca8-22eaf4ce4808" id="dom-04a84c37-02de-4512-aca8-22eaf4ce4808">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#main_categories_tab" role="tab" aria-controls="main_categories_tab" aria-selected="true">Main Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#sub_categories_tab" role="tab" aria-controls="tab-profile" aria-selected="false">Sub Categories</a>
                        </li>
                    </ul>
                    <div class="tab-content border-x border-bottom p-3" id="myTabContent">
                        <div class="tab-pane fade active show" id="main_categories_tab" role="tabpanel" aria-labelledby="main_categories_tab">
                            @include('ecommerce.hardware.categories.tabs.main_categories')
                        </div>
                        <div class="tab-pane fade" id="sub_categories_tab" role="tabpanel" aria-labelledby="sub_categories_tab">
                            @include('ecommerce.hardware.categories.tabs.sub_categories')
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="application/javascript">


   let datatable = $('.hardware_categories_table').DataTable({
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

  let main_datatable = $('.hardware_sub_categories_table').DataTable({
                serverSide: true,
                processing: true,
                lengthMenu: [[10, 25, 50], [10, 25, 50]],
                ajax: {
                    url: "{{ route('hardware_sub_category_list') }}",
                },
                columns: [
                    {data: 'name', name: 'name', orderable: true, searchable: true},
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
