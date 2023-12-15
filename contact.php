<?php

require 'header1.php';

?>
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="img/index/contact.JPG">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Get in touch</h5>
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3>The Haveli Heritage Hotel</h3>
                    <p>The Haveli Resorts Barmer Is A Distinguished Heritage Hotel That Seamlessly Fuses Contemporary Architectural Elements With State-of-the-art Amenities, Creating An Unforgettable Lodging Experience In The Heart Of Barmer.</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:+919928112220">+91 99281 12220</a>
                            <a href="tel:+919358587770">+91 93585 87770</a>

                        </div>
                    </div>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-envelope"></span></div>
                        <div class="text">
                            <p>Email Info</p> <a href="mailto:info@thehaveliresorts.com">info@thehaveliresorts.com</a>
                        </div>
                    </div>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-location-pin"></span></div>
                        <div class="text">
                            <p>Address</p>
                            The Haveli Resort Shaktiman Palace, Shaktiman Nagar Barmer Rajasthan 344001
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    <h3>Get in touch</h3>
                    <form id="contact_form" class="contact__form" action="#">
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                            </div>
                        </div>
                        <!-- form elements -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="name" id="name" type="text" placeholder="Your Name *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" id="email" type="email" placeholder="Your Email *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" id="phone"  type="text" maxlength="10" minlength="10" placeholder="Your Number *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="subject" id="subject" type="text" placeholder="Subject *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="button" onclick="booking_form()"  class="butn-dark2"><span>Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Map Section -->
            <div class="row">
                <div class="col-md-12 map animate-box" data-animate-effect="fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14370.750735113548!2d71.4352327!3d25.7808775!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394425c5affd160d%3A0xb566505706b17724!2sSHAKTIMAN%20PALACE!5e0!3m2!1sen!2sin!4v1694928131101!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Reservation & Booking Form -->
    <section class="testimonials">
                <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/index/bg.JPG" data-overlay-dark="2">
                    <div class="container">
                        <div class="row">
                            <!-- Reservation -->
                            <div class="col-md-5 mb-30 mt-30">
                                <!-- <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></p> -->
                                <h5>Each of our guest rooms feature a private bath, wi-fi, cable television and include full breakfast.</h5>
                                <div class="reservations">
                                <div class="icon"><span class="flaticon-call" style="color:white"></span></div>
                                <div class="text">
                                    <p>Reservation</p> <a href="tel:+919928112220" style="color:white">+91 99281 12220</a>
                                    <a href="tel:+919358587770" style="color:white">+91 93585 87770</a>
                                </div>
                            </div>
                                <!--                        <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>-->
                            </div>
                            <!-- Booking From -->
                            <div class="col-md-5 offset-md-2">
                                <div class="booking-box">
                                    <div class="head-box">
                                        <h6>Rooms & Suites</h6>
                                        <h4>Resort Booking Form</h4>
                                    </div>
                                    <div class="booking-inner clearfix">
                                        <form action=" " class="form1 clearfix" id="whatsappForm">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input1_wrapper">
                                                        <label>Check in</label>
                                                        <div class="input1_inner">
                                                            <input type="text" required name="checkin" id="checkin" class="form-control input datepicker" placeholder="Check in">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input1_wrapper">
                                                        <label>Check out</label>
                                                        <div class="input1_inner">
                                                            <input type="text" required name="checkout" id="checkout" class="form-control input datepicker" placeholder="Check out">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="select1_wrapper">
                                                        <label>Rooms</label>
                                                        <div class="select1_inner">
                                                            <select class="select2 select" required style="width: 100%" name="adults" id="adults">
                                                                <option value="0">No. of Rooms</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="select1_wrapper">
                                                        <label>Person</label>
                                                        <div class="select1_inner">
                                                            <select class="select2 select" style="width: 100%" name="children" id="children">
                                                                <option value="0">Person per Room</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="button" onclick="booking_form()" class="btn-form1-submit mt-15">Check Availability</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php
    require 'footer.php';
    ?>

    <script>

                    function booking_form() {

                        var checkin = document.getElementById("checkin").value;
                        var checkout = document.getElementById("checkout").value;
                        var adults = document.getElementById("adults").value;
                        var children = document.getElementById("children").value;
                        let contact = '+919928112220'; // add your number ex(+9100000000)


                        var encodedMessage = encodeURIComponent(
                        "Please confirm my booking:-" + "\n" +
                            "Check In Date:- " + checkin + "\n" +
                            "Check Out Date:- " + checkout + "\n" +
                            "Number of Rooms:-" + adults + "\n" +
                            "Number of Person:- " + children
                        );


                        var link;

    //                     Check if user is on a mobile device
                        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                            link = `whatsapp://send?phone=${contact}&text=${encodedMessage}`;
                        } else { // Desktop device
                            link = `https://web.whatsapp.com/send?phone=${contact}&text=${encodedMessage}`;
                        }

                        window.open(link, '_blank').focus();
            }


function booking_form() {

                                                var name = document.getElementById("name").value;
                                                var email = document.getElementById("email").value;
                                                var phone = document.getElementById("phone").value;
                                                var subject = document.getElementById("subject").value;
                                                var message = document.getElementById("message").value;
                                                let contact = '+919928112220'; // add your number ex(+9100000000)


                                                var encodedMessage = encodeURIComponent(

                                                    "Name:-" + name + "\n" +
                                                    "Email:- " + email + "\n" +
                                                    "Phone:-" + phone + "\n" +
                                                    "Subject:- " + subject + "\n" +
                                                    "Message:- " + message
                                                );


                                                var link;

                            //                     Check if user is on a mobile device
                                                if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                                                    link = `whatsapp://send?phone=${contact}&text=${encodedMessage}`;
                                                } else { // Desktop device
                                                    link = `https://web.whatsapp.com/send?phone=${contact}&text=${encodedMessage}`;
                                                }

                                                window.open(link, '_blank').focus();
                                        }


                             document.getElementById('phone').addEventListener('input', function(event) {
                                   this.value = this.value.replace(/[^\d]/g, '');
                                 });
            </script>

   </body>
</html>