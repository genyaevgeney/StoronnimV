<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	<title>Стороннім В</title>
	<link rel="shortcut icon" type="image/x-icon" href="fav/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- 	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet"> -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	
</head>
<body>

<div id="preloader">
	<div class="wrapper">
		<div class="box-wrap">
			<div class="box one"></div>
			<div class="box two"></div>
			<div class="box three"></div>
			<div class="box four"></div>
			<div class="box five"></div>
			<div class="box six"></div>
		</div>
	</div>
</div>
<div class="cursor"></div><header class="StoronnimV-header">
	<div class="container">
		<nav class="StoronnimV-header__nav">
			<ul id="menu" class="StoronnimV-header__list">
				<li data-menuanchor="news" class="StoronnimV-header__list-item"><a id="test" class="StoronnimV-header__item-link" href="#news">Новини</a></li>
				<li data-menuanchor="music" class="StoronnimV-header__list-item"><a class="StoronnimV-header__item-link" href="#music">Музика</a></li>
				<li data-menuanchor="media" class="StoronnimV-header__list-item"><a class="StoronnimV-header__item-link" href="#media">Вiдео</a></li>
				<li data-menuanchor="welcome" class="StoronnimV-header__list-item StoronnimV-header__logo-wrap"><a class="StoronnimV-header__logo" href="#welcome">Стороннiм<span class="StoronnimV-header__space">В.</span></a></li>
				<li data-menuanchor="about" class="StoronnimV-header__list-item"><a class="StoronnimV-header__item-link" href="#about">Гурт</a></li>
				<li data-menuanchor="gallery" class="StoronnimV-header__list-item"><a class="StoronnimV-header__item-link" href="#gallery">Галерея</a></li>
				<li data-menuanchor="contact" class="StoronnimV-header__list-item"><a class="StoronnimV-header__item-link" href="#contact">Контакти</a></li>
			</ul>
		</nav>
	</div>



	<div class="nav-menu">
		<div class="nav-icon">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="full-menu">
		<div class="fullmenu-content">
			<ul class="page-menu">
				<li data-menuanchor="news"><a class="StoronnimV-header__effect-menu-link" href="#news">Новини</a></li>
				<li data-menuanchor="music"><a class="StoronnimV-header__effect-menu-link" href="#music">Музика</a></li>
				<li data-menuanchor="media"><a class="StoronnimV-header__effect-menu-link" href="#media">Вiдео</a></li>
				<li data-menuanchor="welcome" class="page-menu__logo"><a class="StoronnimV-header__effect-menu-link" href="#welcome">Стороннiм<span class="page-menu__space">В.</span></a></li>
				<li data-menuanchor="about"><a class="StoronnimV-header__effect-menu-link" href="#about">Гурт</a></li>
				<li data-menuanchor="gallery"><a class="StoronnimV-header__effect-menu-link" href="#gallery">Галерея</a></li>
				<li data-menuanchor="contact"><a class="StoronnimV-header__effect-menu-link" href="#contact">Контакти</a></li> 
				<li class="social">
					<a target="_blank" href="https://soundcloud.com/apostolkremenchug"><img src="{{ asset('img/icons/social/soundcloud.svg') }}" alt=""></a>
					<a target="_blank" href="https://www.facebook.com/%D0%A1%D1%82%D0%BE%D1%80%D0%BE%D0%BD%D0%BD%D1%96%D0%BC-%D0%92-377358619512485/"><img src="{{ asset('img/icons/social/facebook.svg') }}" alt=""></a>
					<a target="_blank" href="https://www.youtube.com/"><img src="{{ asset('img/icons/social/youtube.svg') }}" alt=""></a>
					<a target="_blank" href="#"><img src="{{ asset('img/icons/social/instagram.svg') }}" alt=""></a>
				</li>
			</ul>
		</div>
		<a href="#0" class="modal-close"></a>
	</div>
	<div class="cd-transition-layer visible opening"> 
		<div class="bg-layer"></div>
	</div>
</header><!-- <div class="testpage">
</div> -->

