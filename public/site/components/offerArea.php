<?php


$categories = query($conn, "select * from categories limit 4");



?>


<section id="offer" class="offer-area ptb-100" style=" background-image: url(<?= getImage("img/offer-bg.jpg") ?>);">
    <div class="container">
        <div class="section-title">
            <span>Amazing Delicious</span>
            <h2>This Week Special</h2>
        </div>
        <div class="row">


            <div class="offer-slides owl-carousel owl-theme">



                <?php foreach ($categories as $categorie) : ?>





                    <div class="col-lg-12 col-md-12">
                        <div class="single-offer">
                            <a href="#"><img src="<?= getImage('categories/' . $categorie['image']) ?>" alt="offer-img" /></a>
                            <div class="offer-content">
                                <h3>
                                    <span>50% off</span> <?= $categorie['name'] ?>
                                </h3>
                                <p>
                                    <?= $categorie['name'] ?>
                                </p>
                                <a href="#" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>
                    </div>




                <?php endforeach ?>



            </div>
        </div>
    </div>
</section>