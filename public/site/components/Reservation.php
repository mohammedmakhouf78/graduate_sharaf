<section class="reservation-area ptb-100" style=" background-image: url(<?= getImage("img/reservation-bg.jpg") ?>);">
    <div class="container">
        <h2>Book A table Now !</h2>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal">Book Now</a>
    </div>
</section>
<!-- End Reservation Area  -->
<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Table Booking Reservation Form</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icofont-close"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form class="modalForm">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Number" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="01/02/2021" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Time" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>1 Person</option>
                                    <option>2 Person</option>
                                    <option>3 Person</option>
                                    <option>4 Person</option>
                                    <option>5 Person</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary">
                                Book a Table
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>