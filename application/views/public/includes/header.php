<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="<?= $page_title ?>">
    <meta name="description" content="<?= $page_description ?>">
    <link rel="icon" href="<?=base_url()?>resources/images/logo/logo.png">
    <link href="<?=base_url()?>resources/css/main.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>resources/css/media.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>resources/vendor/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>resources/vendor/slick/slick-theme.css"/>
    <script src="https://kit.fontawesome.com/4a0859cac2.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/7.0.3/typeit.min.js"></script>
    <title><?= $page_title ?></title>
</head>
<div class="preloader">
    <div class="center-g">
        <img src="<?=base_url()?>resources/images/logo/logo.png" alt="logo">
        <span><img src="<?=base_url()?>resources/images/others/loader.gif" alt="loading"></span>
    </div>
</div>
<body>
   <div class="cursor"></div>
   <div class="session" id="session_id" data="<?=$_token?>"></div>
   <div class="wrapping" id="site_wrapping">

        <div class="site_header_wrapping">

            <div class="top_header">
                <div class="dateandtime">
                    <span id="datetime"></span>
                </div><!--ends date and time-->
                <div class="zoominout">
                    <span id="minus">A-</span>
                    <span id="normal">A</span>
                    <span id="plus">A+</span>
                </div><!--ends zoominout-->
                <div class="social-icons">
                    <a href="<?=base_url()?>"><i class="fas fa-home"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#">Contact | </a>
                    <a href="#">About | </a>
                </div><!--ends social-icons-->
            </div><!--ends top_header-->
            
            <div class="navigation">
                <div class="brand">
                    <a href="<?=base_url()?>">
                        <img src="<?=base_url()?>resources/images/logo/logo.png" alt="logo">
                    </a>
                </div><!--end brand-->    
                <div class="brand_title">
                    <h1>Rameshwaram</h1>
                    <span>University</span>
                </div> 
                <ul class="mainnav">
                    <li><a href="<?=base_url()?>"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li><a href="<?=base_url()?>courses"><i class="fas fa-graduation-cap"></i><span>Courses</span></a></li>
                    <li><a href="<?=base_url()?>student/register"><i class="fas fa-user-tie"></i><span>Register</span></a></li>
                    <li><a href="<?=base_url()?>exam-center"><i class="fas fa-university"></i><span>Exam Centers</span></a></li>
                    <li><a href="javascript:;"><i class="fas fa-user-graduate"></i><span>Student</span></a>
                        <ul class="inner-nav">
                            <li><a href="<?=base_url()?>student/download-hall-ticket"><i class="fas fa-download"></i><span>Download Hall Ticket</span></a>
                            <li><a href="<?=base_url()?>student/result"><i class="fas fa-list-alt"></i><span>Download Result</span></a>
                        </ul>
                    </li>

                    <li><a href="<?=base_url()?>student/login" id="login"><i class="fas fa-user"></i><span>Login</span></a></li>
                </ul><!--ends nav-->
            </div><!--ends navigation-->

        </div><!--ends site_header_wrapping-->
        <?php if($page_name === 'home'):?>
        <div class="slider-section">
            <div class="header-slider">
                <div class="slides" style="background:url('<?=base_url()?>resources/images/bg/banner1.jpg')">
                    <div class="banner-text">
                        <h1 id="banner1title"></h1>
                        <p id="banner1subtitle">- </p>
                    </div>
                </div>
                <div class="slides" style="background:url('<?=base_url()?>resources/images/bg/banner2.jpg')">
                    <div class="banner-text">
                        <h1>Welcomes you to Rameshwaram University.</h1>
                        <p>- Easy way to success in life.<span class="ti-cursor with-delay">|</span></p>
                    </div>
                </div>
                <div class="slides" style="background:url('<?=base_url()?>resources/images/bg/banner3.jpg')">
                    <div class="banner-text">
                        <h1>Welcomes you to Rameshwaram University.</h1>
                        <p>- Easy way to success in life.<span class="ti-cursor with-delay">|</span></p>
                    </div>
                </div>
                <div class="slides" style="background:url('<?=base_url()?>resources/images/bg/banner4.jpg')">
                    <div class="banner-text">
                        <h1>Welcomes you to Rameshwaram University.</h1>
                        <p>- Easy way to success in life.<span class="ti-cursor with-delay">|</span></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>