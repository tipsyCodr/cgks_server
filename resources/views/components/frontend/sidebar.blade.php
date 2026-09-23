<!-- Press Release Widget -->
<div class="box box-first cks-side-press">
	<div class="cks-side-press-head">
		<span class="cks-card-icon cks-icon-red"><i class="fa fa-bullhorn"></i></span>
		<strong>PRESS RELEASE</strong>
		<a href="{{ url('/press-release') }}" class="cks-see-all">सभी देखें →</a>
	</div>
	<div class="single_blog_sidebar">
		@forelse($sideNews as $item)
			<div class="post_tum">
				<a href="{{ url('/press-release/' . $item->id) }}">
					<img class="alignleft object-fit_contain" src="{{ $item->image_url ? asset('frontend/uploads/press_release/' . $item->image_url) : asset('frontend/img/header/logo.png') }}" alt="{{ $item->title }}" title="{{ $item->title }}">
				</a>
				<div class="text_limit-2">
					<a href="{{ url('/press-release/' . $item->id) }}">{{ $item->title }}</a>
					<span><i class="fa fa-calendar"></i> {{ $item->published_date ?? $item->created_at?->format('d M Y') }}</span>
				</div>
			</div>
		@empty
			<div class="p-2 text-muted small">कोई प्रेस रिलीज़ नहीं है।</div>
		@endforelse
	</div>
</div>

<!-- Programs Widget (कार्यक्रम) -->
<div class="box box-second cks-side-widget">
	<div class="welcome-title"><h3>कार्य<span>क्रम</span></h3></div>
	<div class="service_details_bottom_content">
		<div class="cks-ticker-box cks-ticker-karyakram">
			<ul class="cks-ticker-content">
				@php $annList = count($sideAnnouncements) ? $sideAnnouncements : [ (object)['title' => 'आगामी कार्यक्रम देखें'] ]; @endphp
				{{-- Loop twice for seamless infinite scrolling --}}
				@foreach([1, 2] as $pass)
					@foreach($annList as $ann)
						<li><a href="{{ url('/karyakram') }}">{{ $ann->title }}</a></li>
					@endforeach
				@endforeach
			</ul>
		</div>
	</div>
</div>

<!-- Andolan Widget (आंदोलन) -->
<div class="box box-third cks-side-widget">
	<div class="welcome-title"><h3>आंदो<span>लन</span></h3></div>
	<div class="service_details_bottom_content">
		<div class="cks-ticker-box cks-ticker-andolan">
			<ul class="cks-ticker-content">
				@php $andolanList = count($sideAndolans) ? $sideAndolans : [ (object)['title' => 'माटी के हक बर आंदोलन'] ]; @endphp
				{{-- Loop twice for seamless infinite scrolling --}}
				@foreach([1, 2] as $pass)
					@foreach($andolanList as $andolan)
						<li><a href="{{ url('/aandolan') }}">{{ $andolan->title }}</a></li>
					@endforeach
				@endforeach
			</ul>
		</div>
	</div>
</div>

<style>
.cks-ticker-box {
	height: 260px;
	overflow: hidden;
	position: relative;
}
.cks-ticker-box:hover .cks-ticker-content {
	animation-play-state: paused !important;
}
.cks-ticker-content {
	list-style: none !important;
	padding: 0 !important;
	margin: 0 !important;
	display: block !important;
	animation: cksScrollUp 18s linear infinite;
}
.cks-ticker-andolan .cks-ticker-content {
	animation-duration: 22s;
}
.cks-ticker-content li {
	position: relative !important;
	padding: 8px 6px 8px 22px !important;
	border-bottom: 1px dashed #e6e6e6 !important;
	line-height: 1.5 !important;
	background: none !important;
}
.cks-ticker-content li:before {
	content: "\f105" !important;
	font-family: FontAwesome !important;
	color: #DA251C !important;
	font-size: 13px !important;
	position: absolute !important;
	left: 4px !important;
	top: 8px !important;
}
.cks-ticker-content li a {
	color: #333 !important;
	text-decoration: none !important;
	font-size: 13px !important;
}
.cks-ticker-content li a:hover {
	color: #DA251C !important;
}
.cks-ticker-content li:last-child {
	border-bottom: none !important;
}
@keyframes cksScrollUp {
	0% {
		transform: translateY(0);
	}
	100% {
		transform: translateY(-50%);
	}
}
</style>
