<x-frontend>
@section('title', 'रजिस्ट्रेशन | छत्तीसगढ़िया क्रान्ति सेना')

<section class="promotions_area section_padding bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="welcome-title"><h2>रजिस्ट्रेशन / <span>सदस्य बनें</span></h2></div>

				<div class="box box-second" style="background:#fff; border-radius:12px; padding:28px 32px; box-shadow:0 4px 20px rgba(0,0,0,0.06); border:1px solid #eaeaea; margin-bottom:30px;">
					<div class="text-center" style="margin-bottom: 24px; border-bottom: 2px solid #f0f0f0; padding-bottom: 16px;">
						<h3 style="font-size:24px; font-weight:700; color:#DA251C; margin:0 0 6px 0;">छत्तीसगढ़िया क्रान्ति सेना सदस्यता</h3>
						<p style="color:#555; font-size:14px; margin:0;">छत्तीसगढ़ महतारी, छत्तीसगढ़ी भाखा अउ संस्कृति के संरक्षण बर छत्तीसगढ़िया क्रान्ति सेना से जुड़व</p>
						<div style="margin-top: 10px;">
							<a href="https://play.google.com/store/apps/details?id=com.pathideamultiskill.cgks" target="_blank" class="btn btn-xs btn-default" style="border-radius: 20px; font-size: 12px; padding: 4px 14px; color: #555; border: 1px solid #ccc;">
								<i class="fa fa-android" style="color: #43A047;"></i> पहले से अकाउंट है? ऐप डाउनलोड कर लॉगिन करें
							</a>
						</div>
					</div>

					@if(session('success'))
						<div class="alert alert-success" style="border-radius:10px; font-size:15px; background:#e6fffa; border:1px solid #b2f5ea; color:#234e52; padding:18px 22px; margin-bottom:25px;">
							<div style="font-size:18px; font-weight:700; color:#234e52; margin-bottom:6px;">
								<i class="fa fa-check-circle text-success"></i> {{ session('success') }}
							</div>
							@if(session('referral_code'))
								<div style="margin-top:10px; padding:12px; background:#fff; border-radius:8px; border:1px dashed #38b2ac; display:inline-block;">
									<span>आप का रेफरल कोड (Referral Code): </span>
									<strong style="color:#DA251C; font-size:18px; letter-spacing:1px;">{{ session('referral_code') }}</strong>
								</div>
								<div style="margin-top: 12px;">
									<a href="https://play.google.com/store/apps/details?id=com.pathideamultiskill.cgks" target="_blank" class="btn btn-success btn-sm" style="font-weight: 600; border-radius: 6px;">
										<i class="fa fa-play"></i> गूगल प्ले स्टोर से ऐप डाउनलोड करें
									</a>
								</div>
							@endif
						</div>
					@endif

					@if(session('error'))
						<div class="alert alert-danger" style="border-radius:8px; font-size:14px; margin-bottom:20px;">
							<i class="fa fa-exclamation-triangle"></i> {{ session('error') }}
						</div>
					@endif

					@if($errors->any())
						<div class="alert alert-danger" style="border-radius:8px; font-size:13px; margin-bottom:20px;">
							<strong>कृपया निम्नांकित त्रुटियों को सुधारें:</strong>
							<ul style="margin:6px 0 0 16px; padding:0;">
								@foreach($errors->all() as $err)
									<li>{{ $err }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form method="POST" action="{{ route('register.store') }}" id="registerForm">
						@csrf

						<!-- 1. व्यक्तिगत जानकारी -->
						<div style="margin-bottom: 24px; background:#fafafa; border:1px solid #f0f0f0; border-radius:10px; padding:20px 22px;">
							<h4 style="font-size:16px; font-weight:700; color:#DA251C; margin:0 0 16px 0; display:flex; align-items:center;">
								<span style="background:#DA251C; color:#fff; width:26px; height:26px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; font-size:13px; margin-right:10px;">1</span>
								व्यक्तिगत विवरण
							</h4>

							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="name" style="font-weight:600; font-size:13px;">नाव (नाम - छत्तीसगढ़ी/हिंदी म) <span style="color:#DA251C;">*</span></label>
									<input type="text" name="name" id="name" value="{{ old('name') }}" required class="form-control" placeholder="उदा. अमित कुमार बघेल" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="name2" style="font-weight:600; font-size:13px;">अंग्रेजी के केपिटल लेटर म नाव (IN CAPITAL)</label>
									<input type="text" name="name2" id="name2" value="{{ old('name2') }}" class="form-control" placeholder="उदा. AMIT KUMAR BAGHEL" style="height:42px; border-radius:6px; text-transform:uppercase;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="mobile" style="font-weight:600; font-size:13px;">मोबाइल नंबर (Mobile No.) <span style="color:#DA251C;">*</span></label>
									<input type="tel" name="mobile" id="mobile" value="{{ old('mobile') }}" required pattern="[0-9]{10,15}" class="form-control" placeholder="10 अंकों का मोबाइल नंबर" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="email" style="font-weight:600; font-size:13px;">ईमेल (Email)</label>
									<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="उदा. example@mail.com" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="whatsapp" style="font-weight:600; font-size:13px;">व्हाट्सएप नंबर (WhatsApp No.)</label>
									<input type="tel" name="whatsapp" id="whatsapp" value="{{ old('whatsapp') }}" class="form-control" placeholder="व्हाट्सएप नंबर" style="height:42px; border-radius:6px;">
								</div>
							</div>
						</div>

						<!-- 2. निवास विवरण -->
						<div style="margin-bottom: 24px; background:#fafafa; border:1px solid #f0f0f0; border-radius:10px; padding:20px 22px;">
							<h4 style="font-size:16px; font-weight:700; color:#DA251C; margin:0 0 16px 0; display:flex; align-items:center;">
								<span style="background:#DA251C; color:#fff; width:26px; height:26px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; font-size:13px; margin-right:10px;">2</span>
								स्थान एवं निवास विवरण
							</h4>

							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="district" style="font-weight:600; font-size:13px;">जिला (District) <span style="color:#DA251C;">*</span></label>
									<select name="district" id="district" required class="form-control" style="height:42px; border-radius:6px;">
										<option value="">-- जिला चुनव --</option>
										@foreach($districts as $d)
											<option value="{{ $d->name }}" {{ old('district') == $d->name ? 'selected' : '' }}>{{ $d->name }}</option>
										@endforeach
									</select>
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="city" style="font-weight:600; font-size:13px;">शहर / गांव (City) <span style="color:#DA251C;">*</span></label>
									<input type="text" name="city" id="city" value="{{ old('city') }}" required class="form-control" placeholder="शहर / गांव का नाम" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="address" style="font-weight:600; font-size:13px;">पुर्खौती निवास (Permanent Address) <span style="color:#DA251C;">*</span></label>
									<textarea name="address" id="address" rows="2" required class="form-control" placeholder="मूल / पैतृक निवास का पता..." style="border-radius:6px;">{{ old('address') }}</textarea>
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="current_address" style="font-weight:600; font-size:13px;">वर्तमान निवास (Current Address) <span style="color:#DA251C;">*</span></label>
									<textarea name="current_address" id="current_address" rows="2" required class="form-control" placeholder="वर्तमान निवास का पता..." style="border-radius:6px;">{{ old('current_address') }}</textarea>
								</div>
							</div>
						</div>

						<!-- 3. रेफरल कोड एवं सुरक्षा -->
						<div style="margin-bottom: 24px; background:#fafafa; border:1px solid #f0f0f0; border-radius:10px; padding:20px 22px;">
							<h4 style="font-size:16px; font-weight:700; color:#DA251C; margin:0 0 16px 0; display:flex; align-items:center;">
								<span style="background:#DA251C; color:#fff; width:26px; height:26px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; font-size:13px; margin-right:10px;">3</span>
								रेफरल कोड एवं पासवर्ड
							</h4>

							<div class="row">
								<div class="col-md-12 col-xs-12" style="margin-bottom:15px;">
									<label for="referral_code" style="font-weight:600; font-size:13px;">रेफरल कोड (Referral Code) <span style="color:#DA251C;">*</span></label>
									<div class="input-group">
										<input type="text" name="referral_code" id="referral_code" value="{{ old('referral_code', $referralCode) }}" required class="form-control" placeholder="रेफरल कोड दर्ज करें (उदा. AB12CD34)" style="height:42px; border-radius:6px 0 0 6px; text-transform:uppercase; font-weight:600; letter-spacing:1px;">
										<span class="input-group-btn">
											<button type="button" id="btnVerifyRef" class="btn btn-default" style="height:42px; border-radius:0 6px 6px 0; font-weight:600;">
												<i class="fa fa-check"></i> जांचें
											</button>
										</span>
									</div>
									<div id="referrerInfo" style="margin-top:6px; font-size:13px; font-weight:600;">
										@if($referrer)
											<span style="color:#2e7d32;"><i class="fa fa-check-circle"></i> रेफरर: {{ $referrer->name }} {{ $referrer->city ? "({$referrer->city})" : '' }}</span>
										@endif
									</div>
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="password" style="font-weight:600; font-size:13px;">पासवर्ड (Password) <span style="color:#DA251C;">*</span></label>
									<input type="password" name="password" id="password" required minlength="4" class="form-control" placeholder="न्यूनतम 4 अक्षर" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="password_confirmation" style="font-weight:600; font-size:13px;">पासवर्ड सुनिश्चित करें (Confirm Password) <span style="color:#DA251C;">*</span></label>
									<input type="password" name="password_confirmation" id="password_confirmation" required minlength="4" class="form-control" placeholder="पासवर्ड पुनः दर्ज करें" style="height:42px; border-radius:6px;">
								</div>
							</div>
						</div>

						<div class="text-center" style="margin-top:20px;">
							<button type="submit" class="btn btn-danger btn-lg" style="background:#DA251C; border-color:#DA251C; padding:12px 48px; font-weight:700; border-radius:8px; font-size:16px; box-shadow:0 4px 12px rgba(218,37,28,0.25);">
								<i class="fa fa-user-plus"></i> रजिस्टर करें
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<x-frontend.sidebar />
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
	const refInput = document.getElementById('referral_code');
	const refInfo = document.getElementById('referrerInfo');
	const verifyBtn = document.getElementById('btnVerifyRef');
	let debounceTimer = null;

	function checkReferral(code) {
		const trimmed = (code || '').trim();
		if (!trimmed) {
			refInfo.innerHTML = '';
			return;
		}

		refInfo.innerHTML = '<span style="color:#777;"><i class="fa fa-spinner fa-spin"></i> जांच हो रही है...</span>';

		fetch('/api/user/referral/get', {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
				'Accept': 'application/json'
			},
			body: JSON.stringify({ referral_code: trimmed })
		})
		.then(res => res.json())
		.then(data => {
			if (data && data.user) {
				const u = data.user;
				refInfo.innerHTML = '<span style="color:#2e7d32;"><i class="fa fa-check-circle"></i> रेफरर: ' + u.name + (u.city ? ' (' + u.city + ')' : '') + '</span>';
				const distSelect = document.getElementById('district');
				const cityInput = document.getElementById('city');
				if (distSelect && !distSelect.value && u.district) {
					distSelect.value = u.district;
				}
				if (cityInput && !cityInput.value && u.city) {
					cityInput.value = u.city;
				}
			} else {
				refInfo.innerHTML = '<span style="color:#c62828;"><i class="fa fa-times-circle"></i> अमान्य रेफरल कोड</span>';
			}
		})
		.catch(err => {
			refInfo.innerHTML = '<span style="color:#c62828;"><i class="fa fa-times-circle"></i> अमान्य रेफरल कोड</span>';
		});
	}

	if (refInput) {
		refInput.addEventListener('input', function () {
			clearTimeout(debounceTimer);
			debounceTimer = setTimeout(() => {
				checkReferral(this.value);
			}, 500);
		});

		if (verifyBtn) {
			verifyBtn.addEventListener('click', function () {
				checkReferral(refInput.value);
			});
		}

		// Initial check if prefilled
		if (refInput.value.trim() && !refInfo.textContent.trim()) {
			checkReferral(refInput.value);
		}
	}
});
</script>
</x-frontend>
