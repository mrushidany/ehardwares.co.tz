@extends('ecommerce.admin.main')

@section('content')
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

    </div>
</div>

@endsection
