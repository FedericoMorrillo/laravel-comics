@php
$DcInformations = [
                ['img'=> Vite::asset("resources/img/buy-comics-digital-comics.png"), 
                'desc' => "DIGITAL COMICS"],
                    
                ['img' => Vite::asset("resources/img/buy-comics-merchandise.png"),
                'desc' => "DC MERCHANDISE"],

                [
                    'img' => Vite::asset("resources/img/buy-comics-subscriptions.png"),
                    'desc' => "SUBSCRIPTION"
                ],

                [
                    'img' => Vite::asset("resources/img/buy-comics-shop-locator.png"),
                    'desc' => "COMIC SHOP LOCATOR"
                ],
                [
                    'img' => Vite::asset("resources/img/buy-dc-power-visa.svg"),
                    'desc' => "DC POWER VISA"
                ],
];
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    @include('shared.header')
    <main>
        <!--primo contenitore-->
        <div class="container flex">

            <!--current series-->
            <h3 class="tag-series">
                CURRENT SERIES
            </h3>
            <!--/current series-->
        </div>

        <div class="center flex">
            <!--load more button-->
            <button class="add-btn">
                <h4>LOAD MORE</h4>
            </button>
            <!--/load more button-->
        </div>
        <!--/primo contenitore-->

        <section>
            <div class="series">
                @foreach ($data as $comic)
                    <div class="serie">
                        <div class="image">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        </div>
                        <div class="title"> {{$comic['title']}}</div>
                    </div>
                @endforeach
            </div>
        </section>

        <!--secondo contenitore-->
        <div class="info-bar flex">

            @foreach ($DcInformations as $DcInformation)
                <button class="flex btn">

                    <!--icona-->
                    <div class="icon">
                        <img src="{{$DcInformation['img']}}" alt="{{$DcInformation['desc']}}">
                    </div>
                    <!--/icona-->

                    <!--descrizione-->
                    <div class="icon-desc">
                        {{ $DcInformation['desc'] }}
                    </div>
                    <!--/descrizione-->

                </button>
            @endforeach
        </div>
        <!--/secondo contenitore-->

    </main>
    </main>
    @include('shared.footer')
</body>

</html>