<x-frontend>
@section('title', 'ऑडियो गैलरी | छत्तीसगढ़िया क्रान्ति सेना')

<section class="promotions_area section_padding bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="welcome-title"><h2>ऑडियो <span>गैलरी</span></h2></div>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
						<div class="single_service" style="background:#fff; border-radius:10px; padding:20px; box-shadow:0 2px 10px rgba(0,0,0,0.06); border:1px solid #eaeaea; display:flex; flex-direction:column; gap:12px;">
							<div style="display:flex; align-items:center; gap:14px;">
								<div style="width:48px; height:48px; border-radius:50%; background:#fce8e6; display:flex; align-items:center; justify-content:center; color:#DA251C; font-size:20px; flex-shrink:0;">
									<i class="fa fa-music"></i>
								</div>
								<div>
									<h4 style="margin:0 0 4px 0; font-size:16px; font-weight:700; color:#222;">छत्तीसगढ़िया क्रान्ति सेना - क्रांति गीत (भाग 1)</h4>
									<span style="font-size:12px; color:#777;"><i class="fa fa-headphones"></i> ऑडियो ट्रैक • MP3/MPEG</span>
								</div>
							</div>
							<div style="margin-top:6px;">
								<audio controls style="width:100%; height:45px; border-radius:8px;">
									<source src="{{ asset('frontend/img/audio/1.mpeg') }}" type="audio/mpeg">
									आपका ब्राउज़र ऑडियो प्लेयर को सपोर्ट नहीं करता।
								</audio>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 20px;">
						<div class="single_service" style="background:#fff; border-radius:10px; padding:20px; box-shadow:0 2px 10px rgba(0,0,0,0.06); border:1px solid #eaeaea; display:flex; flex-direction:column; gap:12px;">
							<div style="display:flex; align-items:center; gap:14px;">
								<div style="width:48px; height:48px; border-radius:50%; background:#fce8e6; display:flex; align-items:center; justify-content:center; color:#DA251C; font-size:20px; flex-shrink:0;">
									<i class="fa fa-volume-up"></i>
								</div>
								<div>
									<h4 style="margin:0 0 4px 0; font-size:16px; font-weight:700; color:#222;">छत्तीसगढ़िया क्रान्ति सेना - उद्घोषणा एवं संदेश (भाग 2)</h4>
									<span style="font-size:12px; color:#777;"><i class="fa fa-headphones"></i> ऑडियो ट्रैक • MP3/MPEG</span>
								</div>
							</div>
							<div style="margin-top:6px;">
								<audio controls style="width:100%; height:45px; border-radius:8px;">
									<source src="{{ asset('frontend/img/audio/2.mpeg') }}" type="audio/mpeg">
									आपका ब्राउज़र ऑडियो प्लेयर को सपोर्ट नहीं करता।
								</audio>
							</div>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<x-frontend.sidebar />
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>
</x-frontend>
