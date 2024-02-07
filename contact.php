<?php include('header.php') ?>



<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    <section id="subheader" class="jarallax">
        <img src="images/background/subheader-overlay.png" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Contact Us</h1>
                        <div class="bread-crumbs"><a href="index.php">Home<span class="breadcrumb-sep">/</span></a><span class="active">Contact Us</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->



    <section aria-label="section">
        <div class="container">
            <div class="row g-custom-x">

                <div class="col-lg-6">

                    <div class="padding40 box-rounded mb30 contact-box">
                        <h4>Company Data</h4>
                        <div class="s1">
                            <p>SC EUROWEB SRL</p>
                            <p><span>Fiscal code:</span> <span>RO22621599</span></p>
                            <p><span>Reg Com:</span> <span>J17/1826/2007</span></p>
                            <p><span>Share capital: </span> <span>200 lei</span></p>
                            <p><span>Registered office: </span> <span>Gradina Veche, 88</span></p>
                            <p><span>City: </span> <span>Galati</span></p>
                            <p><span>County: </span> <span>Galati</span></p>
                            <p><span>Postal code:</span> <span> 800142</span></p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="padding40 box-rounded mb30 contact-box">
                        <h4>Bank Accounts</h4>
                        <div class="s1">
                            <h6>FOR CASH PAYMENTS</h6>
                            <p>BRD Agency Piata Mare Account: SV32065501800</p>
                            <h6>FOR PAYMENTS WITH PAYMENT ORDER (TRANSFER)</h6>
                            <p>GarantiBank Galati</p>
                            <p>RO25 UGBI 0000 1520 0642 4RON</p>
                            <h6>TREASURY OF THE MUNICIPALITY OF GALATI</h6>
                            <p>(exclusively for budgetary institutions)</p>
                            <p>RO65 TREZ 3065 069X XX00 9358</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row g-custom-x">

                <div class="col-lg-8 mb-sm-30">

                    <div class="spacer-30"></div>

                    <h3>Do you have any question?</h3>

                    <form name="contactForm" id="contact_form" class="form-border" method="post" action="#">
                        <div class="row">
                            <div class="col-md-6 mb10">
                                <div class="field-set">
                                    <input type="text" name="Name" id="name" class="form-control" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb10">
                                <div class="field-set">
                                    <input type="text" name="Email" id="email" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb10">
                                <div class="field-set">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb10">
                                <div class="field-set">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="field-set mb20">
                            <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                        <div id='submit' class="mt20">
                            <input type='submit' id='send_message' value='Send Message' class="btn-main">
                        </div>

                        <div id="success_message" class='success'>
                            Your message has been sent successfully. Refresh this page if you want to send more messages.
                        </div>
                        <div id="error_message" class='error'>
                            Sorry there was an error sending your form.
                        </div>
                    </form>
                </div>

                <div class="col-lg-4">

                    <div class="padding40 box-rounded mb30 contact-box">
                        <h4>Get In Touch</h4>
                        <div class="s1">
                            <h4>Email</h4>
                            <div><i class="pr-10 id-color fa fa-envelope-o fa-lg"></i><a href="mailto:office@redhost.ro">office@redhost.ro</a></div>
                            <h4>Phone</h4>
                            <div><i class="pr-10 id-color fa fa-phone fa-lg"></i><a href="tel:0236/418.473 ">0236/418.473 </a> <span>(Monday - Friday: 09:00-17:00)</span></div>
                            <div><i class="pr-10 id-color fa fa-phone fa-lg"></i><a href="tel:0748/030.656">0748/030.656</a> <span> (Monday - Friday: 09:00-17:00)</span></div>
                            <h4>Timings</h4>
                            <p>Technical assistance (exclusively by email at office@redhost.ro )</p>
                            <p>Monday - Friday (09:00-17:00)</p>
                            <p>Urgent: Monday - Sunday 09:00-23:00 00</p>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </section>



</div>
<!-- content close -->


<?php include('footer.php') ?>