<section id="contact" class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-box">
                    <h3>اتصل بنا</h3>
                    <p>
                        <a href="#"><i class="icofont-google-map"></i>13 شارع الحرية,
                        الإسكندرية, مصر</a>
                    </p>
                    <p>
                        <a href="#"><i class="icofont-phone"></i> +20 2011 5643</a>
                    </p>
                    <p>
                        <a href="#"><i class="icofont-envelope"></i>
                            <span class="__cf_email__">Abdullah@gmail.com</span></a>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-box">
                    <h3>ساعات العمل</h3>
                    <p class="opening-hours">
                        Satu - Thur <span>8:00am - 11:30pm</span>
                    </p>
                    <p class="opening-hours">يوم الجمعة <span>مغلق</span></p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <form method="POST" class="mt-4" action="<?= getController('site/msgController.php') ?>">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First name" required data-error="Please enter your first name" name="first_name" />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last name" required data-error="Please enter your last name" name="last_name" />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your email" required data-error="Please enter your email" name="email" />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your phone" required data-error="Please enter your number" name="phone" />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Your message..." required data-error="Write your message" name="message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary">
                                Send Message
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>