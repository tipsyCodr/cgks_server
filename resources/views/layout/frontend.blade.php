<!DOCTYPE html>
<html class="no-js" lang="hi"> 
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.ico') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}">

<title>@yield('title', 'छत्तीसगढ़िया क्रान्ति सेना | chhattisgarhiyakrantisena.org')</title>
<meta name="description" content="@yield('description', 'Chhattisgarhiya Kranti Sena')"/>
<meta name="keywords" content="@yield('keywords', 'Chhattisgarhiya Kranti Sena, www.chhattisgarhiyakrantisena.org, Chhattisgarhiya Kranti Sena Raipur, Chhattisgarhiya Kranti Sena Chhattisgarh, Kranti Sena Raipur, Kranti Sena Chhattisgarh, Kranti Sena in Indai, Hindu Kranti Sena, kranti sena in raipur')"/>
<meta name="rating" content="Chhattisgarhiya Kranti Sena"> 

<!-- Stylesheets -->
<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/css.css') }}" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,900,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('frontend/css/slicknav.css') }}" />
<link href="{{ asset('frontend/rs-plugin/css/settings.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/style.css') }}?v=20260822wa" rel="stylesheet">
<link href="{{ asset('frontend/css/responsive.css') }}?v=20260821c" rel="stylesheet">
<link href="{{ asset('frontend/css/cks-polish.css') }}?v=20260822b" rel="stylesheet">

