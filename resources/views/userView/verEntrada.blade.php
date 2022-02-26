@include('userView.layouts.header')

<section class="container-fluid">
    <div class="wrap-body">
        @include('userView.layouts.barra')
    </div>
</section>

<!--////////////////////////////////////Container-->
<section id="container" class="zerogrid">
    <div class="wrap-container">
        <!-----------------Content-Box-------------------->
        <article class="single-post">
            <div class="row wrap-post">
                <!--Start Box-->
                <div class="entry-header">
                    <span class="time">June 8, 2016</span>
                    <h1 class="entry-title">{{ $post->name }}</h1>
                    <span class="cat-links"><a href="#">{{ $user }}</a>, <a
                            href="#">{{ $categoria }}</a></span>
                </div>
                <div class="subtitle">
                    {!! $post->subtitulo !!}
                </div>
                <div class="post-thumbnail-wrap">
                    <img src="{{ asset('portadas/' . $post->image->url) }}">
                </div>
                <div class="entry-content">
                    {!! $post->body !!}
                </div>
            </div>
        </article>
		<h2 class="text-center mb-4" style="margin-bottom:2rem; text-align:center;">Articulos Relacionados</h2>
		
		<div class="row wrap-box">
			<!--Start Box-->
			@foreach ($articulos as $articulo)
			<div class="col-1-3">
				<a class="card" href="/post/{{ $articulo->id }}?ruta=web" style="min-height: 11rem !important;s">
					<div class="card-header" style="height:5rem;">
						<h2 class="title text-center" style="font-size:1.5rem;">{{ $articulo->name }}</h2>
					</div>
					<div class="card-body text-center" style="height: 5rem;"> 
						<p>{{ $articulo->subtitulo }}</p>
					</div>
				</a>
				<hr style="width: 90%;">
			</div>
            @endforeach
			
		</div>
        

        <div class="comments-are">
            <div id="comment">
                <h3>Leave a Reply</h3>
                <span>Your email address will not be published. Required fields are marked </span>
                <form name="form1" id="comment_form" method="post" action="">
                    <label>
                        <span>Comment:</span>
                        <textarea name="message" id="message"></textarea>
                    </label>
                    <label>
                        <span>Name:</span>
                        <input type="text" name="name" id="name" required>
                    </label>
                    <label>
                        <span>Email:</span>
                        <input type="email" name="email" id="email" required>
                    </label>
                    <center><input class="button button-skin " type="submit" name="SubmitComment" value="Submit">
                    </center>
                </form>
            </div>
        </div>
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
