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
                <h1>Article</h1>
                <div class="vertical-line"></div>
                <p>
                    Dua Bahasa Pemrograman Terpopuler
                    <br />
                    untuk Dipelajari di Tahun 2021
                </p>
            </div><!-- End HeaderText -->
        </div><!-- End homeFullScreen -->
    </header>



    <div class="content">
        <section class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="feature-box">
                            <h1>PHP</h1>
                            <p>PHP atau Hypertext Preprocessor adalah sebuah bahasa pemrograman server side scripting
                                yang bersifat open source. Secara umum, fungsi PHP adalah digunakan untuk pengembangan
                                website. Di seluruh dunia sangat banyak website yang dibangun menggunakan PHP. Karena
                                fleksibilitasnya yang tinggi, PHP juga bisa digunakan untuk membuat aplikasi komputer.
                                PHP merupakan bahasa pemrograman yang bersifat open source. Pengguna bebas memodifikasi
                                dan mengembangkan sesuai dengan kebutuhan.,</p>
                            <p></p>
                        </div>
                    </div><!-- End col-md-6 -->
                    <div class="col-md-6 col-sm-6 nopadding">
                        <img src="images/1.png">
                    </div><!-- End col-md-6 -->

                    <div class="clearfix"></div><!-- End clearfix -->

                    <div class="col-md-6 col-sm-6 nopadding">
                        <img src="images/1.png">
                    </div><!-- End col-md-6 -->
                    <div class="col-md-6 col-sm-6">
                        <div class="feature-box">
                            <h1>Python</h1>
                            <p>Python adalah bahasa pemrograman interpretatif multiguna. Tidak seperti bahasa lain yang
                                susah untuk dibaca dan dipahami, python lebih menekankan pada keterbacaan kode agar
                                lebih mudah untuk memahami sintaks. Hal ini membuat Python sangat mudah dipelajari baik
                                untuk pemula maupun untuk yang sudah menguasai bahasa pemrograman lain. Bahasa ini biasa
                                digunakan untuk komputasi ilmiah dan matematika, bahkan proyek Artificial Intelligence
                                juga menggunakan bahasa Python.</p>
                        </div>
                    </div><!-- End col-md-6 -->
                </div>
            </div>
        </section>

        <!-- portfolio -->

        <!-- Call to Action -->
        <section class="call-top-action text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>many variations of passages</h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration
                            <br />
                            in some form, by injected humour, or randomised words which don't look even slightly
                            believable</p>
                        <span>LOREM IPSUM</span>
                    </div><!-- End col-md-12 -->
                </div><!-- End row -->
            </div><!-- End container -->
        </section>

        <!-- Footer -->
        <footer>
            <ul class="in-line">
                <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                <li><a href="#"><span><i class="fa fa-youtube"></i></span></a></li>
            </ul>
            <span class="copyright">&#169; Untitled . All rights reserved. Design By <a
                    href="http://templatestock.co">Templatestock.co</a></span>
        </footer>
    </div>
</body>

<script type="text/javascript" src="js/jquery-main.js"></script>

<!-- Bootstrap JS -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Animation JS -->
<script type="text/javascript" src="js/wow.min.js"></script>

<!-- Custom JS -->
<script type="text/javascript" src="js/custom.js"></script>

</html>