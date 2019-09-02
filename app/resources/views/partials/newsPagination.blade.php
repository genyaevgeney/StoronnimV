<div class="StoronnimV-news__wrap-news">
	@foreach ($data as $datum)
		<div class="StoronnimV-news__news">
			<p class="StoronnimV-news__news-date">
			{{Carbon\Carbon::parse($datum->updated_at)->locale('uk')->
			isoFormat('d MMMM YYYY', 'Do MMMM')}}
			</p>
			<a href="{{ route('news', ['id' => $datum->id,]) }}" class="StoronnimV-news__news-heading">
			{{ $datum->title }}
			</a>
		</div>
	@endforeach
	{!! $data->links() !!}
</div>