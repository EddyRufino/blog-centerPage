<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>@yield('meta-title', config('app.name') . " | Blog")</title>
  <meta name="description" content="@yield('meta-description', 'CenterPage Blog donde puedes encontrar información para resolver tus dudas.')">
	<link rel="stylesheet" href="/css/normalize.css">

	{{-- <link rel="stylesheet" href="/css/nav.css">
	<link rel="stylesheet" href="fonts.css"> --}}

	<link rel="stylesheet" href="/css/framework.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

	@stack('styles')
	
	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="e98b3941-6bdc-4b76-8d11-64b9bce8ac99";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

</head>
<body>
	<div class="patter">
	<div class="hacer-espacio"></div>
	{{-- <header class="space-inter"> --}}
		{{-- <div class="container container-flex space-between"> --}}
			{{-- <figure class="logo"><img src="/img/logo.png" alt=""></figure> --}}
			{{-- <h2><a style="color: black" href="/">CenterPage</a></h2> --}}

      @include('partials.nav')

		{{-- </div>
    </header> --}}

    {{-- Cotenido --}}
    @yield('content')

		<footer class="bg-white text-black-50 text-center py-3 shadow">
			{{ config('app.name') }} | Copyright @ {{ date('Y') }}
	</footer>
	{{-- <section class="footer">
		<footer>
			<div class="container">
				<figure class="logo"><img src="/img/logo.png" alt=""></figure>
				<nav>
					<ul class="container-flex space-center list-unstyled">
						<li>
              <a href="/" class="text-uppercase c-white">home
              </a>
            </li>

						<li>
              <a href="about.html" class="text-uppercase c-white">about
              </a>
            </li>

						<li>
              <a href="archive.html" class="text-uppercase c-white">archive
              </a>
            </li>

						<li>
              <a href="contact.html" class="text-uppercase c-white">contact
              </a>
            </li>
					</ul>
				</nav>
				<div class="divider-2"></div>
				<p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</p>
				<div class="divider-2" style="width: 80%;"></div>
				<p>© 2017 - Zendero. All Rights Reserved. Designed & Developed by <span class="c-white">Agencia De La Web</span></p>
				<ul class="social-media-footer list-unstyled">
					<li><a href="#" class="fb"></a></li>
					<li><a href="#" class="tw"></a></li>
					<li><a href="#" class="in"></a></li>
					<li><a href="#" class="pn"></a></li>
				</ul>
			</div>
		</footer>
	</section> --}}
</div>

	@stack('scripts')
	
	{{-- <script src="http://code.jquery.com/jquery-latest.js"></script> --}}
	<script src="{{ asset('js/app.js') }}"></script>
{{-- 
<script>
$(document).ready(main);
 
 var contador = 1;
	
 function main () {
	 $('.menu_bar').click(function(){
		 if (contador == 1) {
			 $('nav').animate({
				 left: '0'
			 });
			 contador = 0;
		 } else {
			 contador = 1;
			 $('nav').animate({
				 left: '-100%'
			 });
		 }
	 });
	
	 // Mostramos y ocultamos submenus
	 $('.submenu').click(function(){
		 $(this).children('.children').slideToggle();
	 });
 }
	</script> --}}

</body>
</html>
