@extends('ecommerce.admin.super.main')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor" id="table-example">
                        All users
                        <a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#table-example" style="padding-left: 0.375em;"></a>
                    </h5>
                </div>

            </div>
            <div class="card-body pt-0">
                <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-striped fs--1 mb-0 all_users_table">
                        <thead class="bg-200 text-900">
                             <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Age</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                        </tbody>
                    </table>
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
