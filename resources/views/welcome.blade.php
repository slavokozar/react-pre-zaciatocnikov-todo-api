<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>trinitee is coming soon.</title>

    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/251a70c0d2.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="cs-page">
    <nav class="navbar">
        <div class="navbar__inner">
            <div class="navbar__logo">
                <a href="/"><img src="{{asset('img/trinitee-logo_dark.svg')}}" alt="trinitee"></a>
            </div>

            <a href="https://www.linkedin.com/company/trinitee" target="_blank" class="navbar__icon" title="linkedIn">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
        </div>

    </nav>
    <main class="main wrapper">

        <div class="main__left">
            <h1>We’re coming soon</h1>
            <a href="mailto:hello@trinitee.com" class="btn btn--white">Contact Us<i
                        class="fa-solid fa-envelope"></i></a>
        </div>

        <div class="main__right">
            <img class="img1" src="{{asset('img/trinitee-logo_cs.svg')}}" alt="trinitee progress">

            <div class="progress">

                <div class="progress__number">
                    78%
                </div>

                <div class="progress__text">
                    complete
                </div>
            </div>
        </div>

    </main>


    <footer class="footer">

        <div class="footer__column">
            <h3>trinitee, s.r.o.</h3>
            <p>
                Komenského 11A, 3rd floor<br>
                Košice 04001<br>
                Slovakia
            </p>
        </div>
        <div class="footer__column">
            <h3>Contact us</h3>
            <p>
                <a href="mailto:hello@trinitee.com">hello@trinitee.com</a><br>
                <a href="tel:+421948877664">+421 948 877 664</a>
            </p>


        </div>
        <div class="footer__column">

            <h3>Our offices</h3>
            <p>Kosice, SK<br>
                Prague, CZ<br>
                Feldkirch, AT
            </p>
        </div>

    </footer>
</div>

</body>
</html>
