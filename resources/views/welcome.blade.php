<x-frontend>
@section('title', 'छत्तीसगढ़िया क्रान्ति सेना | मुख्य पृष्ठ')

<!-- Hero Banner -->
<section class="cks-hero">
	<div class="cks-hero-bg">
		<img src="{{ asset('frontend/img/header/hero-banner-bg-hd.jpg') }}" alt="जय छत्तीसगढ़ महतारी" class="cks-hero-bg-img">
	</div>
	<div class="container cks-hero-container">
		<div class="cks-hero-content">
			<div class="cks-hero-title-row">
				<span class="cks-hero-hash">#</span>
				<h1>जात-पात के करब बिदाई<br>छत्तीसगढ़िया भाई-भाई</h1>
			</div>
			<p class="cks-hero-sub">
				<span class="cks-hero-sub-line"></span>
				एक संगठित समाज, एक सशक्त छत्तीसगढ़
				<span class="cks-hero-sub-line"></span>
			</p>
			<div class="cks-hero-actions">
				<a href="{{ url('/membership') }}" class="cks-btn cks-btn-primary"><i class="fa fa-user-plus"></i> सदस्य बनें</a>
				<a href="{{ url('/about-us') }}" class="cks-btn cks-btn-outline">हमारे बारे में जानें <i class="fa fa-arrow-right"></i></a>
				<a href="{{ url('/about-us') }}" class="cks-btn cks-btn-pill">जय छत्तीसगढ़ महतारी</a>
			</div>
		</div>
	</div>
</section>

