$(document).ready(function(){
	var inProgress = false;
	var startFrom = 6;
	var portion = 6;

	$(window).scroll(function(){
		if($(window).scrollTop() + $(window).height() >= $(document).height() && !inProgress) {
			$.ajax({
				method:'POST',
				data: {
						"startFrom":startFrom,
						"portion": portion,
						"_token": $('meta[name="csrf-token"]').attr('content')
						},
				beforeSend:function(){
					inProgress = true;}
			}).done(function(data) {
				data = JSON.parse(data);				
				if(data.length > 0) {
					$.each(data, function(index,data) {
						var date = moment(data.updated_at).locale('uk');
						var month = date.format('MMMM');
						var day = date.date();
						var newsSection = "<!-- news --><div class=\"col-md-10 col-lg-6 StoronnimV-news-section__news\"><div class=\"StoronnimV-news-section__news-content\"><img src=\"storage/images/"+ data.title_image +"\" alt=\"" + data.updated_at + "\" class=\"StoronnimV-news-section__news-image\"><div class=\"StoronnimV-news-section__text-div\"><div class=\"StoronnimV-news-section__wrap-main-text\"><a href=\"#\" class=\"StoronnimV-news-section__heading\">" + data.title + "</a><p class=\"StoronnimV-news-section__description\">" + data.content + "</p></div><div class=\"StoronnimV-news-section__news-footer\"><a href=\"#\" class=\"StoronnimV-news-section__like\">120</a><a href=\"#\" class=\"StoronnimV-news-section__read-more\">Дізнатися більше</a></div></div></div><div class=\"StoronnimV-news-section__news-date-div\"><span class=\"StoronnimV-news-section__month\">"+ month +"</span><span class=\"StoronnimV-news-section__day\">"+ day +"</span></div></div><!-- news -->";
						$(".row").append(newsSection);
					});
					inProgress = false;
					startFrom += portion;
				}});
		}
	});
});