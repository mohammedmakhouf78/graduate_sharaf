<?php
 $tables = select($conn,"tables",'*');
?>
<section class="reservation-area ptb-100" style=" background-image: url(<?= getImage("img/reservation-bg.jpg") ?>);">
    <div class="container">
        <h2>احجز طاولة الآن إلكتروني!</h2>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal">احجز الآن</a>
    </div>
</section>
<!-- End Reservation Area  -->
<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">نموذج حجز الجدول</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icofont-close"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form class="modalForm" method="POST" action="<?= getController('site/bookController.php'); ?>">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Number" name="people_number" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="date" class="form-control" name="date" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="time" class="form-control" name="time" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="table_id">
                                    <?php foreach($tables as $table): ?>
                                    <option value="<?= $table['id'] ?>"> طاولة رقم : <?= $table['id']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary">
                            احجز طاولة
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>