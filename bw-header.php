<!DOCTYPE html>
<html lang="en">
<!-- 
* Designed and Developed by Bal Sankar
* Licensed under MIT
* github : https://github.com/balzankar/Swift-Invoices
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/bw-img/favicon.png" type="image/png" sizes="16x16">
    <title>SwiftPae</title>

    <link rel="stylesheet" href="assets/css/bw-bs.css">
    <link rel="stylesheet" href="assets/css/bw_swift.css?v=1.2">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">

</head>

<body>
    <!-- BW Header -->
    <header id="header" class="header-main">
        <div class="bw-header-top main-header-menu-wrap bg-transparent">
            <div class="container-fluid">
                <nav class="js-mega-menu navbar navbar-expand-md header-nav">

                    <a class="navbar-brand">
                        <img src="assets/bw-img/logo.png" width="120" alt="logo" class="img-fluid" />
                    </a>

                    <button class="navbar-toggler menu-btn btn" aria-expanded="false" aria-controls="bwmenu" data-toggle="collapse" data-target="#bwmenu">
                        <span class="fa fa-bars"></span>
                    </button>

                    <div id="bwmenu" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto main-navbar-nav">

                            <li class="nav-item hs-has-sub-menu custom-nav-item">
                                <a id="homeMenu" class="nav-link custom-nav-link main-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="invoiceMenu">Home</a>

                                <ul id="homeMenu" class="hs-sub-menu main-sub-menu" aria-labelledby="homeMenu" style="min-width: 230px;">
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="index.php">Version 1</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="home2.php">Version 2</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="home3.php">Version 3</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item hs-has-sub-menu custom-nav-item">
                                <a id="invoiceMenu" class="nav-link custom-nav-link main-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="invoiceMenu">Invoice</a>

                                <ul id="invoiceMenu" class="hs-sub-menu main-sub-menu" aria-labelledby="invoiceMenu" style="min-width: 230px;">
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="generate.php">Image to Invoice</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="generate.php">Document to PDF</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item hs-has-sub-menu custom-nav-item bw-single-menu-list-toggle">
                                <a id="pricingMenu" class="nav-link custom-nav-link main-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="pricingMenu">Pricing</a>

                                <ul id="pricingMenu" class="hs-sub-menu main-sub-menu" aria-labelledby="pricingMenu" style="min-width: 230px;">
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="pricing.php">Image to Invoice</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="pricing.php">Document to PDF</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                                <a id="productMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Products</a>

                                <div class="hs-mega-menu main-sub-menu" style="width: 715px" aria-labelledby="productMenu">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <div class="menu-item-wrap py-0 p-md-3 p-lg-3">

                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="#">
                                                        <div class="media align-items-center">
                                                            <div class="menu-item-icon rounded-circle primary-bg">
                                                                <i class="fas fa-server"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="u-header__promo-title">Invoice Generator Free</span>
                                                                <small class="u-header__promo-text">One File at a time, <strong>Free for Lifetime</strong></small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="menu-item-wrap py-0 p-md-3 p-lg-3">
                                                <div class="title-with-icon-item">
                                                    <a class="title-with-icon-link" href="#">
                                                        <div class="media align-items-center">
                                                            <div class="menu-item-icon rounded-circle twitter-bg">
                                                                <i class="fas fa-server"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="u-header__promo-title">Invoice Generator Pro</span>
                                                                <small class="u-header__promo-text">Full Fledged System with <strong>Admin Panel</strong></small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="u-header__product-banner bg-image" image-overlay="8">
                                        <div class="background-image-wraper custom-radius-bottom" style="background: url('assets/bw-img/login.jpg')no-repeat center center / cover; opacity: 1;"></div>
                                        <div class="u-header__product-banner-content position-relative z-index text-center text-white">
                                            <div class="mb-4">
                                                <h5 class="text-white">Interested in Hazzel Free Invoice ?</h5>
                                                <div class="clock menu-countdown my-4"></div>
                                            </div>
                                            <a class="btn btn-bw-03" href="#">Get a Quote<span class="ti-arrow-right pl-2"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item custom-nav-item">
                                <a class="nav-link custom-nav-link" href="features.php">Features</a>
                            </li>

                            <li class="nav-item hs-has-mega-menu custom-nav-item position-relative" data-position="center">
                                <a id="companyMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Company</a>

                                <div class="hs-mega-menu main-sub-menu" style="width: 320px" aria-labelledby="companyMenu">
                                    <div class="p-lg-2">

                                        <div class="title-with-icon-item">
                                            <a class="title-with-icon-link" href="#">
                                                <div class="media align-items-center">
                                                    <div class="menu-item-icon rounded-circle twitter-bg">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="u-header__promo-title">Contact Us</span>
                                                        <small class="u-header__promo-text">Face any problem contact with us
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item header-nav-last-item d-flex align-items-center">
                                <a class="btn btn-light text-success" data-toggle="modal" data-target="#gfroms">
                                    <span class="fa fa-check-circle text-success pr-2"></span> Get Started
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--header section end-->

    <div class="main">