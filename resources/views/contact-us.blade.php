<x-frontend>
@section('title', 'संपर्क करें | छत्तीसगढ़िया क्रान्ति सेना')

<section class="promotions_area section_padding bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="welcome-title"><h2>संपर्क <span>करें</span></h2></div>

				<div class="box box-second" style="background:#fff; border-radius:10px; padding:24px; box-shadow:0 2px 10px rgba(0,0,0,0.06); border:1px solid #eaeaea; margin-bottom:30px;">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
							<div class="single_contact" style="display:flex; gap:14px; align-items:flex-start;">
								<div class="s_contuct_icon" style="width:44px; height:44px; border-radius:50%; background:#fce8e6; display:flex; align-items:center; justify-content:center; color:#DA251C; font-size:18px; flex-shrink:0;">
									<i class="fa fa-map-marker"></i>
								</div>
								<div>
									<h3 style="font-size:16px; font-weight:700; margin:0 0 4px 0;">प्रदेश कार्यालय</h3>							
									<p style="margin:0; color:#666; font-size:14px; line-height:1.4;">शॉप नंबर- 543, 5वां फ्लोर, मैग्नेटो मॉल, रायपुर, छत्तीसगढ़ 492001</p>							
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
							<div class="single_contact" style="display:flex; gap:14px; align-items:flex-start;">
								<div class="s_contuct_icon" style="width:44px; height:44px; border-radius:50%; background:#fce8e6; display:flex; align-items:center; justify-content:center; color:#DA251C; font-size:18px; flex-shrink:0;">
									<i class="fa fa-phone"></i>
								</div>
								<div>
									<h3 style="font-size:16px; font-weight:700; margin:0 0 4px 0;">फोन नं</h3>
									<p style="margin:0; color:#666; font-size:14px;"><a href="tel:+919691111088" style="color:inherit; text-decoration:none;">+91 9691111088</a></p>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
							<div class="single_contact" style="display:flex; gap:14px; align-items:flex-start;">
								<div class="s_contuct_icon" style="width:44px; height:44px; border-radius:50%; background:#fce8e6; display:flex; align-items:center; justify-content:center; color:#DA251C; font-size:18px; flex-shrink:0;">
									<i class="fa fa-envelope-o"></i>
								</div>
								<div>
									<h3 style="font-size:16px; font-weight:700; margin:0 0 4px 0;">ईमेल</h3>
									<p style="margin:0; color:#666; font-size:14px;"><a href="mailto:ckschhattisgarh@gmail.com" style="color:inherit; text-decoration:none;">ckschhattisgarh@gmail.com</a></p>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
							<div class="single_contact" style="display:flex; gap:14px; align-items:flex-start;">
								<div class="s_contuct_icon" style="width:44px; height:44px; border-radius:50%; background:#fce8e6; display:flex; align-items:center; justify-content:center; color:#DA251C; font-size:18px; flex-shrink:0;">
									<i class="fa fa-globe"></i>
								</div>
								<div>
									<h3 style="font-size:16px; font-weight:700; margin:0 0 4px 0;">वेबसाइट</h3>
									<p style="margin:0; color:#666; font-size:14px;">www.chhattisgarhiyakrantisena.org</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Contact / Message Form -->
				<div class="welcome-title"><h2>संदेश <span>भेजें</span></h2></div>
				<div class="box box-second" style="background:#fff; border-radius:10px; padding:24px; box-shadow:0 2px 10px rgba(0,0,0,0.06); border:1px solid #eaeaea; margin-bottom:30px;">
					@if(session('success'))
						<div class="alert alert-success" style="border-radius:8px;">
							<i class="fa fa-check-circle"></i> {{ session('success') }}
						</div>
					@endif
					@if(session('error'))
						<div class="alert alert-danger" style="border-radius:8px;">
							<i class="fa fa-exclamation-triangle"></i> {{ session('error') }}
						</div>
					@endif

					<form action="{{ route('store.feedback') }}" method="POST">
						@csrf
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
								<label for="name" style="font-weight:600; font-size:13px; color:#333;">नाम *</label>
								<input type="text" name="name" id="name" required class="form-control" placeholder="आपका पूरा नाम" style="height:44px; border-radius:8px;">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
								<label for="mobile" style="font-weight:600; font-size:13px; color:#333;">मोबाइल नंबर *</label>
								<input type="tel" name="mobile" id="mobile" required class="form-control" placeholder="10 अंकों का मोबाइल नंबर" style="height:44px; border-radius:8px;">
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:15px;">
								<label for="email" style="font-weight:600; font-size:13px; color:#333;">ईमेल</label>
								<input type="email" name="email" id="email" class="form-control" placeholder="ईमेल पता (वैकल्पिक)" style="height:44px; border-radius:8px;">
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
								<label for="message" style="font-weight:600; font-size:13px; color:#333;">संदेश / सुझाव *</label>
								<textarea name="message" id="message" rows="4" required class="form-control" placeholder="अपना संदेश या सुझाव यहाँ लिखें..." style="border-radius:8px; resize:vertical;"></textarea>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<button type="submit" class="btn btn-danger" style="background:#DA251C; border-color:#DA251C; padding:10px 28px; font-weight:700; border-radius:8px; font-size:15px;">
									<i class="fa fa-paper-plane"></i> संदेश भेजें
								</button>
							</div>
						</div>
					</form>
				</div>

				<!-- Google Map -->
				<div class="welcome-title"><h2>मानचित्र<span></span></h2></div>
				<div class="box box-second" style="background:#fff; border-radius:10px; overflow:hidden; box-shadow:0 2px 10px rgba(0,0,0,0.06); border:1px solid #eaeaea; margin-bottom:20px;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.9711097136715!2d81.65611081427018!3d21.232994186152045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dd1aaaaaaaa9%3A0xcda85bd6dacf2278!2sChhattisgarhiya+Kranti+Sena!5e0!3m2!1sen!2sin!4v1521460005148" width="100%" height="325" frameborder="0" style="border:0; display:block;" allowfullscreen loading="lazy"></iframe>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<x-frontend.sidebar />
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>
</x-frontend>
