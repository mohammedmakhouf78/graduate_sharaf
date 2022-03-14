<?php


$news = query($conn, "select * from news limit 4");



?>
<section id="blog" class="blog-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>من مدونتنا</span>
            <h2>أحدث الأخبار</h2>
        </div>
        <div class="row">



            <div class="blog-slides owl-carousel owl-theme">

                <?php foreach ($news as $new) : ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="#" class="post-image">
                                <img style="width:352px;height:242px;" src="<?= getImage('news/' . $new['image']) ?>" alt="blog-image" /></a>
                            <div class="blog-post-content">
                                <ul>
                                    <li>
                                        <i class="icofont-user-male"></i> <a href="#">mohamed sharaf</a>
                                    </li>
                                    <li><i class="icofont-wall-clock"></i> <?= $new['description'] ?></li>
                                </ul>
                                <h3><a href="#"><?= $new['name'] ?></a></h3>
                                <p>
                                    <?= $new['title'] ?>
                                </p>
                                <a href="#" class="read-more-btn">Read More <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>


        </div>
    </div>
</section>