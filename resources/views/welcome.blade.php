<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UMY PENMARU</title>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .mySlides {
        display: none;
    }
    </style>
    <!-- Styles -->
    <!-- <style>
    html,
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    </style> -->
</head>

<body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            @if (Route::has('login'))

            <a href="{{ url('/home') }}" class="w3-bar-item w3-button"><b>UMY</b> Penmaru</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                @auth
                @else
                <a href="{{ route('login') }}" class="w3-bar-item w3-button">Login</a>
                @if (Route::has('register'))
                <a href="{{ url('/home') }}" class="w3-bar-item w3-button">Registrasi</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>

    <!-- Header with Slideshow -->
    <header class="w3-display-container w3-center">
        <div class="mySlides w3-animate-opacity">
            <img class="w3-image" src="{{URL::to('/')}}/img/landingpage.jpg" alt="Image 1" style="min-width:500px"
                width="1500" height="1000">
            <div class="w3-display-middle w3-padding w3-hide-small w3-margin-top w3-center" style="width:35%">
                <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
                    <h1 class="w3-xxlarge w3-text-white"><span
                            class="w3-padding w3-black w3-opacity-min"><b>UMY</b></span>
                        <span class="w3-hide-small w3-text-light-grey">Penmaru</span></h1>
                    <span class="w3-small w3-text-light-grey">Menjadi Universitas yang unggul dalam pengembangan ilmu
                        pengetahuan dan teknologi dengan berlandaskan nilai-nilai Islam <br>untuk kemaslahatan
                        umat.</span>
                    <hr class="w3-opacity">
                    <p><button class="w3-button w3-block w3-green w3-round"
                            onclick="window.location.href='{{ url('/register') }}'">Registrasi</button></p>
                </div>
            </div>
        </div>
        <div class="mySlides w3-animate-opacity">
            <img class="w3-image" src="{{URL::to('/')}}/img/landingpage.jpg" alt="Image 2" style="min-width:500px"
                width="1500" height="1000">
            <div class="w3-display-middle w3-padding w3-hide-small w3-margin-top w3-center" style="width:35%">
                <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
                    <h1 class="w3-xxlarge w3-text-white"><span
                            class="w3-padding w3-black w3-opacity-min"><b>UMY</b></span>
                        <span class="w3-hide-small w3-text-light-grey">Penmaru</span></h1>
                    <span class="w3-small w3-text-light-grey">Menjadi Universitas yang unggul dalam pengembangan ilmu
                        pengetahuan dan teknologi dengan berlandaskan nilai-nilai Islam <br>untuk kemaslahatan
                        umat.</span>
                    <hr class="w3-opacity">
                    <p><button class="w3-button w3-block w3-red w3-round"
                            onclick="window.location.href='{{ url('/register') }}'">Registrasi</button></p>
                </div>
            </div>
        </div>
        <div class="mySlides w3-animate-opacity">
            <img class="w3-image" src="{{URL::to('/')}}/img/landingpage.jpg" alt="Image 3" style="min-width:500px"
                width="1500" height="1000">
            <div class="w3-display-middle w3-padding w3-hide-small w3-margin-top w3-center" style="width:35%">
                <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
                    <h1 class="w3-xxlarge w3-text-white"><span
                            class="w3-padding w3-black w3-opacity-min"><b>UMY</b></span>
                        <span class="w3-hide-small w3-text-light-grey">Penmaru</span></h1>
                    <span class="w3-small w3-text-light-grey">Menjadi Universitas yang unggul dalam pengembangan ilmu
                        pengetahuan dan teknologi dengan berlandaskan nilai-nilai Islam <br>untuk kemaslahatan
                        umat.</span>
                    <hr class="w3-opacity">
                    <p><button class="w3-button w3-block w3-yellow w3-round"
                            onclick="window.location.href='{{ url('/register') }}'">Registrasi</button></p>
                </div>
            </div>
        </div>
        <a class="w3-button w3-black w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-light-grey"
            onclick="plusDivs(1)">Next <i class="fa fa-angle-right"></i></a>
        <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs(1)">Next <i
                class="fa fa-angle-right"></i></a>
    </header>


    <!-- Why UMY Section -->
    <!-- <div class="w3-padding-64 w3-white">
        <div class="w3-row-padding">
            <div class="w3-col l8 m6">
                <h1 class="w3-jumbo"><b>MENGAPA</b></h1>
                <h1 class="w3-xxxlarge w3-text-green"><b>MEMILIH UMY ?</b></h1>
                <p><span class="w3-xlarge">UMY</span> sebagai universitas yang Unggul dan Islami
                    merupakan pilihan bijaksana untuk memulai pembangunan karakter
                    diri di perguruan tinggi, karena sistem perkuliahan maupun kehidupan di kampus telah dirancang
                    seimbang guna
                    menghasilkan lulusan yang unggul dalam teknologi namun tetap berlandaskan nilai-nilai keislaman.</p>
            </div>
            <div class="w3-col l4 m6">
                <img src="{{URL::to('/')}}/img/lecturer.jpg" class="w3-image w3-right w3-hide-small w3-round-large"
                    width="335" height="471">
            </div>
        </div>
    </div> -->

    <!-- Why UMY Section -->
    <div class="w3-row w3-container">
        <div class="w3-center w3-padding-64">
            <h1 class="w3-xxlarge"><b>MENGAPA </b><b class="w3-xlarge w3-text-grey">MEMILIH UMY ?</b></h1>
        </div>
        <div class="w3-center">
            <p><span class="w3-xlarge">UMY</span> sebagai universitas yang Unggul dan Islami
                merupakan pilihan bijaksana untuk memulai pembangunan karakter
                diri di perguruan tinggi, karena sistem perkuliahan maupun kehidupan di kampus telah dirancang
                seimbang guna
                menghasilkan lulusan yang unggul dalam teknologi namun tetap berlandaskan nilai-nilai keislaman.</p>
        </div>
    </div>

    <!-- Pendaftaran -->
    <div class="w3-row w3-container">
        <div class="w3-center w3-padding-64">
            <h1 class="w3-xxlarge"><b>PENDAFTARAN</b></h1>
        </div>
        <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
            <h3>Pertama</h3>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>

        <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
            <h3>Kedua</h3>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>

        <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
            <h3>Ketiga</h3>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>

        <div class="w3-col l3 m6 w3-black w3-container w3-padding-16">
            <h3>Keempat</h3>
            <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
    </div>

    <!-- Price Section -->
    <div class="w3-row-padding" id="plans">
        <div class="w3-center w3-padding-64">
            <h1 class="w3-xxlarge"><b>PAKET REGISTRASI</b></h1>
        </div>

        <div class="w3-third w3-margin-bottom">
            <ul class="w3-ul w3-border w3-center w3-hover-shadow">
                <li class="w3-black w3-xlarge w3-padding-32">Paket 1</li>
                <li class="w3-padding-16"><b>1X</b> Ujian CBT</li>
                <li class="w3-padding-16"><b>3</b> Pilihan Jurusan</li>
                <li class="w3-padding-16">
                    <h2 class="w3-wide">Rp. 200.000</h2>
                    <span class="w3-opacity">berlaku sampai penutupan pendaftaran</span>
                </li>
                <li class="w3-light-grey w3-padding-24">
                </li>
            </ul>
        </div>

        <div class="w3-third w3-margin-bottom">
            <ul class="w3-ul w3-border w3-center w3-hover-shadow">
                <li class="w3-dark-grey w3-xlarge w3-padding-32">Paket 2</li>
                <li class="w3-padding-16"><b>2X</b> Ujian CBT</li>
                <li class="w3-padding-16"><b>3</b> Pilihan Jurusan</li>
                <li class="w3-padding-16">
                    <h2 class="w3-wide">Rp. 350.000</h2>
                    <span class="w3-opacity">berlaku sampai penutupan pendaftaran</span>
                </li>
                <li class="w3-light-grey w3-padding-24">
                </li>
            </ul>
        </div>

        <div class="w3-third w3-margin-bottom">
            <ul class="w3-ul w3-border w3-center w3-hover-shadow">
                <li class="w3-black w3-xlarge w3-padding-32">Paket 3</li>
                <li class="w3-padding-16"><b>5X</b> Ujian CBT</li>
                <li class="w3-padding-16"><b>3</b> Pilihan Jurusan</li>
                <li class="w3-padding-16">
                    <h2 class="w3-wide">Rp. 500.000</h2>
                    <span class="w3-opacity">berlaku sampai penutupan pendaftaran</span>
                </li>
                <li class="w3-light-grey w3-padding-24">
                </li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <!-- <footer class="w3-center w3-green w3-padding-16">
        <p>© 2020 Universitas Muhammadiyah Yogyakarta • Dikembangkan oleh Team • </p>
    </footer> -->

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        <p>© 2020 Universitas Muhammadiyah Yogyakarta • Dikembangkan oleh Group_ONE • </p>
    </footer>


    <script>
    // Slideshow
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
    </script>

</body>

</html>


<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UMY PENMARU</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Pendaftaran MABA UMY
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> -->