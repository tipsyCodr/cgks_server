<x-frontend>
@section('title', 'ऑनलाइन सदस्यता (सदस्यता पाती) | छत्तीसगढ़िया क्रान्ति सेना')

<section class="promotions_area section_padding bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="welcome-title"><h2>ऑनलाइन <span>सदस्यता</span></h2></div>

				<div class="box box-second" style="background:#fff; border-radius:12px; padding:28px 32px; box-shadow:0 4px 20px rgba(0,0,0,0.06); border:1px solid #eaeaea; margin-bottom:30px;">
					<div class="text-center" style="margin-bottom: 24px; border-bottom: 2px solid #f0f0f0; padding-bottom: 16px;">
						<h3 style="font-size:24px; font-weight:700; color:#DA251C; margin:0 0 6px 0;">सदस्यता पाती (Online Membership)</h3>
						<p style="color:#555; font-size:14px; margin:0;">छत्तीसगढ़ महतारी, छत्तीसगढ़ी भाखा अउ संस्कृति के संरक्षण बर छत्तीसगढ़िया क्रान्ति सेना से जुड़व</p>
					</div>

					@if(session('success'))
						<div class="alert alert-success" style="border-radius:10px; font-size:15px; background:#e6fffa; border:1px solid #b2f5ea; color:#234e52; padding:18px 22px; margin-bottom:25px;">
							<div style="font-size:18px; font-weight:700; color:#234e52; margin-bottom:6px;">
								<i class="fa fa-check-circle text-success"></i> {{ session('success') }}
							</div>
							@if(session('reg_id'))
								<div style="margin-top:10px; padding:12px; background:#fff; border-radius:8px; border:1px dashed #38b2ac; display:inline-block;">
									<span>आप के सदस्यता क्रमांक (Registration No.): </span>
									<strong style="color:#DA251C; font-size:18px; letter-spacing:1px;">{{ session('reg_id') }}</strong>
								</div>
								<p style="margin:10px 0 0 0; font-size:13px; color:#4a5568;">कृपया अपन पंजीयन क्रमांक भविष्य बर सुरक्षित रखव।</p>
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

					<form method="POST" action="{{ route('membership.register') }}" enctype="multipart/form-data">
						@csrf

						<!-- 1. व्यक्तिगत जानकारी -->
						<div style="margin-bottom: 28px; background:#fafafa; border:1px solid #f0f0f0; border-radius:10px; padding:20px 22px;">
							<h4 style="font-size:16px; font-weight:700; color:#DA251C; margin:0 0 16px 0; display:flex; align-items:center;">
								<span style="background:#DA251C; color:#fff; width:26px; height:26px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; font-size:13px; margin-right:10px;">1</span>
								व्यक्तिगत विवरण (Personal Details)
							</h4>

							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="name" style="font-weight:600; font-size:13px;">नाव (नाम - छत्तीसगढ़ी/हिंदी म) <span style="color:#DA251C;">*</span></label>
									<input type="text" name="name" id="name" value="{{ old('name') }}" required class="form-control" placeholder="उदा. अमित कुमार बघेल" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="name2" style="font-weight:600; font-size:13px;">अंग्रेजी के केपिटल लेटर म नाव (IN CAPITAL) <span style="color:#DA251C;">*</span></label>
									<input type="text" name="name2" id="name2" value="{{ old('name2') }}" class="form-control" placeholder="उदा. AMIT KUMAR BAGHEL" style="height:42px; border-radius:6px; text-transform:uppercase;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="father_name" style="font-weight:600; font-size:13px;">पिता / पति के नाव <span style="color:#DA251C;">*</span></label>
									<input type="text" name="father_name" id="father_name" value="{{ old('father_name') }}" required class="form-control" placeholder="पिता या पति का नाम" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="mother_name" style="font-weight:600; font-size:13px;">महतारी (माता) के नाव</label>
									<input type="text" name="mother_name" id="mother_name" value="{{ old('mother_name') }}" class="form-control" placeholder="माता का नाम" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
									<label for="dob" style="font-weight:600; font-size:13px;">जनम तिथि (Date of Birth)</label>
									<input type="date" name="dob" id="dob" value="{{ old('dob') }}" class="form-control" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
									<label style="font-weight:600; font-size:13px; display:block;">लिंग (Gender) <span style="color:#DA251C;">*</span></label>
									<div style="margin-top:8px;">
										<label style="font-weight:normal; margin-right:18px; cursor:pointer;">
											<input type="radio" name="gender" value="पुरुष" {{ old('gender', 'पुरुष') == 'पुरुष' ? 'checked' : '' }} required> पुरुष
										</label>
										<label style="font-weight:normal; cursor:pointer;">
											<input type="radio" name="gender" value="महिला" {{ old('gender') == 'महिला' ? 'checked' : '' }} required> महिला
										</label>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom:15px;">
									<label for="mobile" style="font-weight:600; font-size:13px;">मोबाईल न. <span style="color:#DA251C;">*</span></label>
									<input type="tel" name="mobile" id="mobile" value="{{ old('mobile') }}" required pattern="[0-9]{10}" class="form-control" placeholder="10 अंकों का मोबाइल नंबर" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="whatsapp" style="font-weight:600; font-size:13px;">व्हाट्सएप नंबर</label>
									<input type="tel" name="whatsapp" id="whatsapp" value="{{ old('whatsapp') }}" class="form-control" placeholder="व्हाट्सएप नंबर" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="email" style="font-weight:600; font-size:13px;">ईमेल (Email Address)</label>
									<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="ईमेल पता (वैकल्पिक)" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="adhar_no" style="font-weight:600; font-size:13px;">आधार नंबर</label>
									<input type="text" name="adhar_no" id="adhar_no" value="{{ old('adhar_no') }}" class="form-control" placeholder="12 अंकों का आधार नंबर" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="ppatra" style="font-weight:600; font-size:13px;">मतदाता पहचान पत्र क्र. (Voter ID)</label>
									<input type="text" name="ppatra" id="ppatra" value="{{ old('ppatra') }}" class="form-control" placeholder="मतदाता परिचय पत्र क्रमांक" style="height:42px; border-radius:6px;">
								</div>
							</div>
						</div>

						<!-- 2. वर्तमान पता -->
						<div style="margin-bottom: 28px; background:#fafafa; border:1px solid #f0f0f0; border-radius:10px; padding:20px 22px;">
							<h4 style="font-size:16px; font-weight:700; color:#DA251C; margin:0 0 16px 0; display:flex; align-items:center;">
								<span style="background:#DA251C; color:#fff; width:26px; height:26px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; font-size:13px; margin-right:10px;">2</span>
								वर्तमान पता (Current Address)
							</h4>

							<div class="row">
								<div class="col-md-3 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="house_no" style="font-weight:600; font-size:13px;">मकान नं. / पारा</label>
									<input type="text" name="house_no" id="house_no" value="{{ old('house_no') }}" class="form-control" placeholder="मकान नं." style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-5 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="city" style="font-weight:600; font-size:13px;">गांव / शहर / वार्ड नाव, नं. <span style="color:#DA251C;">*</span></label>
									<input type="text" name="city" id="city" value="{{ old('city') }}" required class="form-control" placeholder="गांव या शहर" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="tahasil" style="font-weight:600; font-size:13px;">तहसील / वि. ख.</label>
									<input type="text" name="tahasil" id="tahasil" value="{{ old('tahasil') }}" class="form-control" placeholder="तहसील" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="district" style="font-weight:600; font-size:13px;">जिला <span style="color:#DA251C;">*</span></label>
									<select name="district" id="district" required class="form-control" style="height:42px; border-radius:6px;">
										<option value="">-- जिला चुनव --</option>
										@if(isset($districts) && count($districts) > 0)
											@foreach($districts as $d)
												<option value="{{ $d->name }}" {{ old('district') == $d->name ? 'selected' : '' }}>{{ $d->name }}</option>
											@endforeach
										@else
											<option value="रायपुर" {{ old('district') == 'रायपुर' ? 'selected' : '' }}>रायपुर</option>
											<option value="दुर्ग" {{ old('district') == 'दुर्ग' ? 'selected' : '' }}>दुर्ग</option>
											<option value="बिलासपुर" {{ old('district') == 'बिलासपुर' ? 'selected' : '' }}>बिलासपुर</option>
											<option value="राजनांदगांव" {{ old('district') == 'राजनांदगांव' ? 'selected' : '' }}>राजनांदगांव</option>
											<option value="धमतरी" {{ old('district') == 'धमतरी' ? 'selected' : '' }}>धमतरी</option>
											<option value="महासमुन्द" {{ old('district') == 'महासमुन्द' ? 'selected' : '' }}>महासमुन्द</option>
											<option value="कोरबा" {{ old('district') == 'कोरबा' ? 'selected' : '' }}>कोरबा</option>
											<option value="जांजगीर-चांपा" {{ old('district') == 'जांजगीर-चांपा' ? 'selected' : '' }}>जांजगीर-चांपा</option>
											<option value="रायगढ़" {{ old('district') == 'रायगढ़' ? 'selected' : '' }}>रायगढ़</option>
											<option value="बलौदाबाजार" {{ old('district') == 'बलौदाबाजार' ? 'selected' : '' }}>बलौदाबाजार</option>
											<option value="कवर्धा" {{ old('district') == 'कवर्धा' ? 'selected' : '' }}>कवर्धा</option>
											<option value="कांकेर" {{ old('district') == 'कांकेर' ? 'selected' : '' }}>कांकेर</option>
											<option value="जगदलपुर" {{ old('district') == 'जगदलपुर' ? 'selected' : '' }}>जगदलपुर</option>
											<option value="सरगुजा" {{ old('district') == 'सरगुजा' ? 'selected' : '' }}>सरगुजा</option>
										@endif
									</select>
								</div>

								<div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="state" style="font-weight:600; font-size:13px;">राज्य</label>
									<input type="text" name="state" id="state" value="{{ old('state', 'छत्तीसगढ़') }}" class="form-control" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="thana" style="font-weight:600; font-size:13px;">थाना</label>
									<input type="text" name="thana" id="thana" value="{{ old('thana') }}" class="form-control" placeholder="थाना" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="post_office" style="font-weight:600; font-size:13px;">डाकघर (पो.आ.)</label>
									<input type="text" name="post_office" id="post_office" value="{{ old('post_office') }}" class="form-control" placeholder="पोस्ट ऑफिस" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="pin_code" style="font-weight:600; font-size:13px;">पिन कोड</label>
									<input type="text" name="pin_code" id="pin_code" value="{{ old('pin_code') }}" class="form-control" placeholder="पिन कोड" style="height:42px; border-radius:6px;">
								</div>
							</div>
						</div>

						<!-- 3. पुरखउती (मूल) पता -->
						<div style="margin-bottom: 28px; background:#fafafa; border:1px solid #f0f0f0; border-radius:10px; padding:20px 22px;">
							<h4 style="font-size:16px; font-weight:700; color:#DA251C; margin:0 0 16px 0; display:flex; align-items:center;">
								<span style="background:#DA251C; color:#fff; width:26px; height:26px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; font-size:13px; margin-right:10px;">3</span>
								पुरखउती पता (Ancestral / Native Place)
							</h4>

							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="current_address" style="font-weight:600; font-size:13px;">पुरखउती गाँव / मूल निवास</label>
									<input type="text" name="current_address" id="current_address" value="{{ old('current_address') }}" class="form-control" placeholder="मूल पैतृक गांव का नाम" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="panchayat" style="font-weight:600; font-size:13px;">नगर पंचायत / पालिका / निगम</label>
									<input type="text" name="panchayat" id="panchayat" value="{{ old('panchayat') }}" class="form-control" placeholder="पंचायत / पालिका" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="vidhansabha" style="font-weight:600; font-size:13px;">विधान सभा क्षेत्र</label>
									<input type="text" name="vidhansabha" id="vidhansabha" value="{{ old('vidhansabha') }}" class="form-control" placeholder="विधानसभा का नाम" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="loksabha" style="font-weight:600; font-size:13px;">लोकसभा क्षेत्र</label>
									<input type="text" name="loksabha" id="loksabha" value="{{ old('loksabha') }}" class="form-control" placeholder="लोकसभा का नाम" style="height:42px; border-radius:6px;">
								</div>
							</div>
						</div>

						<!-- 4. पढ़ई, रूचि अउ बेवसाय -->
						<div style="margin-bottom: 28px; background:#fafafa; border:1px solid #f0f0f0; border-radius:10px; padding:20px 22px;">
							<h4 style="font-size:16px; font-weight:700; color:#DA251C; margin:0 0 16px 0; display:flex; align-items:center;">
								<span style="background:#DA251C; color:#fff; width:26px; height:26px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; font-size:13px; margin-right:10px;">4</span>
								शिक्षा, रूचि अउ बेवसाय (Education, Interest & Occupation)
							</h4>

							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="edu" style="font-weight:600; font-size:13px;">पढ़ई के पुरा जानकारी (Educational Qualification)</label>
									<input type="text" name="edu" id="edu" value="{{ old('edu') }}" class="form-control" placeholder="उदा. 12वीं / स्नातक / डिप्लोमा" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="computer" style="font-weight:600; font-size:13px;">कम्प्यूटर के जानकारी</label>
									<input type="text" name="computer" id="computer" value="{{ old('computer') }}" class="form-control" placeholder="उदा. DCA, PGDCA, बेसिक" style="height:42px; border-radius:6px;">
								</div>

								<!-- रूचि -->
								<div class="col-md-12 col-xs-12" style="margin-bottom:15px;">
									<label style="font-weight:600; font-size:13px; display:block; margin-bottom:8px;">रूचि (Areas of Interest):</label>
									<div style="display:flex; flex-wrap:wrap; gap:12px 18px;">
										@php
											$interests = ['समाजिक बुता', 'स्वास्थ्य', 'मिडिया', 'साहित्य', 'खेल', 'कला / संस्कृति', 'खेती किसानी', 'राजनीति', 'विशेष योग्यता', 'अन्य'];
											$oldRuchi = (array) old('ruchi', []);
										@endphp
										@foreach($interests as $interest)
											<label style="font-weight:normal; font-size:13px; cursor:pointer; margin:0;">
												<input type="checkbox" name="ruchi[]" value="{{ $interest }}" {{ in_array($interest, $oldRuchi) ? 'checked' : '' }}> {{ $interest }}
											</label>
										@endforeach
									</div>
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="occupation" style="font-weight:600; font-size:13px;">बेवसाय (Occupation)</label>
									<select name="occupation" id="occupation" class="form-control" style="height:42px; border-radius:6px;">
										<option value="">-- व्यवसाय चुनव --</option>
										<option value="खेती किसानी" {{ old('occupation') == 'खेती किसानी' ? 'selected' : '' }}>खेती किसानी</option>
										<option value="निजी बेवसाय" {{ old('occupation') == 'निजी बेवसाय' ? 'selected' : '' }}>निजी बेवसाय / स्वरोजगार</option>
										<option value="सरकारी / प्राइवेट कर्मचारी" {{ old('occupation') == 'सरकारी / प्राइवेट कर्मचारी' ? 'selected' : '' }}>सरकारी / प्राइवेट कर्मचारी</option>
										<option value="विद्यार्थी" {{ old('occupation') == 'विद्यार्थी' ? 'selected' : '' }}>छात्र / विद्यार्थी</option>
										<option value="बेरोजगार" {{ old('occupation') == 'बेरोजगार' ? 'selected' : '' }}>बेरोजगार</option>
										<option value="अन्य" {{ old('occupation') == 'अन्य' ? 'selected' : '' }}>अन्य</option>
									</select>
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="designation" style="font-weight:600; font-size:13px;">कर्मचारी के पद नाव / बेवसाय के विवरन</label>
									<input type="text" name="designation" id="designation" value="{{ old('designation') }}" class="form-control" placeholder="पद का नाम या व्यवसाय विवरण" style="height:42px; border-radius:6px;">
								</div>
							</div>
						</div>

						<!-- 5. सोशल मीडिया एवं फोटो -->
						<div style="margin-bottom: 28px; background:#fafafa; border:1px solid #f0f0f0; border-radius:10px; padding:20px 22px;">
							<h4 style="font-size:16px; font-weight:700; color:#DA251C; margin:0 0 16px 0; display:flex; align-items:center;">
								<span style="background:#DA251C; color:#fff; width:26px; height:26px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; font-size:13px; margin-right:10px;">5</span>
								सोशल मीडिया एवं फोटो अपलोड (Social Media & Photo)
							</h4>

							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="facebook" style="font-weight:600; font-size:13px;">फेसबुक लिंक (Facebook)</label>
									<input type="text" name="facebook" id="facebook" value="{{ old('facebook') }}" class="form-control" placeholder="उदा. facebook.com/profile" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:15px;">
									<label for="twitter" style="font-weight:600; font-size:13px;">ट्विटर / X (Twitter Handle)</label>
									<input type="text" name="twitter" id="twitter" value="{{ old('twitter') }}" class="form-control" placeholder="उदा. @username" style="height:42px; border-radius:6px;">
								</div>

								<div class="col-md-12 col-xs-12" style="margin-bottom:15px;">
									<label for="other_des" style="font-weight:600; font-size:13px;">कोन्हो दूसर संगठन म दायित्व / पद</label>
									<textarea name="other_des" id="other_des" rows="2" class="form-control" placeholder="यदि किसी अन्य सामाजिक या राजनैतिक संगठन में कोई पद है तो विवरण लिखें..." style="border-radius:6px;">{{ old('other_des') }}</textarea>
								</div>

								<div class="col-md-12 col-xs-12" style="margin-bottom:15px;">
									<label for="profile_photo" style="font-weight:600; font-size:13px;">फोटो अपलोड (Passport Photo)</label>
									<input type="file" name="profile_photo" id="profile_photo" accept="image/*" class="form-control" style="height:44px; border-radius:6px; padding:8px 12px;">
									<small class="text-muted">पासपोर्ट साइज फोटो (JPG, PNG - अधिकतम 5MB)</small>
								</div>

								<div class="col-md-12 col-xs-12" style="margin-bottom:10px;">
									<label for="bio" style="font-weight:600; font-size:13px;">रूचि / संगठन से जुड़ने का उद्देश्य / विचार</label>
									<textarea name="bio" id="bio" rows="2" class="form-control" placeholder="अपन रूचि या संगठन बर विचार लिखव..." style="border-radius:6px;">{{ old('bio') }}</textarea>
								</div>
							</div>
						</div>

						<!-- 6. शपथ एवं सबमिट -->
						<div style="background:#fff5f5; border:1px solid #fed7d7; border-radius:8px; padding:16px 18px; margin-bottom:24px;">
							<label style="font-size:14px; line-height:1.6; color:#444; font-weight:normal; margin:0; cursor:pointer; display:flex; align-items:flex-start;">
								<input type="checkbox" required style="margin-right:10px; margin-top:3px; width:18px; height:18px;">
								<span><strong>शपथ:</strong> मैं सत्यनिष्ठा से शपथ लेथंव कि छत्तीसगढ़ महतारी, छत्तीसगढ़ी भाखा, संस्कृति अउ छत्तीसगढ़िया समाज के हक-अधिकार एवं अस्मिता के रक्षा बर सदैव समर्पित रहिहूँ।</span>
							</label>
						</div>

						<div class="text-center">
							<button type="submit" class="btn btn-danger btn-lg" style="background:#DA251C; border-color:#DA251C; padding:12px 48px; font-weight:700; border-radius:8px; font-size:16px; box-shadow:0 4px 12px rgba(218,37,28,0.25);">
								<i class="fa fa-user-plus"></i> सदस्यता आवेदन जमा करव
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
</x-frontend>
