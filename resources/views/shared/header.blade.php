@php
                $sections = [
                    ['name' => 'CHARACTERS'],
                    ['name' => 'COMICS'],
                    ['name' => 'MOVIES'],
                    ['name' => 'TV'],
                    ['name' => 'GAMES'],
                    ['name' => 'COLLECTIBLES'],
                    ['name' => 'VIDEOS'],
                    ['name' => 'FANS'],
                    ['name' => 'NEWS'],
                    ['name' => 'SHOP']
                ];
            @endphp

<header>

    <!--contenitore header-->
    <div class="container flex">

        <!--logo-->
        <div class="logo flex">
            <img src="{{Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
        </div>
        <!--/logo-->

        <!--barra di navigazione-->
         <ul class="flex">
            @foreach ($sections as $section)
               <li class="flex">
                    <a href="">{{ $section['name'] }}</a>
                </li>  
            @endforeach
           
        </ul> 
        <!--/barra di navigazione-->

    </div>
    <!--/contenitore header-->

    <!--jumbo-->
    <div class="jumbo">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbo">
    </div>
    <!--/jumbo-->
</header>