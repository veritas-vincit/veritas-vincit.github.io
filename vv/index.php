<?php include ("files/header-home.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $website->texts["company"];?></title>

    <meta name="keywords" content="<?php echo $website->texts["keywords"];?>" />
    <meta name="description" content="<?php echo $website->texts["description"];?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="imgs/fav.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="imgs/fav.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <link rel="stylesheet" href="css/custom.css?v=<?php echo date("h.i.s")?>">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="top"></div>
    <nav id="nav-header" class="navbar navbar-expand-lg navbar-light nav-white">
        <div class="container" id="header">
            <a class="navbar-brand" href="./"><img src="imgs/logo.png" alt="LOGO"></a>

            <div class="hamburger header-btn-collapse-nav" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" role="menu">
                <span></span><span></span><span></span>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="./"><?php echo $website->texts["m_item_1"];?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $website->texts["m_item_2"];?></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="theme"><?php echo $website->texts["m_item_2_1"];?></a>
                            <a class="dropdown-item" href="./"><?php echo $website->texts["m_item_2_2"];?></a>
                            <a class="dropdown-item" href="./"><?php echo $website->texts["m_item_2_3"];?></a>
                            <a class="dropdown-item" href="./"><?php echo $website->texts["m_item_2_4"];?></a>
                            <a class="dropdown-item" href="./"><?php echo $website->texts["m_item_2_5"];?></a>
                            <a class="dropdown-item" href="./"><?php echo $website->texts["m_item_2_6"];?></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./"><?php echo $website->texts["m_item_3"];?></a>
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

    <section class="carousel-container" id="carousel-home">
        <div class="container-fluid">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="imgs/slide-1.jpg" alt="Dr. Li-Meng Yan"/>
                        <div class="item-caption-1">
                            <h3 class="animated fadeInUp hmr-1 hide-small">Dr. Li-Meng Yan tell the TRUTH of the Corona Virus!</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="imgs/slide-2.jpg" alt="Hong Kong Protest"/>
                        <div class="item-caption-2">
                            <h3 class="animated fadeInUp hmr-1 hide-small">Lorem ipsum dolor sit amet, consetetur sa</h3>
                        </div>
                    </div>
                    <div class="item">
                    <img src="imgs/slide-3.jpg" alt="Anti Chinises Communist Party"/>
                        <div class="item-caption">
                            <h3 class="animated fadeInUp">Lorem ipsum dolor sit amet, consetetur sa</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Who are we? -->
    <section class="section-1">
        <div class="container mt-5">
            <div class="row justify-content-center"  data-scroll="300 fromBottomIn fromTopOut once">
                <div class="col-md-8 text-center">
                    <h2>Who are we?</h2>
                    <h3>We are common Chinese living in Europe. We are fighting for China’s Democracy and Freedom.</h3>
                </div>
            </div>
        </div>
    </section>


    <section class="section-2 primary-bg-color pb-5">
        <div class="mt-5 mb-5- pt-5 pb-5 ">
            <h2 class="tshadow">DEMO 829</h2>
        </div>
        <div class="container mt-5-">
            <div class="row">
                <div class="col-md-4 mb-3 flex" data-scroll="300 fromBottomIn fromTopOut once">
                    <a href="./" class="product">
                    <img src="imgs/demo829-vc.png" class="img-fluid" alt="Demo 829 Video">
                        <h3 class="offset-top-title"><?php echo $website->texts["home_07"];?></h3>
                        <p><?php echo $website->texts["home_071"];?></p>
                    </a>
                </div>
                <div class="col-md-4 mb-3 flex" data-scroll="300 fromBottomIn fromTopOut once">
                    <a href="./" class="product">
                    <img src="imgs/dryan1.png" class="img-fluid" alt="Dr. LiMeng Yan tell the truth">
                        <h3 class="offset-top-title"><?php echo $website->texts["home_08"];?></h3>
                        <p><?php echo $website->texts["home_081"];?></p>
                    </a>
                </div>
                <div class="col-md-4 mb-3 flex" data-scroll="300 fromBottomIn fromTopOut once">
                    <a href="./" class="product">
                    <img src="imgs/hk1.png" class="img-fluid" alt="support Hong Kong">
                        <h3 class="offset-top-title"><?php echo $website->texts["home_09"];?></h3>
                        <p><?php echo $website->texts["home_091"];?></p>
                    </a>
                </div>
            </div>
        </div>
    </section>

        
    <section class="pb-5 section-2 demo-727">
        <div class="mt-5 mb-5- pt-5 pb-5-">
            <h2 class="tshadow">DEMO 727</h2>
        </div>
        <div class="container text-center mt-5- pt-5 pb-5-">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-3 flex" data-scroll="300 fromBottomIn fromTopOut once">
                    <a href="./" class="product">
                        <img src="imgs/demo727-vc.png" class="img-fluid" alt="Demo 727 Video">
                        <h3 class="offset-top-title"><?php echo $website->texts["home_04"];?></h3>
                        <p><?php echo $website->texts["home_041"];?></p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 flex" data-scroll="300 fromBottomIn fromTopOut once">
                    <a href="/" class="product">
                        <img src="https://via.placeholder.com/600x300/DDDDDD" class="img-fluid" alt="xxx">
                        <h3 class="offset-top-title"><?php echo $website->texts["home_05"];?></h3>
                        <p><?php echo $website->texts["home_051"];?></p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-3 flex" data-scroll="300 fromBottomIn fromTopOut once">
                    <a href="./" class="product">
                        <img src="https://via.placeholder.com/600x300/DDDDDD" class="img-fluid" alt="xxx">
                        <h3 class="offset-top-title"><?php echo $website->texts["home_06"];?></h3>
                        <p><?php echo $website->texts["home_061"];?></p>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <section class="pb-5 section-2 light-grey">
        <div class="container text-center mt-5 mb-5- pt-5 pb-5">
            <h2 class="tshadow">Lorem</h2>
        </div>
        <div class="container mt-5-">
            <div class="row justify-content-center">
                <div class="col-md-5 mb-3 flex" data-scroll="300 fromBottomIn fromTopOut once">
                    <div class="services">
                        <img src="https://via.placeholder.com/600x300/DDDDDD" class="img-fluid" alt="Service">
                    </div>
                </div>
                <div class="col-md-5 mb-3 flex" data-scroll="300 fromBottomIn fromTopOut once">
                    <div class="services">
                        <p><?php echo $website->texts["home_101"];?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-5 mb-5 section-4" data-scroll="300 fromBottomIn fromTopOut once">
        <div class="container text-center">
            <img src="https://via.placeholder.com/200x200/DDDDDD" class="img-fluid" alt="xxx">
            <h2 class="tshadow"><?php echo $website->texts["contact_01"];?></h2>
            <p class="description"><?php echo $website->texts["contact_02"];?></p>
        </div>
    </section>

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

    <div id="loadfooter" class="mt-4"></div>

    <div class="container">
        <a href="#top" id="top-arrow" class="animated"><i class="material-icons">keyboard_arrow_up</i></a>
    </div>


    <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/owlcarousel/owl.carousel.js"></script>
    <script src="vendor/modernizr/modernizr.min.js"></script>
    <script src="vendor/scrolltrigger/ScrollTrigger.min.js"></script>

    <script src="js/main.js"></script>
    
    <script>
        $("#loadfooter").load("files/footer-<?php echo $website->texts["language"]?>.php");
    </script>

</body>
</html>