@include('userView.layouts.header')


    <!--////////////////////////////////////Container-->

    <!-----------------content-box-1-------------------->
    <section class="container-fluid">
        <div class="wrap-body">
            @include('userView.layouts.barra')
        </div>
        <img src="{{ asset('img/Rail (1).png') }} " class="img-fluid;" style="margin-top: -9rem;" />

    </section>
    <!-----------------content-box-2-------------------->
    <section id="container" class="zerogrid">
        <div class="wrap-container">
            <section class="content-box box-2">
                <div class="wrap-box" id="post">
                    <!--Start Box-->
                    <div class="row">
                        @php
                            $i = 0;
                            $col = 3;
                        @endphp
                        @foreach ($posts as $post)
                            @php
                                
                                if ($col == 3) {
                                    $col = $col - 1;
                                } elseif ($col == 2) {
                                    $col = $col + 1;
                                }
                                $i = $i + 1;
                                
                            @endphp
                            <div class="col-@php echo $col @endphp-5 box-item">
                                <a class="box-item-inner" href="/post/{{ $post->id }}?ruta=web">
                                    <div class="box-item-image gradient-@php echo $i @endphp"
                                        style="background-image: url('@if ($post->image){{ asset('portadas/' . $post->image->url) }} @endif')"></div>
                                    <h3 class="sub-title">@php echo '0'.$i @endphp.</h3>
                                    <div class="box-item-detail">
                                        <h2 class="title">{{ $post->name }}</h2>
                                        <p>{{ $post->subtitulo }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
            </section>
            <!-----------------content-box-3-------------------->
            <section class="content-box box-3 box-style-1">
                <div class="row wrap-box">
                    <!--Start Box-->
                    <div class="col-1-2">
                        <div class="wrap-col">
                            <div class="box-text">
                                <h1>@Pachimanok</h1>
                                <p class="lead">Pablo Rio, pero me dicen Pachi. Estudie logística y
                                    administración, hace 3 años me dedico a la tecnlogia. Me gusta la eficiencia y la
                                    automatización.</p>
                                <p><strong><i>Escribo sobre esto. </i></strong></p>
                                <a class="button button-skin">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-----------------content-box-4-------------------->
            <section class="content-box box-4">
                <div class="row wrap-box">
                    <!--Start Box-->
                    <div class="col-full">
                        <div class="col-1-4 portfolio-box">
                            <a class="" href="#">
                                <div class="portfolio-caption">
                                    <div class="portfolio-image"><img
                                            src="{{ asset('userView/images/brand.png') }}" />
                                    </div>
                                    <div class="portfolio-title">Branding Title</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-1-4 portfolio-box">
                            <a class="" href="#">
                                <div class="portfolio-caption">
                                    <div class="portfolio-image"><img
                                            src="{{ asset('userView/images/brand.png') }}" />
                                    </div>
                                    <div class="portfolio-title">Branding Title</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-1-4 portfolio-box">
                            <a class="" href="#">
                                <div class="portfolio-caption">
                                    <div class="portfolio-image"><img
                                            src="{{ asset('userView/images/brand.png') }}" />
                                    </div>
                                    <div class="portfolio-title">Branding Title</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-1-4 portfolio-box">
                            <a class="" href="#">
                                <div class="portfolio-caption">
                                    <div class="portfolio-image"><img
                                            src="{{ asset('userView/images/brand.png') }}" />
                                    </div>
                                    <div class="portfolio-title">Branding Title</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-----------------content-box-5-------------------->
            <section class="content-box box-5 box-style-3">
                <div class="row wrap-box">
                    <!--Start Box-->
                    <div class="col-full">
                        <div class="box-text">
                            <div class="heading">
                                <h2>Contact Me</h2>
                                <span class="intro">Get subscriber only insights & news delivered by John
                                    Doe</span>
                            </div>
                            <div class="content">
                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming<br>
                                    id quod mazim placerat facer possim assum. </p>
                                <div class="subscribe-form">
                                    <form name="form1" id="subs_form" method="post" action="contact.php">
                                        <label class="row">
                                            <div class="col-2-3">
                                                <div class="wrap-col">
                                                    <input type="text" name="name" id="name"
                                                        placeholder="Enter Your Email" required="required" />
                                                </div>
                                            </div>
                                            <div class="col-1-3">
                                                <div class="wrap-col">
                                                    <input class="button button-skin button-subscribe" type="submit"
                                                        name="Submit" value="Subscribe">
                                                </div>
                                            </div>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!--////////////////////////////////////Footer-->
    <footer>
        <div class="zerogrid">
            <div class="wrap-footer">
                <div class="row">
                    <div class="col-1-3 col-footer-1">
                        <div class="wrap-col">
                            <h3 class="widget-title">About Us</h3>
                            <p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Metus elit vehicula
                                dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la
                                udantium</p>
                        </div>
                    </div>
                    <div class="col-1-3 col-footer-2">
                        <div class="wrap-col">
                            <h3 class="widget-title">Recent Post</h3>
                            <ul>
                                <li><a href="#">MOST VISITED COUNTRIES</a></li>
                                <li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
                                <li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
                                <li><a href="#">STARTUP COMPANY’S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-1-3 col-footer-3">
                        <div class="wrap-col">
                            <h3 class="widget-title">Where to Find Us</h3>
                            <div class="row">
                                <address>
                                    <strong>AUBERGE LONDON</strong>
                                    <br>
                                    Ut wisi enim
                                    <br>
                                    Minim veniam 12345
                                    <br>
                                    Exerci Tation
                                </address><br>
                                <p>
                                    <strong>Opening Hours:</strong>
                                    <br>
                                    Mon - Fri: 9:00 - 21:00
                                    <br>
                                    Sat - Sun: 9:00 - 2:00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="bottom-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-vimeo"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
                <div class="copyright">
                    Copyright @ - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a>
                </div>
            </div>
        </div>
    </footer>

    </div>


    <!-- Owl Carusel JavaScript -->
    <script src="{{ asset('userView/owlcarousel/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-travel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                loop: true,
                items: 1,
                nav: true,
                navText: ['<i class="fa fa-chevron-left fa-2x"></i>',
                    '<i class="fa fa-chevron-right fa-2x"></i>'
                ],
                pagination: false
            });
        });
    </script>

</body>

</html>