<!-- Home Content Area -->
<section class="cks-home-area">
<div class="container">
<div class="cks-home">

	<!-- LEFT: Press Release -->
	<aside class="cks-home-left">
		<div class="cks-card cks-press-card">
			<div class="cks-card-head">
				<span class="cks-card-icon cks-icon-red"><i class="fa fa-bullhorn"></i></span>
				<h2>PRESS <span>RELEASE</span></h2>
				<a href="{{ url('/press-release') }}" class="cks-see-all cks-press-see-all">सभी देखें →</a>
			</div>
			<div class="cks-press-list">
			@forelse($news as $item)
				<a class="cks-press-item" href="{{ url('/press-release/' . $item->id) }}">
					<img src="{{ $item->first_image_url ? asset('frontend/uploads/press_release/' . $item->first_image_url) : asset('frontend/img/header/logo.png') }}" alt="{{ $item->title }}">
					<span class="cks-press-meta">
						<span class="cks-press-title">{{ $item->title }}</span>
						<span class="cks-press-date"><i class="fa fa-calendar"></i> {{ $item->published_date ?? $item->created_at?->format('d M Y') }}</span>
					</span>
				</a>
			@empty
				<div class="text-center p-3 text-muted">कोई प्रेस विज्ञप्ति उपलब्ध नहीं है।</div>
			@endforelse
			</div>
			<a href="{{ url('/press-release') }}" class="cks-btn-solid">सभी प्रेस रिलीज़ देखें <i class="fa fa-arrow-right"></i></a>
		</div>
	</aside>

	<!-- CENTER -->
	<div class="cks-home-main">
		<div class="cks-feature-row">
			<!-- कार्यक्रम -->
			<div class="cks-card cks-feature-card">
				<div class="cks-feature-head">
					<span class="cks-card-icon cks-icon-red"><i class="fa fa-calendar"></i></span>
					<div>
						<h3>कार्यक्रम</h3>
						<a href="{{ url('/karyakram') }}" class="cks-see-all">सब देखें →</a>
					</div>
				</div>
				<ul class="cks-check-list">
					<li><a href="{{ url('/karyakram') }}">आगामी कार्यक्रम एवं बैठक</a></li>
					<li><a href="{{ url('/karyakram') }}">जिला स्तरीय सम्मेलन</a></li>
					<li><a href="{{ url('/karyakram') }}">सांस्कृतिक आयोजन</a></li>
					<li><a href="{{ url('/karyakram') }}">प्रशिक्षण शिविर</a></li>
					<li><a href="{{ url('/karyakram') }}">जनसंपर्क अभियान</a></li>
				</ul>
				<a href="{{ url('/karyakram') }}" class="cks-btn-outline-sm">सभी कार्यक्रम देखें →</a>
			</div>

			<!-- आंदोलन -->
			<div class="cks-card cks-feature-card">
				<div class="cks-feature-head">
					<span class="cks-card-icon cks-icon-red"><i class="fa fa-hand-o-up"></i></span>
					<div>
						<h3>आंदोलन</h3>
						<a href="{{ url('/aandolan') }}" class="cks-see-all">सब देखें →</a>
					</div>
				</div>
				<ul class="cks-check-list">
					<li><a href="{{ url('/aandolan') }}">माटी के हक बर आंदोलन</a></li>
					<li><a href="{{ url('/aandolan') }}">युवा रोजगार अधिकार पदयात्रा</a></li>
					<li><a href="{{ url('/aandolan') }}">जल-जंगल-जमीन बचाओ अभियान</a></li>
					<li><a href="{{ url('/aandolan') }}">छत्तीसगढ़िया मान-सम्मान रक्षा</a></li>
					<li><a href="{{ url('/aandolan') }}">स्थानीय आरक्षण मांग</a></li>
				</ul>
				<a href="{{ url('/aandolan') }}" class="cks-btn-outline-sm">सभी आंदोलन देखें →</a>
			</div>

			<!-- संस्कृति -->
			<div class="cks-card cks-feature-card">
				<div class="cks-feature-head">
					<span class="cks-card-icon cks-icon-red"><i class="fa fa-users"></i></span>
					<div>
						<h3>छत्तीसगढ़िया संस्कृति</h3>
						<a href="{{ url('/bhaakha-au-sanskrti') }}" class="cks-see-all">सब देखें →</a>
					</div>
				</div>
				<ul class="cks-check-list">
					<li><a href="{{ url('/bhaakha-au-sanskrti') }}">लोक कला एवं संस्कृति</a></li>
					<li><a href="{{ url('/purakha') }}">हमर पुरखा</a></li>
					<li><a href="{{ url('/hamar-buta') }}">हमर बुता</a></li>
					<li><a href="{{ url('/bhaakha-au-sanskrti') }}">त्योहार एवं परंपरा (हरेली, पोरा, तीजा)</a></li>
					<li><a href="{{ url('/bhaakha-au-sanskrti') }}">छत्तीसगढ़ी महतारी वंदना</a></li>
				</ul>
				<a href="{{ url('/bhaakha-au-sanskrti') }}" class="cks-btn-outline-sm">सभी संस्कृति देखें →</a>
			</div>

			<!-- मीडिया -->
			<div class="cks-card cks-feature-card">
				<div class="cks-feature-head">
					<span class="cks-card-icon cks-icon-red"><i class="fa fa-play-circle"></i></span>
					<div>
						<h3>मीडिया</h3>
						<a href="{{ url('/gallery') }}" class="cks-see-all">सब देखें →</a>
					</div>
				</div>
				<ul class="cks-check-list">
					<li><a href="{{ url('/press-release') }}">प्रेस रिलीज़</a></li>
					<li><a href="{{ url('/gallery') }}">फोटो गैलरी</a></li>
					<li><a href="{{ url('/video-gallery') }}">वीडियो गैलरी</a></li>
					<li><a href="{{ url('/audio-gallery') }}">ऑडियो गैलरी</a></li>
					<li><a href="{{ url('/publication') }}">पब्लिकेशन</a></li>
				</ul>
				<a href="{{ url('/gallery') }}" class="cks-btn-outline-sm">सभी मीडिया देखें →</a>
			</div>
		</div>

		<!-- CKS LIVE -->
		<div class="cks-card cks-live-card">
			<div class="cks-live-head">
				<span class="cks-card-icon cks-icon-red"><i class="fa fa-wifi"></i></span>
				<div>
					<h3>CKS LIVE</h3>
					<p>छत्तीसगढ़िया क्रांति सेना, छत्तीसगढ़ <span class="cks-live-badge">● LIVE</span></p>
				</div>
				<a href="https://twitter.com/ckschhattisgarh" target="_blank" rel="noopener" class="cks-btn-outline-sm cks-live-btn"><i class="fa fa-twitter"></i> पर देखें →</a>
			</div>
			<div class="cks-live-body">
				<a class="twitter-timeline" href="https://twitter.com/ckschhattisgarh?ref_src=twsrc%5Etfw" data-height="220">Tweets by ckschhattisgarh</a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
		</div>

		<!-- CTA strips -->
		<div class="cks-cta-row">
			<div class="cks-cta-strip cks-cta-membership">
				<span class="cks-cta-icon"><i class="fa fa-users"></i></span>
				<div class="cks-cta-text">
					<strong>जबर सदस्यता अभियान</strong>
					<span>संगठन से जुड़ें और छत्तीसगढ़िया समाज के हक में काम करें</span>
				</div>
				<a href="{{ url('/membership') }}" class="cks-btn-outline-sm">अभी जुड़ें →</a>
			</div>

			<div class="cks-cta-strip cks-cta-audio">
				<span class="cks-cta-icon"><i class="fa fa-headphones"></i></span>
				<div class="cks-cta-text">
					<strong>ऑडियो गैलरी</strong>
					<span>भाषण, गीत और संदेश सुनें</span>
				</div>
				<a href="{{ url('/audio-gallery') }}" class="cks-btn-outline-sm">सभी ऑडियो देखें →</a>
			</div>

			<div class="cks-cta-strip cks-cta-contact">
				<span class="cks-cta-icon"><i class="fa fa-envelope"></i></span>
				<div class="cks-cta-text">
					<strong>संपर्क करें</strong>
					<span>सवाल, सुझाव या सहयोग के लिए हमसे जुड़ें</span>
				</div>
				<a href="{{ url('/contact-us') }}" class="cks-btn-outline-sm">संपर्क करें →</a>
			</div>
		</div>
	</div>

	<!-- RIGHT: Galleries -->
	<aside class="cks-home-right">
		<div class="cks-card cks-gallery-card">
			<div class="cks-gallery-head">
				<h3>वीडियो गैलरी</h3>
				<a href="{{ url('/video-gallery') }}" class="cks-see-all">सब देखें →</a>
			</div>
			<div class="cks-video-wrap">
				@if(!empty($liveVideo) && $liveVideo->video_id)
					<iframe src="https://www.youtube.com/embed/{{ $liveVideo->video_id }}" frameborder="0" allowfullscreen title="{{ $liveVideo->title }}"></iframe>
				@else
					<iframe src="https://www.youtube.com/embed/28y1f-Xh17A" frameborder="0" allowfullscreen title="Chhattisgarhiya Kranti Sena"></iframe>
				@endif
			</div>
		</div>

		<div class="cks-card cks-gallery-card">
			<div class="cks-gallery-head">
				<h3>फोटो गैलरी</h3>
				<a href="{{ url('/gallery') }}" class="cks-see-all">सब देखें →</a>
			</div>
			<div class="cks-photo-grid">
			@forelse($gallery as $key => $img)
				<a href="{{ url('/photo-gallery/' . $img->id) }}" class="cks-photo-item {{ $loop->first ? 'cks-photo-large' : '' }}" title="{{ $img->title }}">
					<img src="{{ $img->cover_image ? asset('frontend/uploads/gallery/' . $img->cover_image) : asset('frontend/img/gallery' . ($loop->iteration) . '.jpg') }}" 
						alt="{{ $img->title ?? 'Gallery' }}"
						onerror="this.onerror=null; this.src='{{ asset('frontend/img/gallery1.jpg') }}';">
				</a>
			@empty
				<a href="{{ url('/photo-gallery') }}" class="cks-photo-item cks-photo-large">
					<img src="{{ asset('frontend/img/gallery1.jpg') }}" alt="Gallery">
				</a>
				<a href="{{ url('/photo-gallery') }}" class="cks-photo-item">
					<img src="{{ asset('frontend/img/gallery2.jpg') }}" alt="Gallery">
				</a>
				<a href="{{ url('/photo-gallery') }}" class="cks-photo-item">
					<img src="{{ asset('frontend/img/gallery3.jpg') }}" alt="Gallery">
				</a>
			@endforelse
			</div>
		</div>
	</aside>

</div>
</div>
</section>
</x-frontend>
