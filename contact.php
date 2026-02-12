<?php include 'inside/header.php' ?>

<section class="about">
    <div class="about-bg" style="background-image: url('assets/img/contact\ \(1\).jpg');"></div>
    <div class="about-content">
        <h1 class="hero-h1 abt-t wow fadeInUp">Contact Us</h1>

    </div>
</section>


<section class="contact-section">
    <div class="container">
        <div class="contact-wrapper">

            <!-- LEFT IMAGE -->
            <div class="contact-left">
                <img src="assets/img/contact-us-img (1).jpg" alt="Contact Image">

                <div class="contact-info-list wow fadeInUp">
                    <!-- Conatct Info Item Start -->
                    <div class="contact-info-item">
                        <div class="icon-box">
                            <img src="assets/img/icon-phone-white.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <h3>Call Now!</h3>
                            <p><a href="tel:123456789">+00 123 456 789</a></p>
                        </div>
                    </div>
                    <!-- Conatct Info Item End -->

                    <!-- Conatct Info Item Start -->
                    <div class="contact-info-item">
                        <div class="icon-box">
                            <img src="assets/img/icon-mail-white.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <h3>E-mail Us!</h3>
                            <p><a href="mailto:support@domainname.com">support@domainname.com</a></p>
                        </div>
                    </div>
                    <!-- Conatct Info Item End -->

                    <!-- Conatct Info Item Start -->
                    <div class="contact-info-item location-item">
                        <div class="icon-box">
                            <img src="assets/img/icon-location-white.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <h3>Our Location!</h3>
                            <p>45/2 Central Business Innovation Near International Trade Tower,</p>
                        </div>
                    </div>
                    <!-- Conatct Info Item End -->
                </div>


            </div>

            <!-- RIGHT FORM -->
            <div class="contact-right">
                <span class="sub-head wow fadeInUp">
                    Contact Us
                </span>

                <h2 class="title text-container">Get in touch with our team anytime today</h2>

                <p class="para wow fadeInUp" data-wow-delay="0.2s">
                    Our team is always here to listen, support, and guide you. Whether you
                    have questions or want to discuss your next project.
                </p>

                <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp"
                    data-wow-delay="0.4s" novalidate="true">
                    <div class="row">
                        <div class="form-group col-md-6 mb-4 has-error has-danger">
                            <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name"
                                required="">

                        </div>

                        <div class="form-group col-md-6 mb-4">
                            <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name"
                                required="">

                        </div>

                        <div class="form-group col-md-6 mb-4">
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Mobile Number"
                                required="">

                        </div>

                        <div class="form-group col-md-6 mb-4">
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="E-mail Address" required="">

                        </div>

                        <div class="form-group col-md-12 mb-5">
                            <textarea name="message" class="form-control" id="message" rows="5"
                                placeholder="Write your message here..."></textarea>

                        </div>

                        <div class="col-lg-12">
                            <div class="contact-form-btn">
                                <div class="wow fadeInUp" data-wow-delay="0.6s">
                                    <button href="#" class="swap-btn">
                                        <span>Submit</span>
                                        <div class="arrow-box">
                                            <i class="fa-solid fa-arrow-right arrow-in"></i>
                                            <i class="fa-solid fa-arrow-right arrow-out"></i>
                                        </div>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section>



<section class="cont-mid">
    <div class="container">
        <div class="india-map-section">
            <div class="india-map">
                <img src="assets/img/map.jpeg" alt="India Map">

                <span class="pin delhi">DELHI</span>
                <span class="pin mumbai">MUMBAI</span>
                <span class="pin kolkata">KOLKATA</span>
                <span class="pin bengaluru">BENGALURU</span>
            </div>
        </div>

    </div>
</section>








<section class="cont-mid">
    <div class="container">
        <h5 class="sub-head wow fadeInUp text-center" data-wow-delay="0.2s"> Visit Us</h5>
        <h2 class="title text-container text-center">Let’s Connect Beyond the Screen</h2>
        <p class="para wow fadeInUp text-center pt-0 " data-wow-delay="0.4s">Whether it’s a question, a big travel idea,
            or just a hello — we’re always just a message or visit away. Find us on the map below.
        </p>

        <div class="responsive-map wow fadeInUp mt-5" data-wow-delay="0.65s">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.086332247182!2d88.34473807507783!3d22.57587417948934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277a25c0c28a1%3A0x4385538ecbb20738!2sDiamond%20Heritage!5e0!3m2!1sen!2sin!4v1754051446491!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


    </div>
</section>


<?php include 'inside/footer.php' ?>