<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>trinitee is coming soon.</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('img/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
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
