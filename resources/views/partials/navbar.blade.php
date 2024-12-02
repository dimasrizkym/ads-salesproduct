<header class="position-fixed w-100 top-0">
    <nav class="navbar navbar-light bg-body-tertiary">
        <div class="position-absolute" style="left: 44px;">
            @if (Route::is('pages'))
            <a href="performances">Go to Performances</a>
            @elseif (Route::is('performances'))
            <a href="pages">Go to Banners</a>
            @endif
        </div>
        <a href="/" style="margin: 4px auto;">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo-salesproduct"
                class="logo-salesproduct" style="width: 100%;">
        </a>
    </nav>
</header>