@extends('layouts.header')
@section('content')
<main class="main-content position-relative  mt-1 border-radius-lg ">
    <div class="container py-4">
		<!--////////////////////////////////////Container-->
		<section id="container" class="zerogrid">
			<div class="wrap-container">
				<!-----------------Content-Box-------------------->
				<article class="single-post">
					<div class="row wrap-post"><!--Start Box-->
						<div class="entry-header">
							<span class="time">June 8, 2016</span>
							<h1 class="entry-title">{{ $post->name}}</h1>
							<span class="cat-links"><a href="#">{{$user}}</a>, <a href="#">{{$categoria}}</a></span>
						</div>
						<div class="subtitle mx-auto" style="width:80%;">
							{!! $post->subtitulo!!}
						</div>
						
						<div class="post-thumbnail-wrap mx-auto">
							<img src="{{ asset('portadas/'.$post->image->url) }}" >
						</div>
						<div class="entry-content">
							{!! $post->body!!}
						</div>
					</div>
					<div class="row">
						<div class="col-sm-5 mx-auto text-center">
							<a href="/post/{{$post->id}}/edit" class="btn bg-gradient-dark w-auto me-1 mb-0">Editar Articulo</a>
						</div>
					</div>

				</article>
					
			</div>
		</section>		
	</div>
	
	<!-- Owl Carusel JavaScript -->
	<script src="{{asset('userView/owlcarousel/owl.carousel.js')}}"></script>
	<script>
	$(document).ready(function() {
	  $("#owl-travel").owlCarousel({
		autoplay:true,
		autoplayTimeout:3000,
		loop:true,
		items : 1,
		nav:true,
		navText: ['<i class="fa fa-chevron-left fa-2x"></i>', '<i class="fa fa-chevron-right fa-2x"></i>'],
		pagination:false
	  });
	});
	</script>
	
@endsection 

</body>