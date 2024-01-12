@php
    $nav_links= [      
        "CHARACTER",
        "COMICS",
        "MOVIES",
        "TV",
        "GAMES",
        "COLLECTIBLES",
        "VIDEO",
        "FAN",
        "NEWS",
        "SHOP",
    ]
@endphp

<header class="container d-flex">
    <div>
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
    </div>
    <ul class="d-flex ">
        @foreach ($nav_links as $link)
            <li class="d-flex"> 
                <a href="">{{ $link }}</a>
            </li>
        @endforeach
    </ul>
</header>