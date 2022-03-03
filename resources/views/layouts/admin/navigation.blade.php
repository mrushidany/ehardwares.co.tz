<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation">
                <span class="navbar-toggle-icon">
                    <span class="toggle-line"></span>
                </span>
            </button>
        </div>
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <div class="d-flex align-items-center py-3" style="text-decoration-color: orangered">
                    <img class="me-2" src="{{ asset('ecommerce/img/icon.jpeg') }}" alt="" width="40" />
                </div>
            </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                {{-- Dashboard Navigational Links--}}
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link" href="{{ route('dashboard') }}" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-chart-pie"></span>
                            </span>
                            <span class="nav-link-text ps-1">Dashboard</span>
                        </div>
                    </a>
                </li>

                {{-- Operations Navigational Links --}}
                <li class="nav-item">
                    <!--OPerations label-->
                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                        <div class="col-auto navbar-vertical-label">Operations</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                    @if (Auth::user()->hasRole('administrator') || Auth::user()->hasRole('super_administrator'))
                    <a class="nav-link dropdown-indicator" href="#hardware" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="hardware">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-tools"></span>
                            </span>
                            <span class="nav-link-text ps-1">Hardware</span>
                        </div>
                    </a>
                    <ul class="nav collapse false" id="hardware">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hardware_categories.index') }}" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span class="text-xl fs-1 bi-diagram-3"></span>
                                    </span>
                                    <span class="nav-link-text ps-1">Hardware Categories</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hardware_stock.index') }}" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span class="text-xl fs-1 bi-building"></span>
                                    </span>
                                    <span class="nav-link-text ps-1">Hardware Stock</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
  <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggle-icon">
            <span class="toggle-line"></span>
        </span>
    </button>
  </nav>
