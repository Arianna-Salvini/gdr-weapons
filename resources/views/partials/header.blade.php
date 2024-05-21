<header class="p-3 bg-dark mb-5">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark px-3">
            <div class="text-danger navbar-brand">
                <h3>GDR Weapons</h3>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{ route('weapons.index') }}">Weapons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{ route('characters.index') }}">Characters</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
