@extends('ecommerce.admin.super.main')

@section('content')
       <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor" id="card-with-background">All users</h5>
                </div>
                <div class="col-auto ms-auto">
                    {{-- Buttons to be added --}}
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="card mb-3">
                <div class="card-body position-relative">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-body pt-0">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Role</th>
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
    </div>

@endsection

@section('scripts')

<script type="application/javascript">
    console.log('test javascript');

    $('.all_users_table').DataTable({

    });

</script>

@endsection
