@extends('frontend.layouts.main')
@section('main-container')

        <!-- SECTION IMAGE FULLSCREEN -->
        <section class="fullscreen background-image" style="background-image:url(frontend/images/parallax/19.jpg);">
            <div class="container">
                <div class="container-fullscreen">
                    <div class="text-middle text-end">
                        <h3 data-animate="animate__fadeInDown" data-animate-delay="0">Hi, I am</h3>
                        <h1 class="text-lg" data-animate="animate__fadeInDown" data-animate-delay="500">John Smith</h1>
                        <h4 data-animate="animate__fadeInDown" data-animate-delay="1000">Professional Web designer/Developer</h4>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- end: SECTION IMAGE FULLSCREEN -->

        <!-- ABOUT -->
        <section class="p-t-150 background-image" style="background-image:url(frontend/homepages/design-studio/images/parallax/1.jpg);">
            <div class="container">

                <div class="row">
                    <div class="col-lg-7" data-animate="animate__fadeIn">
                        <h2 class="text-medium">HELLO, WE ARE POLO</h2>
                        <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis.
                            <br>
                            <br>Facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius.</p>
                        <a href="#" class="btn btn-outline btn-dark"><span>More About US</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: ABOUT -->

        <!-- ABOUT 2 -->
        <section class="p-b-150 background-image" style="background-image:url(frontend/homepages/design-studio/images/parallax/2.jpg);">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6" data-animate="animate__fadeIn">
                        <h3 class="text-medium m-b-5">OUR TIMELINE</h3>
                        <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis.
                        </p>
                        <hr class="space">
                        <div class="row">
                            <div class="col-lg-3">

                                <div class="text-center">
                                    <div class="icon"><i class="fa fa-3x fa-code"></i></div>
                                    <div class="counter small"> <span data-speed="3000" data-refresh-interval="50" data-to="12416" data-from="600" data-seperator="true"></span> </div>

                                    <p>LINES OF CODE</p>
                                </div>
                            </div>

                            <div class="col-lg-3">

                                <div class="text-center">
                                    <div class="icon"><i class="fa fa-3x fa-coffee"></i></div>
                                    <div class="counter small"> <span data-speed="4500" data-refresh-interval="23" data-to="365" data-from="100" data-seperator="true"></span> </div>

                                    <p>CUPS OF COFFEE</p>
                                </div>
                            </div>

                            <div class="col-lg-3">

                                <div class="text-center">
                                    <div class="icon"><i class="fa fa-3x fa-rocket"></i></div>
                                    <div class="counter small"> <span data-speed="3000" data-refresh-interval="12" data-to="114" data-from="50" data-seperator="true"></span> </div>

                                    <p>PROJECTS</p>
                                </div>
                            </div>

                            <div class="col-lg-3">

                                <div class="text-center">
                                    <div class="icon"><i class="fa fa-3x fa-smile-o"></i></div>
                                    <div class="counter small"> <span data-speed="4550" data-refresh-interval="50" data-to="14825" data-from="48" data-seperator="true"></span> </div>

                                    <p>HAPPY CLIENTS</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- end: ABOUT 2 -->

        <!-- PROCESS BOXES -->
        <section class="box-fancy section-fullwidth text-light">
            <div class="row">
                <div style="background-color: #3D4045" class="col-lg-4">
                    <h1 class="text-lg text-uppercase">01.</h1>
                    <h3>CONCEPT</h3>
                    <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. </span>
                </div>

                <div style="background-color: #505358" class="col-lg-4">
                    <h1 class="text-lg text-uppercase">02.</h1>
                    <h3>DEVELOPMENT</h3>
                    <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. </span>
                </div>

                <div style="background-color: #3D4045" class="col-lg-4">
                    <h1 class="text-lg text-uppercase">03.</h1>
                    <h3>TESTING</h3>
                    <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. </span>
                </div>
            </div>
        </section>
        <!-- end: PROCESS BOXES -->

        <!-- PORTFOLIO -->
        <section class="p-b-0">
            <div class="container">
                <div class="text-center">
                    <h3 class="text-medium m-b-5">OUR LATEST WORK</h3>
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis.
                    </p>
                </div>
            </div>
            <hr class="space">
            <div class="portfolio">
                <!-- Portfolio Items -->
                <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="frontend/homepages/design-studio/images/portfolio/1.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Fullscreen</h3>
                                    <span>Illustrations / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="frontend/homepages/design-studio/images/portfolio/2.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Business</h3>
                                    <span>Illustrations / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="frontend/homepages/design-studio/images/portfolio/3.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Caffe</h3>
                                    <span>Illustrations / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="frontend/homepages/design-studio/images/portfolio/4.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Shop</h3>
                                    <span>Illustrations / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="frontend/homepages/design-studio/images/portfolio/5.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Mobile Application</h3>
                                    <span>App / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="frontend/homepages/design-studio/images/portfolio/6.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Light</h3>
                                    <span>Illustrations / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="frontend/homepages/design-studio/images/portfolio/7.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>John Smith</h3>
                                    <span>Web / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark ct-photography ct-media ct-branding ct-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="frontend/homepages/design-studio/images/portfolio/8.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Portfolio</h3>
                                    <span>Portfolio / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                </div>
                <!-- end: Portfolio Items -->

            </div>
        </section>
        <!-- end: PORTFOLIO -->

        <!-- PARALLAX -->
        <section class="parallax p-t-150 p-b-150" style="background: transparent url(frontend/homepages/minimal/images/parallax/1.jpg);">

            <div class="container">
                <div data-animate-delay="100" data-animate="animate__fadeInUp">
                    <div class="heading-text heading-section text-center">
                        <h1 class="text-medium">Our Blog!</h1>
                        <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
                    </div>
                </div>
                <div id="blog">
                    <div class="container">
                        <!-- Blog post-->
                        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">

                            <!-- Post item-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="frontend/images/blog/12.jpg">
                                        </a>
                                        <span class="post-meta-category"><a href="">Lifestyle</a></span>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                        <h2><a href="#">Standard post with a single image
                                            </a></h2>
                                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                        <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->

                            <!-- Post item-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="frontend/images/blog/17.jpg">
                                        </a>
                                        <span class="post-meta-category"><a href="">Science</a></span>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>

                                        <h2><a href="#">Standard post with a single image
                                            </a></h2>
                                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                        <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->


                            <!-- Post item-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="frontend/images/blog/18.jpg">
                                        </a>
                                        <span class="post-meta-category"><a href="">Science</a></span>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>

                                        <h2><a href="#">Standard post with a single image
                                            </a></h2>
                                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                                        <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->
                        </div>
                        <!-- end: Blog post-->
                    </div>
                </div>

            </div>
        </section>
        <!-- PARALLAX -->


        <!-- REVIEWS -->
        <section>

            <div class="container">
                <div class="text-center">
                    <h3 class="text-medium m-b-5">WHAT PEOPLE SAY ABOUT US</h3>
                    <p>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus</p>
                </div>
                <hr class="space">
                <div class="carousel equalize testimonial testimonial-box" data-margin="20" data-arrows="false" data-items="3" data-equalize-item=".testimonial-item">

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <img src="frontend/images/team/9.jpg" alt="">
                        <p>Polo is by far the most amazing template out there! I literally could not be happier that I chose to buy this template!</p>
                        <span>Alan Monre</span>
                        <span>CEO, Square Software</span>
                    </div>
                    <!-- end: Testimonials item-->

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <img src="frontend/images/team/9.jpg" alt="">
                        <p>Polo is by far the most amazing template out there! I literally could not be happier that I chose to buy this template!</p>
                        <span>Alan Monre</span>
                        <span>CEO, Square Software</span>
                    </div>
                    <!-- end: Testimonials item-->

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <img src="frontend/images/team/9.jpg" alt="">
                        <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
                        <span>Alan Monre</span>
                        <span>CEO, Square Software</span>
                    </div>
                    <!-- end: Testimonials item-->

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <img src="frontend/images/team/10.jpg" alt="">
                        <p>Art is the only serious thing in the world. And the artist is the only person who is never serious.</p>
                        <span>Resa Smith</span>
                        <span>Developer @Apple</span>
                    </div>
                    <!-- end: Testimonials item-->

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <img src="frontend/images/team/11.jpg" alt="">
                        <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
                        <span>Ariol Perry</span>
                        <span>Creative Designer</span>
                    </div>
                    <!-- end: Testimonials item-->

                </div>
            </div>
            <div class="triangle-divider-bottom"></div>
        </section>
        <!-- end: REVIEWS -->

        <!-- GET IN TOUCH -->
        <section class="background-grey">
            <div class="container">

                <div class="text-center m-b-100">
                    <h1 class="text-medium">Get in touch?</h1>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
                <div class="row">
                    <div class="col-lg-8 center">
                        <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form" method="post">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" required name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="subject">Phone</label>
                                    <input type="text" name="widget-contact-form-phone" class="form-control" placeholder="Enter your phone number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="subject">Company</label>
                                    <input type="text" name="widget-contact-form-company" class="form-control" placeholder="Enter your Company name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="widget-contact-form-message" rows="8" class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group text-center">
                                    <button class="btn center" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
        <!-- end: GET IN TOUCH -->
@endsection
