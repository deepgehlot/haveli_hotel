<?php
require 'header1.php';

?>
<style>
        .gallery {
            display: flex;
            padding: 2px;
            transition: 0.3s;
        }
        
        .gallery:hover .gallery__image {
            filter: grayscale(1);
        }
        
        .gallery__column {
            display: flex;
            flex-direction: column;
            width: 25%;
        }
        
        .gallery__link {
            margin: 2px;
            overflow: hidden;
        }
        
        .gallery__link:hover .gallery__image {
            filter: grayscale(0);
        }
        
        .gallery__link:hover .gallery__caption {
            opacity: 1;
        }
        
        .gallery__thumb {
            position: relative;
        }
        
        .gallery__image {
            display: block;
            width: 100%;
            transition: 0.3s;
        }
        
        .gallery__image:hover {
            transform: scale(1.1);
        }
        
        .gallery__caption {
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 25px 15px 15px;
            width: 100%;
            font-family: "Raleway", sans-serif;
            font-size: 16px;
            color: white;
            opacity: 0;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.5) 0%, rgba(255, 255, 255, 0) 100%);
            transition: 0.3s;
        }
    </style>
    <!-- Restaurant Slider -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/index/m2.JPG"  >
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 caption mt-90">
                                <h5>Haveli Resort</h5>
                                <h1>Weddings</h1>
                            </div>
                        </div>
                    </div>
            </div>

    <!-- Restaurant Content -->
    <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left"> 
                    
                    <div class="section-subtitle">An Experience for the Senses</div>
                    <div class="section-title">Weddings at The Haveli</div>
                </div>
                <div class="col-md-12">
                    <p class="mb-30">Embark on a journey of lifelong love in the enchanting ambiance of Haveli Heritage Resort. Our resort offers a dreamy setting for your special day, blending heritage charm with modern amenities. Exchange vows surrounded by the beauty of historic architecture and lush landscapes, creating unforgettable moments for you and your beloved. From intimate ceremonies to lavish receptions, our dedicated team ensures every detail is perfect. With exquisite venues, gourmet catering, and personalized service, your wedding day becomes a tale of timeless romance. Let us craft your fairytale wedding at Haveli Heritage Resort, where love stories come to life.</p>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>For Bookings</p> <a href="tel:+919928112220">+91 99281 12220</a> 
                            <a href="tel:+919358587770">+91 93585 87770</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/index/testi.JPG" data-overlay-dark="3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h6>Testimonials</h6>
                                <h4>What Client's Say?</h4>
                                <div class="line"></div>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <span class="quote"><img src="img/quot.png" alt=""></span>
                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc
                                        fermen norttito sit space, mus nellentesque habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/4.jpg" alt=""> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Emily Brown</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="img/quot.png" alt=""></span>
                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc
                                        fermen norttito sit space, mus nellentesque habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/1.jpg" alt=""> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Nolan White</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="img/quot.png" alt=""></span>
                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc
                                        fermen norttito sit space, mus nellentesque habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/5.jpg" alt=""> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Olivia Martin</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Gallery -->
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-subtitle">Images</div>
                        <div class="section-title">Wedding Glimpse</div>
                    </div>
                    <!-- 3 columns -->
                    <div class="col-md-4 gallery-item">
                        <a href="img/slider/7.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="img/wedding/wedding6.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/slider/5.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="img/wedding/wedding3.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/slider/4.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="img/wedding/wedding7.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <!-- 2 columns -->
                    <div class="col-md-6 gallery-item">
                        <a href="img/slider/2.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="img/wedding/wedding1.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="img/slider/1.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="img/wedding/wedding2.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <!-- 3 columns -->
                    <!-- <div class="col-md-4 gallery-item">
                        <a href="img/rooms/8.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="img/wedding/wedding5.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/rooms/5.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="img/wedding/wedding4.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="img/rooms/10.jpg" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="img/wedding/wedding8.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
        </section>
    <!-- Footer -->
    <?php
require 'footer.php';

?>
</body>
</html>