<div id="fullpage">

	<div class="section StoronnimV-welcome-section">
		<div id="video" data-vide-bg="img/video/background">
			<!-- <div class="StoronnimV-welcome-section__wrap-block"> -->
				<a class="StoronnimV-welcome-section__logo" href="#welcome">Стороннiм<span class="StoronnimV-welcome-section__space-beetwen-logo">В.</span>
				</a>
				<div class="StoronnimV-welcome-section__scroll-div"><span class="StoronnimV-welcome-section__scroll-text">Перейти далі</span></div>
				<!-- </div> -->
			</div>
		</div>

		<div class="main-page section StoronnimV-about-section">	
			<div class="StoronnimV-about-section__overlay"></div>
			<div id="canvas"></div>
			<div id="fullwidth-image">
				<img alt="main img with visual effect" data-sampler="displacedImage" src="{{ asset('img/about.jpg') }}" />
				<div class="container">
					<div class="row StoronnimV-about-section__row">
						<div class="col-12 StoronnimV-about-section__head">
							<p class="StoronnimV-about-section__heading">ПРО ГУРТ</p>
						</div>
						<div class="col-12 StoronnimV-about-section__fluid">
							<p class="StoronnimV-about-section__name">СТОРОННІМ В</p>
							<p class="StoronnimV-about-section__content">Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. Історія груту історія гурту історія гурту. </p>
						</div>

					</div>
				</div>
			</div>
	<!-- 	<br>
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br> -->
		Hi there
	</div>
	<!-- News section starts here -->
	@if (! empty($announcement))
		@include ('partials.announceAndNews')
	@else
		@include ('partials.fourNews')
	@endif
	<!-- News section ends here -->
	<section class="section StoronnimV-music-section">
		<div class="container">
			<div class="row StoronnimV-music-section__row">
				<div class="col-lg-12 StoronnimV-music-section__col-head">
					<h2 class="StoronnimV-music-section__heading">МУЗИКА</h2>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-music-section__col">
					<div class="StoronnimV-music-section__title"><span class="StoronnimV-music-section__name-of-albom">АЛЬБОМ АЛЬБОМ</span></div>
					<div class="StoronnimV-music-section__date"><span class="StoronnimV-music-section__name-of-song">ПІСНЯ ПІСНЯ</span></div>
					<a href="#" class="StoronnimV-music-section__listen">Слухати</a>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-music-section__col">
					<div class="StoronnimV-music-section__title"><span class="StoronnimV-music-section__name-of-albom">АЛЬБОМ АЛЬБОМ</span></div>
					<div class="StoronnimV-music-section__date"><span class="StoronnimV-music-section__name-of-song">ПІСНЯ ПІСНЯ</span></div>
					<a href="#" class="StoronnimV-music-section__listen">Слухати</a>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-music-section__col">
					<div class="StoronnimV-music-section__title"><span class="StoronnimV-music-section__name-of-albom">АЛЬБОМ АЛЬБОМ</span></div>
					<div class="StoronnimV-music-section__date"><span class="StoronnimV-music-section__name-of-song">ПІСНЯ ПІСНЯ</span></div>
					<a href="#" class="StoronnimV-music-section__listen">Слухати</a>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-music-section__col">
					<div class="StoronnimV-music-section__title"><span class="StoronnimV-music-section__name-of-albom">АЛЬБОМ АЛЬБОМ</span></div>
					<div class="StoronnimV-music-section__date"><span class="StoronnimV-music-section__name-of-song">ПІСНЯ ПІСНЯ</span></div>
					<a href="#" class="StoronnimV-music-section__listen">Слухати</a>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-music-section__col">
					<div class="StoronnimV-music-section__title"><span class="StoronnimV-music-section__name-of-albom">АЛЬБОМ АЛЬБОМ</span></div>
					<div class="StoronnimV-music-section__date"><span class="StoronnimV-music-section__name-of-song">ПІСНЯ ПІСНЯ</span></div>
					<a href="#" class="StoronnimV-music-section__listen">Слухати</a>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-music-section__col">
					<div class="StoronnimV-music-section__title"><span class="StoronnimV-music-section__name-of-albom">АЛЬБОМ АЛЬБОМ</span></div>
					<div class="StoronnimV-music-section__date"><span class="StoronnimV-music-section__name-of-song">ПІСНЯ ПІСНЯ</span></div>
					<a href="#" class="StoronnimV-music-section__listen">Слухати</a>
				</div>
			</div>
		</div>
	</section>
	<div class="section StoronnimV-video-section">
		<div class="container">
			<div class="row StoronnimV-video-section__row">
				<div class="col-lg-12 StoronnimV-video-section__col-head">
					<h2 class="StoronnimV-video-section__heading">ВІДЕО</h2>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-video-section__col">
					<div class="StoronnimV-video-section__title"><span class="StoronnimV-video-section__name-of-video">ВІДЕО ГУРТУ ВІДЕО</span></div>
					<a href="#" class="StoronnimV-video-section__watch">Дивитися</a>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-video-section__col">
					<div class="StoronnimV-video-section__title"><span class="StoronnimV-video-section__name-of-video">ВІДЕО ГУРТУ ВІДЕО</span></div>
					<a href="#" class="StoronnimV-video-section__watch">Дивитися</a>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-video-section__col">
					<div class="StoronnimV-video-section__title"><span class="StoronnimV-video-section__name-of-video">ВІДЕО ГУРТУ ВІДЕО</span></div>
					<a href="#" class="StoronnimV-video-section__watch">Дивитися</a>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-video-section__col">
					<div class="StoronnimV-video-section__title"><span class="StoronnimV-video-section__name-of-video">ВІДЕО ГУРТУ ВІДЕО</span></div>
					<a href="#" class="StoronnimV-video-section__watch">Дивитися</a>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-video-section__col">
					<div class="StoronnimV-video-section__title"><span class="StoronnimV-video-section__name-of-video">ВІДЕО ГУРТУ ВІДЕО</span></div>
					<a href="#" class="StoronnimV-video-section__watch">Дивитися</a>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-video-section__col">
					<div class="StoronnimV-video-section__title"><span class="StoronnimV-video-section__name-of-video">ВІДЕО ГУРТУ ВІДЕО</span></div>
					<a href="#" class="StoronnimV-video-section__watch">Дивитися</a>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-video-section__col">
					<div class="StoronnimV-video-section__title"><span class="StoronnimV-video-section__name-of-video">ВІДЕО ГУРТУ ВІДЕО</span></div>
					<a href="#" class="StoronnimV-video-section__watch">Дивитися</a>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-video-section__col">
					<div class="StoronnimV-video-section__title"><span class="StoronnimV-video-section__name-of-video">ВІДЕО ГУРТУ ВІДЕО</span></div>
					<a href="#" class="StoronnimV-video-section__watch">Дивитися</a>
				</div>
				<div class="col-md-6 col-lg-4 StoronnimV-video-section__col">
					<div class="StoronnimV-video-section__title"><span class="StoronnimV-video-section__name-of-video">ВІДЕО ГУРТУ ВІДЕО</span></div>
					<a href="#" class="StoronnimV-video-section__watch">Дивитися</a>
				</div>
			</div>
		</div>
	</div>
	<div class="section StoronnimV-gallery-section">
		<div class="slide" data-anchor="slide1">
			<div class="container">
				<div class="row StoronnimV-gallery-section__row">
					<h2 class="col-12 StoronnimV-gallery-section__head">ГАЛЕРЕЯ</h2>
					<a href="#" class="col-12 StoronnimV-gallery-section__img-wrapper">СТОРОННІМ В</a>
				</div>
			</div>
		</div>
		<div class="slide" data-anchor="slide2"><div class="container">
			<div class="row StoronnimV-gallery-section__row">
				<h2 class="col-12 StoronnimV-gallery-section__head">ГАЛЕРЕЯ</h2>
				<a href="#" class="col-12 StoronnimV-gallery-section__img-wrapper">СТОРОННІМ В</a>
			</div>
		</div></div>
		<div class="slide" data-anchor="slide3"><div class="container">
			<div class="row StoronnimV-gallery-section__row">
				<h2 class="col-12 StoronnimV-gallery-section__head">ГАЛЕРЕЯ</h2>
				<a href="#" class="col-12 StoronnimV-gallery-section__img-wrapper">СТОРОННІМ В</a>
			</div>
		</div></div>
		<div class="slide" data-anchor="slide4"><div class="container">
			<div class="row StoronnimV-gallery-section__row">
				<h2 class="col-12 StoronnimV-gallery-section__head">ГАЛЕРЕЯ</h2>
				<a href="#" class="col-12 StoronnimV-gallery-section__img-wrapper">СТОРОННІМ В</a>
			</div>
		</div></div>
	</div>
	<div class="section StoronnimV-contact-section">
		<footer class="StoronnimV-contact-section__footer">
			<div class="container-fluid StoronnimV-contact-section__container-fluid">
				<span class="StoronnimV-contact-section__copyright">© 2019 Company. All right reserved.</span>
				<span class="StoronnimV-contact-section__name">Стороннім В</span>
				<ul class="StoronnimV-contact-section__list">
					<li class="StoronnimV-contact-section__list-item"><a target="_blank" href="https://soundcloud.com/apostolkremenchug"><img src="{{ asset('img/icons/soundcloud.svg') }}" alt=""></a></li> 
					<li class="StoronnimV-contact-section__list-item"><a target="_blank" href="https://www.facebook.com/%D0%A1%D1%82%D0%BE%D1%80%D0%BE%D0%BD%D0%BD%D1%96%D0%BC-%D0%92-377358619512485/"><img src="{{ asset('img/icons/facebook.svg') }}" alt=""></a></li>
					<li class="StoronnimV-contact-section__list-item"><a target="_blank" href="https://www.youtube.com/"><img src="{{ asset('img/icons/youtube.svg') }}" alt=""></a></li>
					<li class="StoronnimV-contact-section__list-item"><a target="_blank" href="#"><img src="{{ asset('img/icons/social/telegram.svg') }}" alt=""></a></li>
				</ul>
			</div>
		</footer>
		<div id="map"></div>
		<div class="container StoronnimV-contact-section__container">
			<div class="row StoronnimV-contact-section__row">
				<div class="col-md-12 col-lg-8 StoronnimV-contact-section__col">
					<p class="StoronnimV-contact-section__head">Зв'яжіться з нами</p>
					<form method="post" action="{{ route('saveMessage') }}" class="StoronnimV-contact-section__form">
						@csrf
						<input type="email" class="StoronnimV-contact-section__email" name="email" required placeholder="Ваша пошта ...">
						<textarea class="StoronnimV-contact-section__textarea" name="message" required placeholder="Повідомлення ..."></textarea>
						<input type="submit" class="StoronnimV-contact-section__btn" value="Відправити">
					</form>
				</div>
			</div>
		</div>
	</div>






















