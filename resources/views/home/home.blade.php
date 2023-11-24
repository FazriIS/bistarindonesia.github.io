<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('HomeTemplate/dist/css/styles.css') }}" rel="stylesheet" />
    <style>
        .splide__arrow--prev,
        .splide__arrow--next {
            font-size: 30%;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="padding: 0px !important;">
        <div class="container">
            <a class="navbar-brand" style="width: 10%; height:100%;" href="#page-top"><img
                    src="{{ asset('HomeTemplate/dist/assets/img/logo.png') }}"
                    style="width: 100% !important; height: 70px;" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <div class="img-back">
        <header class="masthead" style="padding-top: 100px !important;">
            <div class="container">
                <div class="masthead-heading">
                    <video id="myVideo" class="" style="width: 64%;" controls>
                        <source src="{{ asset('HomeTemplate/dist/assets/img/video_tampilan.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="masthead-heading text-uppercase">Selamat datang di Bistar</div>
                <div class="masthead-subheading mx-auto" style="width: 80%;">Mau cari pakaian? Tentu kami
                    sedia dengan
                    berbagai motif dan
                    warna
                    kesukaanmu</div>
                <div class="masthead-subheading">Silahkan pilih <span class="masthead-subheading"
                        style="color: blue;">E-Commerce</span>
                    favoritmu</div>
                <div class="masthead-heading mx-auto" style="width: 50%;">
                    <div class="row">
                        <div class="col-6">
                            <a href="#portfolio" id="shopee" onclick="getDataShopee()">
                                <img class="rounded-5 img-fluid"
                                    src="{{ asset('HomeTemplate/dist/assets/img/shopee.png') }}" alt="Image 1">
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#portfolio" id="lazada" onclick="getDataLazada()">
                                <img class="rounded-5 img-fluid"
                                    src="{{ asset('HomeTemplate/dist/assets/img/lazada2.jpg') }}" alt="Image 2">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase" style="color: orange;">Shopee</h2>
            </div>
            <div id="portfolio-container" class="row">
                @foreach ($data as $ds)
                    <div class="col-4 col-xl-4 col-lg-6 col-md-6 col-sm mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="{{ $ds['link'] }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('mentahan/' . $ds['img']) }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-subheading text-muted">{{ $ds['nama'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="page-section" id="about">
        <div class="img-front">
            <header class="masthead" style="padding-top: 100px !important;">
                <div class="container">
                    <div class="masthead-heading">
                        <div class="splide">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide"><img class="img-fluid"
                                            src="{{ asset('mentahan/udin4.png') }}" alt="..." /></li>
                                    <li class="splide__slide"><img class="img-fluid"
                                            src="{{ asset('mentahan/udin2.png') }}" alt="..." /></li>
                                    <li class="splide__slide"><img class="img-fluid"
                                            src="{{ asset('mentahan/udin3.png') }}" alt="..." /></li>
                                    <li class="splide__slide"><img class="img-fluid"
                                            src="{{ asset('mentahan/udin1.png') }}" alt="..." /></li>
                                    <li class="splide__slide"><img class="img-fluid"
                                            src="{{ asset('mentahan/udin5.png') }}" alt="..." /></li>
                                    <li class="splide__slide"><img class="img-fluid"
                                            src="{{ asset('mentahan/udin6.png') }}" alt="..." /></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="masthead-heading text-uppercase">ABOUT US</div>
                    <div class="masthead-subheading text-start mx-auto p-2 rounded-3"
                        style="width: 60%; background-color: gray;">
                        Kami Berdiri sejak 16 Juni 2023, awal kami hadir yaitu di Tiktok Shop. Kami menjual Dress
                        Casual, Crop Top, T-shirt Anak dan Dewasa</div>
                    <div class="masthead-subheading text-start mx-auto p-2 rounded-3"
                        style="width: 60%; background-color: gray;">
                        Bahan produk kami 100%
                        Katun Combed
                        ketebalan 200gr atau setara dengan 24s. Adapun bahan lain yaitu Katun Enzyme Premium dengan
                        kualitas terbaik.</div>
                    <div class="masthead-subheading text-start mx-auto p-2 rounded-3"
                        style="width: 60%; background-color: gray;">
                        Kini kami tersedia di
                        Shopee dan juga
                        Lazada. Silahkan klik Link link di bawah ini untuk menjelajahi semua Produk kami.</div>
                    <div class="masthead-heading mx-auto" style="width: 50%;">
                        <div class="row">
                            <div class="col-6">
                                <a href="#portfolio" id="shopee" onclick="getDataShopee()">
                                    <img class="rounded-5 img-fluid"
                                        src="{{ asset('HomeTemplate/dist/assets/img/shopee.png') }}" alt="Image 1">
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#portfolio" id="lazada" onclick="getDataLazada()">
                                    <img class="rounded-5 img-fluid"
                                        src="{{ asset('HomeTemplate/dist/assets/img/lazada2.jpg') }}" alt="Image 2">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </section>

    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; NJay 2023</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2"
                        href="https://instagram.com/bistar.indonesia?igshid=NGVhN2U2NjQ0Yg==" aria-label="Twitter"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@bistarindonesia?lang=id-ID"
                        aria-label="Facebook"><i class="fab fa-tiktok"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://wa.me/message/XFCRO56GRYJIB1"
                        aria-label="LinkedIn"><i class="fab fa-whatsapp"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('HomeTemplate/dist/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script>
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
        });

        splide.mount();
    </script>

    <script>
        function getDataShopee() {
            $.ajax({
                url: "/api/get-shopee",
                method: "GET",
                success: function(res) {
                    // Place the container outside the loop
                    console.log(res)
                    var container =
                        '<div class="container"><div class="text-center"><h2 class="section-heading text-uppercase" style="color: orange;">Shopee</h2></div><div id="portfolio-container" class="row"></div></div>';

                    // Check if #portfolio has content
                    if ($("#portfolio").html().trim() === '') {
                        // If it's empty, append the container
                        $("#portfolio").append(container);
                    } else {
                        // If it's not empty, replace the content with the container
                        $("#portfolio").html(container);
                    }

                    // Loop through the data and append HTML dynamically
                    res.forEach(function(item) {
                        // console.log(item)
                        var html = `
                    <div class="col-4 col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="${item.link}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('mentahan/${item.img}') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-subheading text-muted">${item.nama}</div>
                            </div>
                        </div>
                    </div>
                `;
                        // Append each item to the portfolio-container
                        $("#portfolio-container").append(html);
                    });
                },
                error: function() {
                    console.error("Error fetching data");
                },
            });
        }

        function getDataLazada() {
            $.ajax({
                url: "/api/get-lazada",
                method: "GET",
                success: function(res) {
                    // Place the container outside the loop
                    var container =
                        '<div class="container"><div class="text-center"><h2 class="section-heading text-uppercase" style="color: blue;">Lazada</h2></div><div id="portfolio-container" class="row"></div></div>';

                    // Check if #portfolio has content
                    if ($("#portfolio").html().trim() === '') {
                        // If it's empty, append the container
                        $("#portfolio").append(container);
                    } else {
                        // If it's not empty, replace the content with the container
                        $("#portfolio").html(container);
                    }

                    // Loop through the data and append HTML dynamically
                    res.forEach(function(item) {
                        var html = `
                    <div class="col-4 col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="${item.link}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ asset('mentahan/${item.img}') }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-subheading text-muted">${item.nama}</div>
                            </div>
                        </div>
                    </div>
                `;
                        // Append each item to the portfolio-container
                        $("#portfolio-container").append(html);
                    });
                },
                error: function() {
                    console.error("Error fetching data");
                },
            });
        }
    </script>
</body>

</html>
