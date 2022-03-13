<?php


$gallarys = query($conn, "select gallary.image,gallary.title from gallary limit 4");



?>

<section id="gallery" class="gallery-area ptb-100 pb-0">

    <div class="container">
        <div class="section-title">
            <span>Restaurant Gallery</span>
            <h2>See Our Gallery</h2>
        </div>
    </div>

    <div class="row m-0">

        <?php foreach ($gallarys as $gallary) : ?>
            <div class="col-lg-3 col-md-6 p-0">
                <div class="single-image">
                    <img style="width: 315ps;height:256px;object-fit:cover" src="<?= getImage('gallary/' . $gallary['image']) ?>" alt="gallery-img" />
                    <a href="<?= getImage('gallary/' . $gallary['image']) ?>" class="popup-btn"><i class="icofont-search-restaurant"></i></a>
                    <div class="image-content">
                        <h3><a href="#">Beefsteak</a></h3>
                    </div>
                </div>


            </div>
        <?php endforeach ?>

    </div>
</section>