<!-- <section class="main-page">
	<header class="main-page__header">
		<div class="container">
			<nav class="main-page__nav">
				<ul class="main-page__list">
					<li class="main-page__list-item"><a class="main-page__item-link" href="">Новини</a></li>
					<li class="main-page__list-item"><a class="main-page__item-link" href="">Музика</a></li>
					<li class="main-page__list-item"><a class="main-page__item-link" href="">Відео</a></li>
					<li class="main-page__list-item main-page__logo-wrap"><a class="main-page__logo" href="">Стороннім В.</a></li>
					<li class="main-page__list-item"><a class="main-page__item-link" href="">Гурт</a></li>
					<li class="main-page__list-item"><a class="main-page__item-link" href="">Галерея</a></li>
					<li class="main-page__list-item"><a class="main-page__item-link" href="">Контакти</a></li>
				</ul>
			</nav>
		</div>
	</header>
</section> -->
 
	
<!-- 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="{{ asset('js/preloader.js') }}"></script>
<script src="{{ asset('js/cursor.js') }}"></script>
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/jquery.vide.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset('js/fullpage.js') }}"></script>
<script id="mouse-displacement-vs" type="x-shader/x-vertex">
	#ifdef GL_ES
	precision mediump float;
	#endif

	// default mandatory variables
	attribute vec3 aVertexPosition;
	attribute vec2 aTextureCoord;

	uniform mat4 uMVMatrix;
	uniform mat4 uPMatrix;

	// custom variables
	varying vec3 vVertexPosition;
	varying vec2 vTextureCoord;

	varying vec2 vDistortionEffect;

	// custom uniforms
	uniform vec2 uMousePosition;

	void main() {
	vec3 vertexPosition = aVertexPosition;

	gl_Position = uPMatrix * uMVMatrix * vec4(vertexPosition, 1.0);

	// varyings
	vTextureCoord = aTextureCoord;
	vVertexPosition = vertexPosition;

	vDistortionEffect = uMousePosition - vec2(vertexPosition.x, vertexPosition.y);
}
</script>
<script id="mouse-displacement-fs" type="x-shader/x-fragment">
	#ifdef GL_ES
	precision mediump float;
	#endif

	varying vec2 vTextureCoord;
	varying vec2 vDistortionEffect;

	// custom uniforms
	uniform float uDisplacementStrength;

	// our textures samplers
	uniform sampler2D displacedImage;
	uniform sampler2D canvasTexture;

	void main( void ) {
	// our texture coords
	vec2 textureCoords = vTextureCoord;

	// get our canvas texture
	vec4 mouseEffect = texture2D(canvasTexture, textureCoords);

	// apply displacement to the texture coords based on our canvas texture RGB
	textureCoords  = textureCoords + mouseEffect .r * vDistortionEffect * (uDisplacementStrength / 10.0);

	// get our image texture
	vec4 finalColor = texture2D(displacedImage, textureCoords);

	// get a B&W version of our image texture
	vec4 finalBW = vec4(1.0);
	finalBW.rgb = vec3(finalColor.r * 0.3 + finalColor.g * 0.59 + finalColor.b * 0.11);

	// mix both texture based on our canvas texture
	finalColor = mix(finalColor, finalBW, mouseEffect.r);

	// that's all folks!
	gl_FragColor = finalColor;
}
</script>
<script src='https://cdn.rawgit.com/martinlaxenaire/curtainsjs/master/build/curtains.min.js'></script>
<script src="{{ asset('js/header-hover-effect.js') }}"></script>
<script src="{{ asset('js/menu-main.js') }}"></script>
<script src="{{ asset('js/mouse-effect-on-img.js') }}"></script>
<!-- <script src="js/jq-padding-hack.js"></script> -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/google-map.js') }}"></script>
<!-- <script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUJrqcHyekFRTYOpij3N37tVc2QPEG1Zg&callback=initMap">
</script> -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7hebjuc07YFys_Ok9ZAaPiZ_j5M4MrhY&callback=initMap">
</script>
</body>
</html>