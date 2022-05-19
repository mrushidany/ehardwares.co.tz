<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggle-icon">
            <span class="toggle-line"></span>
        </span>
    </button>
        <a class="navbar-brand me-1 me-sm-3" href="index.html">
            <div class="d-flex align-items-center">
                <img class="me-2" src="{{ asset('ecommerce/img/icon.jpeg') }}" alt="" width="40" />
            </div>
        </a>
        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none">
                        <div class="card-header">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h6 class="card-header-title mb-0">Notifications</h6>
                                </div>
                                <div class="col-auto ps-0 ps-sm-3">
                                    <a class="card-link fw-normal" href="#">Mark all as read</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl">
                        @if (Auth::user()->hasRole('super_administrator'))
                            <img class="rounded-circle" src="{{ asset('ecommerce/assets/img/team/5-thumb.png') }}" alt="" />
                        @else
                            <img class="rounded-circle" src="{{ asset('ecommerce/assets/img/team/avatar.png') }}" alt="" />
                        @endif
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                        <a class="dropdown-item" href="{{ route('admin_profile') }}">Profile &amp; account</a>
                        @if (Auth::user()->hasRole('super_administrator'))
                            <a class="dropdown-item" href="{{ route('settings') }}">Settings</a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('admin_logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">Logout</button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
</nav>
