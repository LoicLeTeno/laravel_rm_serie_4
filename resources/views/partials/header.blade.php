<header class="bg-dark py-3">
    <div class="d-flex justify-content-around align-items-center">
        <div class="d-flex align-items-center">
            <ul class="my-0">
                <li class="nav-item d-flex align-items-center">
                    <a class="navbar-brand text-decoration-none text-primary" href="{{ route('welcome') }}">MENU
                        (welcome)</a>
                </li>
            </ul>
        </div>
        <nav class="d-flex align-items-center">
            <ul class="d-flex align-items-center my-0">
                <li class="nav-item d-flex align-items-center {{ request()->is('fruits') ? 'active' : '' }}">
                    <a class="text-decoration-none text-white fs-5 mx-3" href="{{ route('fruits') }}">fruits</a>
                </li>

                <li class="nav-item d-flex align-items-center {{ request()->is('legumes') ? 'active' : '' }}">
                    <a class="text-decoration-none text-white fs-5 mx-3" href="{{ route('legumes') }}">legumes</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
