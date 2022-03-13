<?php


$sliders = query($conn, "select * from sliders limit 6");



?>
<section id="menu" class="menu-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Discover</span>
            <h2>Our Menu</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="tab">
                    <ul class="tabs">
                        <li>
                            <a href="#">
                                <i class="icofont-bell-pepper-capsicum"></i>
                                <br />
                                Starter
                            </a>
                        </li>

                    </ul>
                    <div class="tab_content">
                        <div class="tabs_item tab-item-bg-two" style=" background-image: url(<?= getImage("img/offer-img2.jpg") ?>);">
                            <div class="row">



                                <?php foreach ($sliders as $slider) : ?>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="single-menu">
                                            <div class="food-menu-img">
                                                <img style="width:90px;height:90px;object-fit: cover;" src="<?= getImage('sliders/' . $slider['image']) ?>" alt="food-img" />
                                            </div>
                                            <div class="food-menu-content">
                                                <h3 class="mb-2">
                                                    Cupcake Recipes
                                                    <span class="menu-price"><?= $slider['discount'] ?></span>
                                                </h3>
                                                <ul>
                                                    <li><?= $slider['description'] ?></li>
                                                    <li><?= $slider['title'] ?></li>
                                                    <li><?= $slider['description'] ?></li>
                                                    <li><?= $slider['title'] ?></li>
                                                    <li><?= $slider['description'] ?></li>
                                                    <li><?= $slider['title'] ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>