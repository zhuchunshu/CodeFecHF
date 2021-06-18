<header class="navbar navbar-expand-md navbar-dark d-none d-lg-block">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            @foreach(\App\CodeFec\Header\functions::left() as $key => $value)
                @include($value['view'])
            @endforeach
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            @foreach(\App\CodeFec\Header\functions::right() as $key => $value)
                @include($value['view'])
            @endforeach
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <span class="avatar avatar-sm" :style="{ 'background-image':'url('+avatar+')' }"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div>@{{ Username }}</div>
                        <div class="mt-1 small text-muted">@{{ Email }}</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="#" class="dropdown-item">Set status</a>
                    <a href="#" class="dropdown-item">Profile & account</a>
                    <a href="#" class="dropdown-item">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Settings</a>
                    <a href="#" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>