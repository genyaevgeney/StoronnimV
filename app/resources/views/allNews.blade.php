<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	<meta name="csrf-token" content="{!! csrf_token() !!}">
	<title>Стороннім В</title>
	<link rel="shortcut icon" type="image/x-icon" href="fav/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/allNews.css') }}">
</head>
<body>
	<div id="topOfPage"></div>
	<!-- header start -->
	<header class="StoronnimV-header">
		<a class="StoronnimV-header__logo scroll-hide" href="#welcome">Стороннiм<span class="StoronnimV-header__space">В.</span></a>
		<div class="nav-menu scroll-hide">
			<div class="nav-icon">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<a href="#topOfPage" class="scroll-up scroll-hide"></a>
		<div class="full-menu">
			<div class="fullmenu-content">
				<ul class="page-menu">
					<li data-menuanchor="news"><a class="StoronnimV-header__effect-menu-link" href="img/html/news-page.html">Новини</a></li>
					<li data-menuanchor="music"><a class="StoronnimV-header__effect-menu-link" href="#music">Музика</a></li>
					<li data-menuanchor="media"><a class="StoronnimV-header__effect-menu-link" href="#media">Вiдео</a></li>
					<li data-menuanchor="welcome" class="page-menu__logo"><a class="StoronnimV-header__effect-menu-link" href="#welcome">Стороннiм<span class="page-menu__space">В.</span></a></li>
					<li data-menuanchor="about"><a class="StoronnimV-header__effect-menu-link" href="#about">Гурт</a></li>
					<li data-menuanchor="gallery"><a class="StoronnimV-header__effect-menu-link" href="#gallery">Галерея</a></li>
					<li data-menuanchor="contact"><a class="StoronnimV-header__effect-menu-link" href="#contact">Контакти</a></li> 
					<li class="social">
						<a target="_blank" href="https://soundcloud.com/apostolkremenchug"><img src="../icons/social/soundcloud.svg" alt=""></a>
						<a target="_blank" href="https://www.facebook.com/%D0%A1%D1%82%D0%BE%D1%80%D0%BE%D0%BD%D0%BD%D1%96%D0%BC-%D0%92-377358619512485/"><img src="../icons/social/facebook.svg" alt=""></a>
						<a target="_blank" href="https://www.youtube.com/"><img src="../icons/social/youtube.svg" alt=""></a>
						<a target="_blank" href="#"><img src="../icons/social/instagram.svg" alt=""></a>
					</li>
				</ul>
			</div>
			<a href="#0" class="modal-close"></a>
		</div>
		<div class="cd-transition-layer visible opening"> 
			<div class="bg-layer"></div>
		</div>
	</header>
	<!-- header end -->
	<div class="container StoronnimV-news">
		<div class="row">
			<h2 class="col-12 StoronnimV-news__page-title">Новини</h2>
			<!-- annoucement -->
			@if (! empty($announcement))
				<div class="col-md-10 col-lg-12 StoronnimV-news-section__news StoronnimV-news-section__announcement">
					<div class="StoronnimV-news-section__news-content">
						<img src="{{ asset("storage/images/$announcement->title_image") }}" alt="{{ $announcement->alt }}" class="StoronnimV-news-section__news-image">
						<div class="StoronnimV-news-section__text-div">
							<div class="StoronnimV-news-section__wrap-main-text">
								<a href="#" class="StoronnimV-news-section__heading">{{ $announcement->title }}</a>
								<p class="StoronnimV-news-section__description">{{ $announcement->content }}</p>
							</div>
							<div class="StoronnimV-news-section__news-footer">
								<a href="#" class="StoronnimV-news-section__like">120</a>
								<a href="{{ route('news', ['id' => $announcement->id,]) }}" class="StoronnimV-news-section__read-more">Дізнатися більше</a>
							</div>
						</div>
					</div>

					<div class="StoronnimV-news-section__news-date-div">
						<span class="StoronnimV-news-section__month">
							{{ Carbon\Carbon::parse($announcement->updated_at)->locale('uk')->isoFormat('MMM') }}
						</span>
						<span class="StoronnimV-news-section__day">
							{{ Carbon\Carbon::parse($announcement->updated_at)->format('d') }}
						</span>
				</div>
				</div>
			@endif
			<!-- announcement end -->

			<!-- news -->
			@foreach (json_decode($news) as $news)
			<div class="col-md-10 col-lg-6 StoronnimV-news-section__news">
				<div class="StoronnimV-news-section__news-content">
					<img src="{{ asset("storage/images/$news->title_image") }}" alt="{{ $news->alt }}" class="StoronnimV-news-section__news-image">
					<div class="StoronnimV-news-section__text-div">
						<div class="StoronnimV-news-section__wrap-main-text">
							<a href="#" class="StoronnimV-news-section__heading">{{ $news->title }}</a>
							<p class="StoronnimV-news-section__description">{{ $news->content }}</p>
						</div>
						<div class="StoronnimV-news-section__news-footer">
							<a href="#" class="StoronnimV-news-section__like">120</a>
							<a href="{{ route('news', ['id' => $news->id,]) }}" class="StoronnimV-news-section__read-more">Дізнатися більше</a>
						</div>
					</div>
				</div>

				<div class="StoronnimV-news-section__news-date-div">
					<span class="StoronnimV-news-section__month">
						{{ Carbon\Carbon::parse($news->updated_at)->locale('uk')->isoFormat('MMMM') }}
					</span>
					<span class="StoronnimV-news-section__day">
						{{ Carbon\Carbon::parse($news->updated_at)->format('d') }}
					</span>
				</div>
			</div>
			@endforeach
			<!-- news end-->		
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div style="width: 200px;" id="articles">
		
	</div>
	<button id="more">Далі</button>

	<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="{{ asset('js/menu-main.js') }}"></script>
	<script src="{{ asset('js/news-page.js') }}"></script>
	<script src="{{ asset('js/ajax-content.js') }}"></script>
	<script src="{{ asset('js/moment-with-locales.js') }}"></script>
</body>
</html>