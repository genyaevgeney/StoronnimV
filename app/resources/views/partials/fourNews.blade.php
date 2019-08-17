<div class="section StoronnimV-news-section">
	<div class="container">
		<div class="row StoronnimV-news-section__news-wrap">
			<!-- Дальше идут четыре новости -->
			@foreach($news as $news)
			<div class="col-md-10 col-lg-6 StoronnimV-news-section__news">
				<div class="StoronnimV-news-section__news-content">
					<img src="img/news2.jpg" alt="img" class="StoronnimV-news-section__news-image">
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
			</div>
			@endforeach
		</div>
	</div>
</div>