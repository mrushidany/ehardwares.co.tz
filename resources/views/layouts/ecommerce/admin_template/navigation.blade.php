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
