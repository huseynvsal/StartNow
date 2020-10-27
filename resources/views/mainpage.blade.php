@extends('main_index')
@section('main')
<div class="welcome_page" id="about">
	<div class="motivation_pics">
		<div class="main_mot_pic">
			<img src="{{asset('startnow/logos/mma.jfif')}}">
		</div>
		<div class="small_mot_pics">
			<div class="bordered"><img src="{{asset('startnow/logos/mma.jfif')}}"></div>
			<div class="bordered"><img src="{{asset('startnow/logos/crossfit.jpeg')}}"></div>
			<div class="bordered"><img src="{{asset('startnow/logos/gym.jpeg')}}"></div>
		</div>
	</div>
	<div class="welcome_message">
		<p class="welcome">Haqqımızda</p>
		<h2 class="welcome_zaltap">ZalTap.az <span> Saytına <br></span> Xoş Gəlmİsİnİz</h2>
		<p class="welcome_about">İş, imtahan və digər stresslərdən qurtulub mental cəhətdən sakitləşmək və fiziki cəhətdən güclənmək üçün ən mükəmməl yol idman etməkdir. Zal tap kamandası olaraq məqsədimiz sizə, ən uyğun idman növünü və bu idman növü üzrə ən əlverişli idman zalını tapmaqda kömək etməkdir. Bunun yanında hər həftə saytımızda keçirilən sorğu əsasında sponsorlarımız tərəfindən sizə uyğun olan zalda endirim əldə etmək şansınız var.</p>
		<button class="welcome_btn"><a href="/halls">Elə indi tap</a></button>
	</div>
</div>
<div class="start_now">
    <p class="sml_header">İdmanın Faydaları</p>
	<h2 class="big_header">Elə <span>İndİ</span> başlayın</h2>
</div>
<div class="short_contexts">
	<div class="contexts">
		<div class="rotating">
			<i class="fa fa-heartbeat"></i>
		</div>
		<h3 class="context_headers">Sağlam yaşayın</h3>
		<p class="context">İdman sizi hər iki – həm fiziki, həm mental cəhətdən inkişaf etdirmə qabiliyyətinə malikdir. Fiziki fəaliyyətinizi yaxşılaşdırır, ürək xəstəliyi riskini azaldır, ağciyərlərinizi genişləndirir, yüksək qan təzyiqi riskini azaldır və s.</p>
	</div>
	<div class="contexts">
		<div class="rotating">
			<i class="fa fa-check"></i>
		</div>
		<h3 class="context_headers">ÖzGüvənİnİzİ artırın</h3>
		<p class="context">İdman düşündüyünüz kimi sadece fiziki güc qazandımaqdan ibarət deyil. Növündən asılı olmayaraq hər hansı bir idman növündə qazandığınız uğur sizin özgüvəninizi artırır və digərlərindən daha üstün olduğunuza inandırır.</p>
	</div>
	<div class="contexts">
		<div class="rotating">
			<i class="fa fa-balance-scale"></i>
		</div>
		<h3 class="context_headers">Balansınızı qoruyun</h3>
		<p class="context">Tədqiqatlar göstərir ki, boş zamanlarınızda film izləmək və ya kitab oxumaq yerinə idmanla məşğul olmaq nəinki sizi mental cəhətdən rahatlaşdırır, eyni zamanda işinizdə daha məhsuldar olmağa kömək göstərir.</p>
	</div>
	<div class="contexts">
		<div class="rotating">
			<i class="fa fa-users"></i>
		</div>
		<h3 class="context_headers">Yenİ İnsanlar tanıyın</h3>
		<p class="context">Yeni insanlar tanımaq və yeni dostluqlar qurmaq üçün ən mükəmməl yerlərdən biridir idman zalları. Dostluq döyüşü zamanı birlikdə keçirdiyiniz aqresiya və gülməli anlar unudulmaz xatirələrdir.</p>
	</div>
</div>
<div class="secondary_carousel">
	<div class="secondary_carousel_header">
		<p class="sml_header">İdman növlərİ</p>
		<h2 class="second_big_header">Ən məhşur <br><span>İdman</span> növlərİ</h2>
		<p class="second_context">Özünüzə ən uyğun bildiyiniz idman növünü seçin</p>
	</div>
	<div class="s_sliders">
		<a href="/halls/mma" class="slider_links"><div class="s_slider"><img src="{{asset('startnow/logos/mma_2.jfif')}}"><h3 class="s_slider_h3">mma</h3></div></a>
		<a href="/halls/boks" class="slider_links"><div class="s_slider"><img src="{{asset('startnow/logos/boxing.jfif')}}"><h3 class="s_slider_h3">boks</h3></div></a>
		<a href="/halls/güləş" class="slider_links"><div class="s_slider"><img src="{{asset('startnow/logos/wrestling.jfif')}}"><h3 class="s_slider_h3">güləş</h3></div></a>
		<a href="/halls/fitness" class="slider_links"><div class="s_slider"><img src="{{asset('startnow/logos/fitness.jfif')}}"><h3 class="s_slider_h3">fitness</h3></div></a>
	</div>
	<div class="others_div">
		<a href="/halls" class="others">Digərləri</a>
	</div>
</div>
@endsection
