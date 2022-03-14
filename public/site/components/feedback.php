<?php


$feedbacks = query($conn, "select * from feedback");



?>

<section class="feedback-area ptb-100" style=" background-image: url(<?= getImage("img/feedback-bg.jpg") ?>);">
    <div class="container">
        <div class="section-title">
            <span>الشهادات - التوصيات</span>
            <h2>ملاحظات عملائنا</h2>
        </div>
        <div class="row">
            <?php foreach ($feedbacks as $feedback) : ?>


                <div class="feedback-slides owl-carousel owl-theme">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-feedback">
                            <h2>
                                <?= $feedback['message'] ?>
                            </h2>
                            <div class="client-info">
                                <h3><?= $feedback['name'] ?></h3>
                                <span><?= $feedback['job'] ?></span>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

                </div>
        </div>
    </div>
</section>