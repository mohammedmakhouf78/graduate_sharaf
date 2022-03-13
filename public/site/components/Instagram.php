<?php


$news = query($conn, "select * from news limit 4");



?>

<section class="instagram-area">
    <div class="instagram-item-list">
        <div class="instagram-follow">
            <h3><a href="#">Follow On Instagram</a></h3>
        </div>
        <div class="instagram-slides owl-carousel owl-theme">

            <?php foreach ($news as $new) : ?>

                <div class="instagram-item">
                    <a href="#"><img src="<?= getImage('news/' . $new['image']) ?>" alt="instagram-image" /></a>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</section>