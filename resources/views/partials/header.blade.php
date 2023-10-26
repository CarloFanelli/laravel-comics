<header>

    <div class="header_top container-fluid">
        <div class="row justify-content-end">
            <div class="col-2">
                <p>dc powered visa</p>
            </div>
            <div class="col-2 me-5">
                <p>additional dc sites</p>
            </div>
        </div>
    </div>
    <nav class="head p-0 navbar navbar-expand-lg bg-body-white my_nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach($menu_items as $menu_item)
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{$menu_item}}</a>
                    </li>
                    @endforeach

                </ul>
            </div>
            <div class="searchbar">
                <input type="text" placeholder="Search 🔍">
            </div>
        </div>
    </nav>

</header>