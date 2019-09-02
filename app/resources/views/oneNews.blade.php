<!--<div class="col-md-10 col-lg-6 StoronnimV-news-section__news">
	<div class="StoronnimV-news-section__news-content">
		<img src="{{ asset("storage/images/$news->title_image") }}" alt="{{ $news->alt }}" class="StoronnimV-news-section__news-image">
		<div class="StoronnimV-news-section__text-div">
			<div class="StoronnimV-news-section__wrap-main-text">
				<a href="#" class="StoronnimV-news-section__heading">{{ $news->title }}</a>
				<p class="StoronnimV-news-section__description">{{ $news->content }}</p>
			</div>
			<div class="StoronnimV-news-section__news-footer">
				<a href="#" class="StoronnimV-news-section__like">120</a>
				<a href="#" class="StoronnimV-news-section__read-more">Дізнатися більше</a>
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
</div>-->
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
	<link rel="stylesheet" href="{{ asset('css/oneNews.css') }}">
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
	<div class="container-fluid StoronnimV-news__container-fluid">
		<img src="../news1.jpg" alt="img" class="StoronnimV-news__main-image">
		<div class="container StoronnimV-news__container-for-heading">
			<div class="row StoronnimV-news__row-for-heading">
				<div class="col">
					<span class="StoronnimV-news__heading">
						{{ $news->title }} Назва новини Назва новини Назва новини Назва новини Назва новини 
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-8 StoronnimV-news__section-main-content">
				<div class="StoronnimV-news__wrap-share-and-like">
					<a href="#" class="StoronnimV-news__like">
						120
					</a>
					<div class="StoronnimV-news__wrap-share">
						<span class="StoronnimV-news__share">Поделиться</span>
						<ul class="StoronnimV-news__share-list">
							<li class="StoronnimV-news__share-list-item">
								<a href="#" class="StoronnimV-news__share-link link-facebook" target="_blank">
									<img class="StoronnimV-news__share-link-img" src="../icons/facebook-letter.svg" alt="icon">
								</a>
							</li>
							<li class="StoronnimV-news__share-list-item">
								<a href="#" class="StoronnimV-news__share-link link-facebook" target="_blank">
									<img class="StoronnimV-news__share-link-img" src="../icons/facebook-letter.svg" alt="icon">
								</a>
							</li>
							<li class="StoronnimV-news__share-list-item">
								<a href="#" class="StoronnimV-news__share-link link-facebook" target="_blank">
									<img class="StoronnimV-news__share-link-img" src="../icons/facebook-letter.svg" alt="icon">
								</a>
							</li>
							<li class="StoronnimV-news__share-list-item">
								<a href="#" class="StoronnimV-news__share-link link-facebook" target="_blank">
									<img class="StoronnimV-news__share-link-img" src="../icons/facebook-letter.svg" alt="icon">
								</a>
							</li>
							<li class="StoronnimV-news__share-list-item">
								<a href="#" class="StoronnimV-news__share-link link-facebook" target="_blank">
									<img class="StoronnimV-news__share-link-img" src="../icons/facebook-letter.svg" alt="icon">
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="StoronnimV-news__main-content">
					<p class="StoronnimV-news__main-text">{{ $news->content }} <!--текст основної новини--> </p>
				</div>
				<div class="StoronnimV-news__wrap-next-prev-news middle-news">
					@foreach ($previousNews as $news)
						<a href="{{ route('news', ['id' => $news->id,]) }}" class="StoronnimV-news__btn-prev-news"><span class="StoronnimV-news__link-text">{{ $news->title }}<!--заголовок попередньої новини--></span></a>
					@endforeach
					@foreach ($nextNews as $news)
						<a href="{{ route('news', ['id' => $news->id,]) }}" class="StoronnimV-news__btn-next-news"><span class="StoronnimV-news__link-text">{{ $news->title }} <!--заголовок наступної новини--> </span></a>
					@endforeach
				</div>
			</div>
			<div class="col-4 StoronnimV-news__section-latest-news">
				<p class="StoronnimV-news__name-of-section">ОСТАННІ НОВИНИ</p>
				<div id="pagination_section">
					@include('partials.newsPagination')
				</div>
				<!--
				<div class="StoronnimV-news__news-pagination-btns StoronnimV-news__pagination-last-list">
					<a href="#" id="previousButton" class="StoronnimV-news__btn-previous pagination-btn pagination">
						НАЗАД
					</a>
					<p id="paginationCounter" class="StoronnimV-news__pagination-counter pagination">
						{{----}} з {{----}}
					</p>
					<a href="#" id="nextButton" class="StoronnimV-news__btn-next pagination-btn pagination">
						ДАЛІ
					</a>
				</div>
				-->
			</div>
		</div>
	</div>







	<br><br>
	<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="{{ asset('js/menu-main.js') }}"></script>
	<script src="{{ asset('js/nav-on-page.js') }}"></script>
	<script src="{{ asset('js/news.js') }}"></script>
	<!-- <script src="{{ asset('js/pagination.js') }}"></script> -->
</body>
</html>