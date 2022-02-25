@extends('ecommerce.admin.main')

@section('content')
<div class="content">
    <div class="card">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col">
                    <nav style="--falcon-breadcrumb-divider: '»';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('settings') }}">Settings</a></li>
                            <li class="breadcrumb-item active" aria-current="page">App Settings</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#database_settings" aria-expanded="true" aria-controls="collapse1">
                                    <span class="fas fa-database me-1" data-fa-transform="shrink-3"></span> Database Settings
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse show" id="database_settings" aria-labelledby="heading1" data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button class="btn btn-falcon-success me-1 mb-1 db_migrate" type="button">
                                                <span class="fas fa-sync me-1" data-fa-transform="shrink-3"></span> DB Migrate
                                            </button>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-falcon-default me-1 mb-1 dg_migrate_rollback" type="button">
                                                <span class="fas fa-undo me-1" data-fa-transform="shrink-3"></span> DB Migrate RollBack
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#configuration_settings" aria-expanded="true" aria-controls="collapse2">
                                    <span class="fas fa-rocket me-1" data-fa-transform="shrink-3"></span> Configuration Settings
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="configuration_settings" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button class="btn btn-falcon-danger me-1 mb-1 config_cache" type="button">
                                                <span class="far fa-trash-alt me-1" data-fa-transform="shrink-3"></span> Clear Cache
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
