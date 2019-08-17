<div class="section StoronnimV-news-section">
	<div class="container">
		<div class="row StoronnimV-news-section__news-wrap">
			<!-- Анонс начинается здесь -->
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
								<a href="#" class="StoronnimV-news-section__read-more">Дізнатися більше</a>
							</div>
						</div>
					</div>

					<div class="StoronnimV-news-section__news-date-div">
						<span class="StoronnimV-news-section__month">
							{{ Carbon\Carbon::parse($announcement->updated_at)->locale('uk')->isoFormat('MMMM') }}
						</span>
						<span class="StoronnimV-news-section__day">
							{{ Carbon\Carbon::parse($announcement->updated_at)->format('d') }}
						</span>
				</div>
				</div>
			<!-- Дальше идут две новости -->
			@foreach($news as $news)
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
				<!-- <div class="col-md-10 col-lg-6 StoronnimV-news-section__news">
					<div class="StoronnimV-news-section__news-content">
						<img src="{{ asset("$news->imgPath") }}" alt="{{ $news->alt }}" class="StoronnimV-news-section__news-image">
						<div class="StoronnimV-news-section__text-div">
							<div class="StoronnimV-news-section__wrap-main-text">
								<a href="#" class="StoronnimV-news-section__heading">{{ $news->title }}</a>
								<p class="StoronnimV-news-section__description">{{ $news->content }}</p>
							</div>
							<div class="StoronnimV-news-section__news-footer">
								<a href="#" class="StoronnimV-news-section__like">{{ Carbon\Carbon::parse($news->updated_at)->format('M') }}</a>
								<a href="#" class="StoronnimV-news-section__read-more">{{ Carbon\Carbon::parse($news->updated_at)->format('d') }}</a>
							</div>
						</div>
					</div>
				</div>

				<div class="StoronnimV-news-section__news-date-div">
					<span class="StoronnimV-news-section__month">ИЮН</span>
					<span class="StoronnimV-news-section__day">12</span>
				</div> -->
			@endforeach
		</div>
	</div>
</div>