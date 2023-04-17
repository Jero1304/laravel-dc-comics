<header class="main-header">
    <div class="container">
        <div class="header-bar">
            <img src="/img/dc-logo.png" alt="">
            <nav>
                <ul class="menu">
                    <li class="menu-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="menu-item">charter</li>
                    <li class="menu-item"><a href="{{ route('comics.index') }}">Comics</a></li>
                    <li class="menu-item"><a href="{{ route('comics.create') }}">Create</a></li>
                    <li class="menu-item">movies</li>
                    <li class="menu-item">TV</li>
                    <li class="menu-item">collectibles</li>
                    <li class="menu-item">videos</li>
                    <li class="menu-item">fans</li>
                    <li class="menu-item">news</li>
                    <li class="menu-item nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            shop
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">SHOP 1</a></li>
                            <li><a class="dropdown-item" href="#">SHOP 1</a></li>
                            <li><a class="dropdown-item" href="#">SHOP 1</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <form class="header-search" role="search">
                <input class="search form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn p-0" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>

        </div>
    </div>

    <div class="jumbotron">
    </div>

</header>
