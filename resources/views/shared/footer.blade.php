@php
$dcComics = [
    ['name' => 'Characters'],
    ['name' => 'Comics'],
    ['name' => 'Movies'],
    ['name' => 'TV'],
    ['name' => 'Games'],
    ['name' => 'Videos'],
    ['name' => 'News']
];

$stores = [
    ['name' => 'Shop DC'],
    ['name' => 'Shop DC Collectibles']
];

$DcInfo = [
    ['name' => 'Terms of Use'],
    ['name' => 'Privacy policy (New)'],
    ['name' => 'Ad Choices'],
    ['name' => 'Advertising'],
    ['name' => 'Jobs'],
    ['name' => 'Subscriptions'],
    ['name' => 'Talent Workshops'],
    ['name' => 'CPSC Certificates'],
    ['name' => 'Ratings'],
    ['name' => 'Shop Help'],
    ['name' => 'Contact Us']
];

$sites = [
    ['name' => 'DC'],
    ['name' => 'MAD Magazine'],
    ['name' => 'DC Kids'],
    ['name' => 'DC Universe'],
    ['name' => 'DC Power Visa']
];

$socialIcon = [
    ['img' => Vite::asset('resources/img/footer-facebook.png'), 'name' => 'facebook'],
    ['img' => Vite::asset('resources/img/footer-twitter.png'), 'name' => 'twitter'],
    ['img' => Vite::asset('resources/img/footer-youtube.png'), 'name' => 'youtube'],
    ['img' => Vite::asset('resources/img/footer-pinterest.png'), 'name' => 'pinterest'],
    ['img' => Vite::asset('resources/img/footer-periscope.png'), 'name' => 'periscope']
];
@endphp
  <!--background di sfondo-->
  <footer>

    <!--sezione link utili e informazioni-->

    <div class="container flex">

        <!--contenitore link-->
        <div class="box flex">
            <div class="col">
                <h3>DC COMICS</h3>
                <ul>
                    @foreach ($dcComics as $info)
                    <li>
                        <a href="">
                            {{ $info['name'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <h3>SHOP</h3>
                <ul>
                    @foreach ($stores as $shop)
                    <li>
                        <a href="">
                            {{ $shop['name'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <h3>DC</h3>
                <ul>
                    @foreach($DcInfo as $info)
                    <li>
                        <a href="">
                            {{ $info['name'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <h3>SITES</h3>
                <ul>
                    @foreach($sites as $site)
                    <li>
                        <a href="">
                            {{ $site['name'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
        <!--/contenitore link-->

        <!--logo DC background-->
        <div class="bg-image">
        </div>
        <!--/logo DC background-->

    </div>

    <!--/sezione link utili e informazioni-->

    <!--sezione social-->

    <!--background-->
    <div class="social">
        <!--/background-->

        <div class="container-social flex">

            <!--button-->
            <button class="sign-btn">
                <a href="">SIGN-NOW!</a>
            </button>
            <!--/button-->

            <!--follow us section-->
            <div class=" align flex">
                <h3 class="follow-us">
                    FOLLOW US
                </h3>
                @foreach($socialIcon as $icon)
                    <button class="icon">
                        <img src="{{$icon['img']}}" alt="{{$icon['name']}}">
                    </button>
                @endforeach
            </div>
            <!--/follow us section-->
        </div>
    </div>
    <!--/sezione social-->

</footer>
<!--/background di sfondo-->