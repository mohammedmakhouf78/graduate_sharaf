<?php

$about = query($conn, "select about.phone,about.email,about.open,about.close from about")[0];



?>


<div class="preloader-area">
    <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- Start Header  -->
<header class="top-area">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="call-to-action">
                        <p>
                            <i class="icofont-envelope"></i> Email:
                            <a href="#"><span class="__cf_email__"><?= $about['email'] ?></span></a>
                        </p>
                        <p>
                            <i class="icofont-phone"></i> Phone:
                            <a href="#"><?= $about['phone'] ?></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="top-social">
                        <li>
                            <a href="#"><i class="icofont-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="icofont-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="icofont-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="icofont-behance"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="icofont-rss-feed"></i></a>
                        </li>
                    </ul>
                    <div class="opening-hours">
                        <p>
                            <i class="icofont-wall-clock"></i> Opening Hours : <?= $about['open'] . " - " . $about['open']; ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light transparent-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"> Rest<span>urant</span> </a>
            <a class="navbar-brand black-logo text-dark" href="index.html">Rest<span>urant</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= getPageSite('index.php') ?>">الصفحة الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">حول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#offer">عرض</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">قائمة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">فريق</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">صالة عرض</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">اتصل</a>
                    </li>

                    <?php if(isset($_SESSION['admin'])): ?> 
                        <li class="nav-item">
                            <a class="nav-link" href="<?= getpageAdmin('index.php') ?>">لوحة التحكم</a>
                        </li>
                    <?php endif; ?> 

                    <?php if(!isset($_SESSION['user'])): ?>                   
                    <li class="nav-item">
                        <a class="nav-link" href="<?= getController('site/registeruser.php') ?>">انشاء حساب</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= getPageSite('auth/login.php') ?>">تسجيل دخول</a>
                    </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= getController('site/logout.php') ?>">تسجيل الخروج</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>
</header>