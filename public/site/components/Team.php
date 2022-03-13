<?php


$chefs = query($conn, "select * from chefs limit 3");



?>

<section id="team" class="team-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Expert Chefs</span>
            <h2>Meet the Team</h2>
        </div>
        <div class="row">
            <div class="team-slides owl-carousel owl-theme">

                <?php foreach ($chefs as $chef) : ?>
                    <div class="col-lg-12 col-md-12">



                        <div class="single-team">
                            <div class="team-image">
                                <img style="width:352px;height:450px;object-fit:cover" src="<?= getImage('chef/' . $chef['image']) ?>" alt="chef-img" />
                                <ul class="team-member-social">
                                    <li>
                                        <a href="<?= $chef['facebook'] ?>"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?= $chef['twitter'] ?>"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?= $chef['linked_in'] ?>"><i class="icofont-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-behance"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3><?= $chef['name'] ?></h3>
                                <span><?= $chef['job'] ?></span>
                            </div>
                        </div>

                    </div>

                <?php endforeach ?>

            </div>
        </div>
    </div>

</section>