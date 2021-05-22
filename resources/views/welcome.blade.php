<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Goggle Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>

    <!-- Font Css -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Animation Css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        /* .full-height {
            height: 100vh;
        } */

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
            color: #fff;
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
        <div class="top-right links">
            <a href="{{ route('welcome') }}">home</a>
            <a href="{{ route('article') }}">article</a>
            <a href="{{ route('contact') }}">Contact Us</a>
        </div>
    </div>
    <header>
        <div id="homeFullScreen">
            <div class="header-text">
                <h1>Selamat Datang</h1>
                <div class="vertical-line"></div>
                <p>
                    MATHIAS LEONARD ROBOT
                    <br />
                    1461800037
                </p>
            </div><!-- End HeaderText -->
        </div><!-- End homeFullScreen -->
    </header>




</body>

<script type="text/javascript" src="js/jquery-main.js"></script>

<!-- Bootstrap JS -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Animation JS -->
<script type="text/javascript" src="js/wow.min.js"></script>

<!-- Custom JS -->
<script type="text/javascript" src="js/custom.js"></script>

</html>