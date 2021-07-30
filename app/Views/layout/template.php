<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/bistro-icons.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/zerogrid.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/loader.css">
    <link rel="shortcut icon" href="/assets/images/favicon.png">
    <title> <?= $title; ?> </title>
</head>

<body>


    <?= $this->include('layout/navbar'); ?>
    <br>
    <?= $this->renderSection('content'); ?>



    <!--Footer-->
    <footer class="padding-top bg_black">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright clearfix">
                    <p>Copyright &copy; 2021 Seafood. All Right Reserved</p>
                    <ul class="social_icon">
                        <li><a href="#." class="facebook"><i class="icon-facebook5"></i></a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter4"></i></a></li>
                        <li><a href="#." class="google"><i class="icon-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <a href="#." id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>
    <script src="/assets/js/jquery-2.2.3.js" type="text/javascript"></script>
    <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="/assets/js/jquery.appear.js"></script>
    <script src="/assets/js/jquery-countTo.js"></script>
    <script src="/assets/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.fancybox.js"></script>
    <script src="/assets/js/jquery.mixitup.min.js"></script>
    <script src="/assets/js/functions.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/assets/stylez.css">
</body>

</html>