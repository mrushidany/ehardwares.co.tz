@extends('ecommerce.admin.main')

@section('content')
<div class="card mb-3">
    <div class="card-header bg-light">
        <h5 class="mb-0">Website Data</h5>
    </div>
    <div class="card-body fs--1 pb-0">
        <div class="row">
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="d-flex position-relative align-items-center mb-2">
                    <span class="fas fa-laptop-code text-primary fs-5"></span> &nbsp;&nbsp;
                    <div class="flex-1">
                        <h6 class="fs-0 mb-0">
                            <a class="stretched-link" onclick="render_gallery()"> Web Images</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid image_gallery_collapse">
    <div class="card">
        <div class="card-body">
            <div class="row">
                m,,kkfk
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script type="application/javascript">
    function render_gallery(){
        var url = $(location).attr("href");
        var id = url.split('/').pop();
        $.ajax({
            url : "{{route('hardware_stock_image', '')}}"+"/"+id,
            type: 'GET',
            data : {
                _token: "{{csrf_token()}}",
            },
            success: function (data){

            }
        })


    }
</script>


@endsection
