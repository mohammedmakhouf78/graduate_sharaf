<?php


$gallarys = query($conn, "select gallary.image,gallary.title from gallary limit 3");



?>

<div id="home" class="main-banner item-bg-one" style=" background-image: url(<?= getImage("img/main-banner-1.jpg") ?>);">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="main-banner-content">
                    <h1>Spicy & Tasty</h1>
                    <h3>Delicious Egyptian food</h3>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="down_arrow">
        <a href="#about" class="scroll_down"></a>
    </div>
</div>

<!-- End Main Banner  -->
<!-- Start Story Area  -->
<section id="about" class="story-area ptb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="story-image">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">



                            <img src="<?= getImage('gallary/' . $gallarys[0]['image'])  ?>" />
                            <img src="<?= getImage('gallary/' . $gallarys[1]['image'])  ?>" />



                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="<?= getImage('gallary/' . $gallarys[2]['image']) ?>" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="story-content">
                    <div class="section-title">
                        <span>Our Story</span>
                        <h2>Welcome to Resturant</h2>
                    </div>
                    <p>
                        <?= $gallarys[0]['title'] ?>
                    </p>
                    <div class="story-quote">
                        <div class="quote-content">
                            <p>
                                <?= $gallarys[0]['title'] ?>
                            </p>

                        </div>
                        <div class="quote-info">
                            <h3>Amr bin Kulthum</h3>
                            <span>Master Chef</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <canvas id="canvas"></canvas>

</section>