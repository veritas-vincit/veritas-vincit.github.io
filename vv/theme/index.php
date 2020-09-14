<?php include ("../files/header.php"); ?>

<!DOCTYPE html>
<html lang="de">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $website->texts["company"];?></title>

    <meta name="keywords" content="<?php echo $website->texts["keywords"];?>" />
    <meta name="description" content="<?php echo $website->texts["description"];?>">

        <!-- Favicon -->
    <link rel="shortcut icon" href="../imgs/fav.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../imgs/fav.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/custom.css?v=<?php echo date("h.i.s");?>">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="top"></div>
    <nav id="nav-header" class="navbar navbar-expand-lg navbar-light nav-white">
        <div class="container" id="header">
            <a class="navbar-brand" href="../"><img src="https://via.placeholder.com/200x60/AAAAAA" alt="LOGO"></a>

            <div class="hamburger header-btn-collapse-nav" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" role="menu">
                <span></span><span></span><span></span>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../"><?php echo $website->texts["m_item_1"];?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $website->texts["m_item_2"];?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item active" href="./"><?php echo $website->texts["m_item_2_1"];?></a>
                            <a class="dropdown-item" href="./"><?php echo $website->texts["m_item_2_2"];?></a>
                            <a class="dropdown-item" href="./"><?php echo $website->texts["m_item_2_3"];?></a>
                            <a class="dropdown-item" href="./"><?php echo $website->texts["m_item_2_4"];?></a>
                            <a class="dropdown-item" href="./"><?php echo $website->texts["m_item_2_5"];?></a>
                            <a class="dropdown-item" href="./"><?php echo $website->texts["m_item_2_6"];?></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../"><?php echo $website->texts["m_item_3"];?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle flex-row-center" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><?php echo $website->texts["language"];?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <a class="dropdown-item" href="./" onclick="changeLanguage('fr')">FR</a>
                            <a class="dropdown-item" href="./" onclick="changeLanguage('en')">EN</a>
                            <a class="dropdown-item" href="./" onclick="changeLanguage('de')">DE</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="product-header"></section>

    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div id="sidebar" class="col-md-4 mb-4 pr-0">
                <div class="sidebar__inner">
                    <h3 class="p-3"><a href="./"><?php echo $website->texts["m_item_2_1"];?></a></h3>
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link" href="#a-1">What we want do?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#a-2">Covid 19 or CCP virus?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#a-3">Who is Dr. Li-Meng Yan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#a-4">Waht she said?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#a-5">More evidence?</a>
                        </li>
                    </ul>

                </div>
            </div>

            <div id="load-content" class="col-md-8 shadow-sm-">
                <section id="contentlink">
                    <div class="products-group">
                        <div class="row">
                            <div class="col-12 mb-3 p-1" id="a-1">
                                <div class="card shadow-sm" data-scroll="0 fromBottomIn fromTopOut once">
                                    <img class="img-fluid" src="https://via.placeholder.com/800x300/AAAAAA" alt="image">
                                    <div class="card-body">
                                        <h5 data-scroll="0 fromBottomIn fromTopOut once"><?php echo $website->texts["pgl_1"];?></h5>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3 p-1" id="a-2">
                                <div class="card shadow-sm" data-scroll="0 fromBottomIn fromTopOut once">
                                    <img class="img-fluid" src="https://via.placeholder.com/800x300/AAAAAA" alt="image">
                                    <div class="card-body">
                                        <h5 data-scroll="0 fromBottomIn fromTopOut once"><?php echo $website->texts["pgl_1"];?></h5>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3 p-1" id="a-3">
                                <div class="card shadow-sm" data-scroll="0 fromBottomIn fromTopOut once">
                                    <img class="img-fluid" src="https://via.placeholder.com/800x300/AAAAAA" alt="image">
                                    <div class="card-body">
                                        <h5 data-scroll="0 fromBottomIn fromTopOut once"><?php echo $website->texts["pgl_1"];?></h5>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3 p-1" id="a-4">
                                <div class="card shadow-sm" data-scroll="0 fromBottomIn fromTopOut once">
                                    <img class="img-fluid" src="https://via.placeholder.com/800x300/AAAAAA" alt="image">
                                    <div class="card-body">
                                        <h5 data-scroll="0 fromBottomIn fromTopOut once"><?php echo $website->texts["pgl_1"];?></h5>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3 p-1" id="a-5">
                                <div class="card shadow-sm" data-scroll="0 fromBottomIn fromTopOut once">
                                    <img class="img-fluid" src="https://via.placeholder.com/800x300/AAAAAA" alt="image">
                                    <div class="card-body">
                                        <h5 data-scroll="0 fromBottomIn fromTopOut once"><?php echo $website->texts["pgl_1"];?></h5>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    
    <!-- START Cookie-Alert -->
    <div class="alert cookiealert" role="alert">
        <div class="cookie-content container">
            <?php echo $website->texts["cookie_01"];?>
            <div class="text-right">
                <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
                    <?php echo $website->texts["cookie_02"];?>
                </button>
            </div>
        </div>
    </div>
    <!-- END Cookie-Alert -->


    <div id="loadfooter" class="mt-4"></div>

    <div class="container">
        <a href="#top" id="top-arrow" class="animated"><i class="material-icons">keyboard_arrow_up</i></a>
    </div>

    <!-- Vendor -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/owlcarousel/owl.carousel.js"></script>
    <script src="../vendor/scrolltrigger/ScrollTrigger.min.js"></script>
    <script src="../js/sub.js"></script>
    <script defer src="s-sidebar.js"></script>
    <!-- <script type="text/javascript" src="../vendor/sticky-sidebar.js"></script> -->
    
    <script>
        $("#loadfooter").load("../files/footer-<?php echo $website->texts["language"]?>.php");
    </script>


</body>

</html>