<style>
/* Floating pill bottom nav (mobile) */
.cks-bottom-nav{display:none!important}
@media screen and (max-width:991px){
  .cks-bottom-nav{
    display:-webkit-box!important;
    display:-ms-flexbox!important;
    display:flex!important;
    -webkit-box-pack:justify!important;
    -ms-flex-pack:justify!important;
    justify-content:space-between!important;
    -webkit-box-align:center!important;
    -ms-flex-align:center!important;
    align-items:center!important;
    position:fixed!important;
    left:12px!important;
    right:12px!important;
    bottom:14px!important;
    z-index:2147483000!important;
    height:auto!important;
    min-height:72px!important;
    margin:0!important;
    padding:8px 6px 10px!important;
    background:#fff!important;
    border:0!important;
    border-radius:28px!important;
    box-shadow:0 8px 28px rgba(0,0,0,.22)!important;
  }
  .cks-bn-item{
    -webkit-box-flex:1!important;
    -ms-flex:1!important;
    flex:1!important;
    display:-webkit-box!important;
    display:-ms-flexbox!important;
    display:flex!important;
    -webkit-box-orient:vertical!important;
    -webkit-box-direction:normal!important;
    -ms-flex-direction:column!important;
    flex-direction:column!important;
    -webkit-box-align:center!important;
    -ms-flex-align:center!important;
    align-items:center!important;
    -webkit-box-pack:center!important;
    -ms-flex-pack:center!important;
    justify-content:center!important;
    gap:4px!important;
    min-width:0!important;
    padding:4px 2px 6px!important;
    color:#222!important;
    text-decoration:none!important;
    position:relative!important;
    font-family:'Noto Sans Devanagari','Poppins',sans-serif!important;
  }
  .cks-bn-ico{
    width:36px!important;
    height:36px!important;
    border-radius:50%!important;
    display:-webkit-box!important;
    display:-ms-flexbox!important;
    display:flex!important;
    -webkit-box-align:center!important;
    -ms-flex-align:center!important;
    align-items:center!important;
    -webkit-box-pack:center!important;
    -ms-flex-pack:center!important;
    justify-content:center!important;
  }
  .cks-bn-ico i{
    display:block!important;
    font-size:16px!important;
    line-height:1!important;
    margin:0!important;
    color:#333!important;
  }
  .cks-bn-home .cks-bn-ico{background:#f3d4cf!important;border-radius:10px!important}
  .cks-bn-event .cks-bn-ico{background:#ececec!important}
  .cks-bn-reg .cks-bn-ico{background:#d9f0e8!important}
  .cks-bn-gal .cks-bn-ico{background:#dceaf8!important}
  .cks-bn-contact .cks-bn-ico{background:#f0e6d8!important}
  .cks-bn-label{
    display:block!important;
    max-width:100%!important;
    overflow:hidden!important;
    text-overflow:ellipsis!important;
    white-space:nowrap!important;
    font-size:10px!important;
    font-weight:700!important;
    line-height:1.15!important;
    color:#222!important;
  }
  .cks-bn-item.active .cks-bn-ico{
    background:#f3d4cf!important;
    border-radius:10px!important;
  }
  .cks-bn-item.active .cks-bn-ico i{color:#DA251C!important}
  .cks-bn-item.active .cks-bn-label{color:#DA251C!important}
  .cks-bn-item.active:after{
    content:""!important;
    position:absolute!important;
    left:50%!important;
    bottom:0!important;
    width:22px!important;
    height:3px!important;
    margin-left:-11px!important;
    background:#DA251C!important;
    border-radius:3px!important;
  }
  body{padding-bottom:96px!important}
}

.paginate {
  font-family:'Noto Sans Devanagari', Arial, Helvetica, sans-serif;
  padding: 3px;
  margin:-3px;
}
.paginate a {
  padding:8px 12px;
  margin:3px;
  border:1px solid #e5e7eb;
  border-radius:8px;
  text-decoration:none;
  color:#333;
  font-weight:bold;
  background-color:#fff;
}
.paginate a:hover, .paginate a:active {
  border: 1px solid #DA251C;
  color: #fff;
  font-weight:bold;
  background-color: #DA251C;
}
.paginate span.current {
  margin: 3px;
  padding: 8px 12px;
  border: 1px solid #DA251C;
  border-radius:8px;
  font-weight: bold;
  background-color: #DA251C;
  color:#fff;
}
.paginate span.disabled {
  padding:8px 12px;
  margin:3px;
  border:1px solid #e5e7eb;
  border-radius:8px;
  color:#999;
  font-weight:bold;
  background:#f5f5f5;
}
</style>

@stack('styles')
</head>

<body> 
<!-- Header Area -->
<header class="cks-header">
	<div class="cks-topbar">
		<div class="container">
			<div class="cks-topbar-inner">
				<div class="cks-topbar-left">
					<a href="mailto:ckschhattisgarh@gmail.com"><i class="fa fa-envelope-o"></i> ckschhattisgarh@gmail.com</a>
					<a href="tel:+919691111088"><i class="fa fa-phone"></i> +91 9691111088</a>
				</div>
				<div class="cks-topbar-right">
					<div class="cks-topbar-links">
						<a href="{{ url('/contact-us') }}">संपर्क करें</a>
						<span class="cks-topbar-sep"></span>
						<a href="{{ url('/membership') }}">सदस्यता लें</a>
						<span class="cks-topbar-sep"></span>
						<a href="{{ url('/login') }}">लॉगिन</a>
						<span class="cks-topbar-sep"></span>
						<span class="cks-lang">हिंदी <i class="fa fa-chevron-down"></i></span>
					</div>
					<div class="cks-topbar-social">
						<a href="https://www.facebook.com/chhattisgadhiyakrantisena/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
						<a href="https://wa.me/919691111088" target="_blank" rel="noopener" aria-label="WhatsApp" class="cks-top-wa">
							<svg class="cks-wa-icon" viewBox="0 0 448 512" aria-hidden="true" focusable="false"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 339.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.7-32.8-16.2-37.9-18-5.1-1.9-8.8-2.7-12.5 2.7-3.7 5.3-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.1 1.8-3.7.9-6.9-.5-9.7-1.4-2.7-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
						</a>
						<a href="https://twitter.com/ckschhattisgarh?s=09" target="_blank" rel="noopener" aria-label="Twitter"><i class="fa fa-twitter"></i></a>
						<a href="https://www.instagram.com/ckschhattisgarh?r=nametag" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
						<a href="https://www.youtube.com/channel/UC2cJO94B_IKhStXx844oC-A" target="_blank" rel="noopener" aria-label="YouTube"><i class="fa fa-youtube-play"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="cks-navbar">
		<div class="container">
			<div class="cks-navbar-inner">
				<div class="cks-navbar-top">
					<a href="{{ url('/') }}" class="cks-brand">
						<span class="cks-brand-logo-wrap">
							<img src="{{ asset('frontend/img/header/cks-logo.jpg') }}" alt="छत्तीसगढ़िया क्रान्ति सेना" class="cks-brand-logo">
						</span>
						<span class="cks-brand-text">
							<span class="cks-brand-title">छत्तीसगढ़िया क्रान्ति सेना</span>
							<span class="cks-brand-tagline">छत्तीसगढ़, छत्तीसगढ़ी और छत्तीसगढ़िया समाज के हक एवं संस्कृति के संरक्षण के लिए समर्पित</span>
						</span>
					</a>

					<div class="cks-menu-slot">
						<div class="mobile_menu_area">
							<nav>
								<ul id="mobile_menu">
									<li><a href="{{ url('/') }}">होम</a></li>
									<li><a href="{{ url('/about-us') }}">उद्देश्य</a></li>
									<li><a href="{{ url('/hamar-buta') }}">हमर बुता</a></li>
									<li><a href="{{ url('/sor-sandesh') }}">सोर सन्देश</a></li>
									<li><a href="javascript:;">गैलरी</a>
										<ul>
											<li><a href="{{ url('/press-release') }}">प्रेस रिलीज़</a></li>
											<li><a href="{{ url('/gallery') }}">फोटो गैलरी</a></li>
											<li><a href="{{ url('/video-gallery') }}">वीडियो गैलरी</a></li>
											<li><a href="{{ url('/audio-gallery') }}">ऑडियो गैलरी</a></li>
										</ul>
									</li>
									<li><a href="{{ url('/chhattisgarh-sanskriti') }}">छत्तीसगढ़िया संस्कृति</a></li>
									<li><a href="{{ url('/purakha') }}">पुरखा</a></li>
									<li><a href="{{ url('/karyakram') }}">कार्यक्रम</a></li>
									<li><a href="{{ url('/aandolan') }}">आंदोलन</a></li>
									<li><a href="{{ url('/membership') }}">ऑनलाइन सदस्यता</a></li>
									<li><a href="{{ url('/cooperate') }}">सहयोग करव</a></li>
									<li><a href="{{ url('/suggestion') }}">सुझाव</a></li>
									<li><a href="{{ url('/contact-us') }}">संपर्क</a></li>
									<li><a href="{{ url('/login') }}">लॉगिन</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>

				<nav class="cks-nav" aria-label="Main">
					<ul class="cks-nav-list">
						<li class="{{ request()->is('/') ? 'active' : '' }}">
							<a href="{{ url('/') }}"><i class="fa fa-home"></i><span>होम</span></a>
						</li>
						<li class="{{ request()->is('about-us*') ? 'active' : '' }}">
							<a href="{{ url('/about-us') }}"><i class="fa fa-user"></i><span>हमारे बारे में</span></a>
						</li>
						<li class="{{ request()->is('press-release*', 'sor-sandesh*') ? 'active' : '' }}">
							<a href="{{ url('/press-release') }}"><i class="fa fa-file-text-o"></i><span>समाचार</span></a>
						</li>
						<li class="{{ request()->is('karyakram*', 'aandolan*') ? 'active' : '' }}">
							<a href="{{ url('/karyakram') }}"><i class="fa fa-calendar"></i><span>कार्यक्रम</span></a>
						</li>
						<li class="{{ request()->is('chhattisgarh-sanskriti*', 'bhaakha-au-sanskrti*', 'purakha*') ? 'active' : '' }}">
							<a href="{{ url('/chhattisgarh-sanskriti') }}"><i class="fa fa-users"></i><span class="cks-nav-label-full">छत्तीसगढ़िया संस्कृति</span><span class="cks-nav-label-short">छ.संस्कृति</span></a>
						</li>
						<li class="{{ request()->is('*gallery*', 'publication*') ? 'active' : '' }}">
							<a href="{{ url('/gallery') }}"><i class="fa fa-play-circle"></i><span>मीडिया</span></a>
						</li>
						<li class="{{ request()->is('contact-us*') ? 'active' : '' }}">
							<a href="{{ url('/contact-us') }}"><i class="fa fa-phone"></i><span>संपर्क करें</span></a>
						</li>
					</ul>
					<a href="{{ url('/membership') }}" class="cks-nav-cta">सदस्यता लें</a>
				</nav>
			</div>
		</div>
	</div>
</header>

<!-- Main Body Slot -->
<main id="main-content">
	@isset($slot)
		{{ $slot }}
	@else
		@yield('content')
	@endisset
</main>

<!-- Footer Area -->
<footer class="footer_area">
<div class="footer_top_area section_dark">
	<div class="container">
		<div class="row footer_padding_top footer_contact_row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="footer_adddress s_footer">
					<div class="footer_icon"><i class="fa fa-home"></i></div>
					<div class="footer_contact_text">
						<p class="uppercase">पता</p>
						<p>शॉप नंबर- 543, 5 ठ फ्लोर, मैग्नेटो मॉल,<br>रायपुर, छत्तीसगढ़ 492001</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="footer_call_us s_footer">
					<div class="footer_icon"><i class="fa fa-phone"></i></div>
					<div class="footer_contact_text">
						<p class="uppercase">फोन नं</p>
						<p>+91 9691111088<br>सोम - शनि: 10:00 AM - 6:00 PM</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="footer_email_us s_footer">
					<div class="footer_icon"><i class="fa fa-envelope"></i></div>
					<div class="footer_contact_text">
						<p class="uppercase">ईमेल</p>
						<p>ckschhattisgarh@gmail.com<br>हम आपको जल्द ही जवाब देंगे</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row footer_padding_bottom">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="footer_list">
					<h3>मेन्यू</h3>
					<div class="footer_menu_cols clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
							<ul>
								<li><a href="{{ url('/about-us') }}">उद्देश्य</a></li>
								<li><a href="{{ url('/hamar-buta') }}">हमर बुता</a></li>
								<li><a href="{{ url('/sor-sandesh') }}">सोर सन्देश</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
							<ul>
								<li><a href="{{ url('/chhattisgarh-sanskriti') }}">छत्तीसगढ़िया संस्कृति</a></li>
								<li><a href="{{ url('/purakha') }}">पुरखा</a></li>
								<li><a href="{{ url('/membership') }}">रजिस्ट्रेशन</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
							<ul>
								<li><a href="{{ url('/press-release') }}">प्रेस रिलीज़</a></li>
								<li><a href="{{ url('/karyakram') }}">कार्यक्रम</a></li>
								<li><a href="{{ url('/aandolan') }}">आंदोलन</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
							<ul>
								<li><a href="{{ url('/gallery') }}">फोटो गैलरी</a></li>
								<li><a href="{{ url('/video-gallery') }}">वीडियो गैलरी</a></li>
								<li><a href="{{ url('/publication') }}">पब्लिकेशन</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
							<ul>
								<li><a href="{{ url('/membership') }}">ऑनलाइन सदस्यता</a></li>
								<li><a href="{{ url('/cooperate') }}">सहयोग करव</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
							<ul>
								<li><a href="{{ url('/suggestion') }}">सुझाव</a></li>
								<li><a href="{{ url('/contact-us') }}">संपर्क</a></li>
								<li><a href="{{ asset('frontend/img/JCPVaydaPati-2023Final.pdf') }}" target="_blank">हमर वायदा अउ संकल्प पाती</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="footer_join_box">
					<div class="footer_join_left">
						<div class="footer_join_icon"><i class="fa fa-envelope-o"></i></div>
						<div class="footer_join_copy">
							<h4>हमारे साथ जुड़ें</h4>
							<p>लेटेस्ट अपडेट और समाचार के लिए सब्सक्राइब करें</p>
						</div>
					</div>
					<form class="footer_subscribe_form" action="{{ url('/suggestion') }}" method="get">
						<input type="email" name="email" placeholder="आपका ईमेल दर्ज करें" required>
						<button type="submit">सब्सक्राइब करें</button>
					</form>
					<div class="footer_join_social">
						<h4>हमसे जुड़ें</h4>
						<ul>
							<li><a href="https://www.facebook.com/chhattisgadhiyakrantisena/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/ckschhattisgarh?s=09" target="_blank" rel="noopener" aria-label="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/ckschhattisgarh?r=nametag" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UC2cJO94B_IKhStXx844oC-A" target="_blank" rel="noopener" aria-label="YouTube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer_bottom_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="footer_copyright text-center">
					<p>Copyright &copy; 2017- {{ date('Y') }} Chhattisgarhiya Kranti Sena | All Rights Reserved.</p>
					<p class="footer_powered">Powered by : <a rel="external" href="https://softbitsolution.com/" target="_blank">Softbit Solution</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
</footer>

<!-- Floating pill bottom nav (mobile) -->
<nav class="cks-bottom-nav" aria-label="Mobile bottom">
	<a href="{{ url('/') }}" class="cks-bn-item cks-bn-home {{ request()->is('/') ? 'active' : '' }}">
		<span class="cks-bn-ico"><i class="fa fa-home"></i></span>
		<span class="cks-bn-label">होम</span>
	</a>
	<a href="{{ url('/karyakram') }}" class="cks-bn-item cks-bn-event {{ request()->is('karyakram*') ? 'active' : '' }}">
		<span class="cks-bn-ico"><i class="fa fa-calendar"></i></span>
		<span class="cks-bn-label">कार्यक्रम</span>
	</a>
	<a href="{{ url('/membership') }}" class="cks-bn-item cks-bn-reg {{ request()->is('membership*', 'online-membership*') ? 'active' : '' }}">
		<span class="cks-bn-ico"><i class="fa fa-user-plus"></i></span>
		<span class="cks-bn-label">रजिस्ट्रेशन</span>
	</a>
	<a href="{{ url('/gallery') }}" class="cks-bn-item cks-bn-gal {{ request()->is('*gallery*') ? 'active' : '' }}">
		<span class="cks-bn-ico"><i class="fa fa-picture-o"></i></span>
		<span class="cks-bn-label">गैलरी</span>
	</a>
	<a href="{{ url('/contact-us') }}" class="cks-bn-item cks-bn-contact {{ request()->is('contact-us*') ? 'active' : '' }}">
		<span class="cks-bn-ico"><i class="fa fa-phone"></i></span>
		<span class="cks-bn-label">संपर्क</span>
	</a>
</nav>

<!-- Scripts -->
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>

@stack('scripts')
</body>
</html>