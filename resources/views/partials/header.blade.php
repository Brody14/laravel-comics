<header class="main-header">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="figure">
            <img class="header-logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>

       
        <nav class="header-nav ms-5">
            <ul class="nav">
                @foreach($navbarItems as $item)
                <li class="nav__item">{{$item}} </li>
                    @if($item === 'shop') 
                        <i class="drop-down fa-solid fa-caret-down"></i>
                    @endif
                @endforeach    
                     
            </ul>
        </nav>

        <div class="search-bar">
            <input class="search p-0" type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
       
    </div>
</header>