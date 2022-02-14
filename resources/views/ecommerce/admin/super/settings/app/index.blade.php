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
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-e8c9367f-b535-4cba-a4c4-53eeebf4822e" id="dom-e8c9367f-b535-4cba-a4c4-53eeebf4822e">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">How long do payouts take?</button>
                            </h2>
                            <div class="accordion-collapse collapse show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">Once you’re set up, payouts arrive in your bank account on a 2-day rolling basis. Or you can opt to receive payouts weekly or monthly.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">How do refunds work?</button>
                             </h2>
                            <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                <div class="accordion-body">You can issue either partial or full refunds. There are no fees to refund a charge, but the fees from the original charge are not returned.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
