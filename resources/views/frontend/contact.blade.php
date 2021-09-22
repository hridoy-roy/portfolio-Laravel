@extends('frontend.layouts.main')
@section('main-container')
        <!-- Page title -->
        <section id="page-title" data-bg-parallax="frontend/images/parallax/5.jpg">
            <div class="container">
                <div class="page-title">
                    <h1>Contact Us</h1>
                    <span>The most happiest time of the day!.</span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a> </li>
                        <li><a href="#">Pages</a> </li>
                        <li class="active"><a href="#">Contact Us</a> </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
        <!-- CONTENT -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Get In Touch</h3>
                        <p>The most happiest time of the day!. Suspendisse condimentum porttitor cursus. Duis nec nulla turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada fermentum bibendum.</p>
                        <div class="m-t-30">
                            {{-- <form class="widget-contact-form" action="" role="form" method="post" enctype="multipart/form-data"> --}}
                                {!! Form::open([
                                    'url' => 'storecontact',
                                    'method' => 'post',
                                    'role' => 'form',
                                    'cnctype' => 'multipart/form-data',
                                    'class' => 'widget-contact-form'
                                ]) !!}
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        {{-- <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control name" placeholder="Enter your Name"> --}}
                                        {!! form::text('name','',[
                                            'type' => "text", 'aria-required'=>"true", 'class'=>"form-control name", 'placeholder'=>"Enter your Name"
                                        ]) !!}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" aria-required="true" required name="widget-contact-form-email" class="form-control email" placeholder="Enter your Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" aria-required="true" required name="widget-contact-form-email" class="form-control email" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="subject">Your Subject</label>
                                        <input type="text" name="widget-contact-form-subject" class="form-control" placeholder="Subject...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control " placeholder="Enter your Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="message">Attachment file<small>*</small></label>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                                    <input type="file" aria-required="true" name="widget-contact-form-attachment" class="form-control required" />
                                </div>
                                <!--   <div class="form-group">
                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                                </div> -->
                                <button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                                {!! Form::close() !!}
                            {{-- </form> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Address & Map</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <address>
                                    <strong>Polo, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</h4> (123) 456-7890
                                </address>
                            </div>
                            <div class="col-lg-6">
                                <address>
                                    <strong>Polo Office</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</h4> (123) 456-7890
                                </address>
                            </div>
                        </div>
                        <!-- Google Map -->
                        <div class="map" data-latitude="-37.817240" data-longitude="144.955826" data-style="light" data-info="Hello from &lt;br&gt; Inspiro Themes"></div>
                        <!-- end: Google Map -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Content -->
@endsection

    {{-- <!--Google Maps files-->
    <script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key=AIzaSyBOksKHb9HyydVB-mcrqKUVfA_LeB79jcQ'></script>
    <script type="text/javascript" src="plugins/gmap3/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3/map-styles.js"></script> --}}
