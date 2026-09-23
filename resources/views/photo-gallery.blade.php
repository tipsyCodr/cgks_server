<x-frontend>
@section('title', 'फोटो गैलरी | छत्तीसगढ़िया क्रान्ति सेना')

<section class="promotions_area section_padding bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="welcome-title"><h2>फोटो <span>गैलरी</span></h2></div>

				<div class="row" style="display:flex; flex-wrap:wrap;">
					@forelse($albums as $album)
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 24px;">
							<div class="single_service" style="background:#fff; border-radius:8px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.06); height:100%; display:flex; flex-direction:column; border:1px solid #eee;">
								<a href="{{ url('/photo-gallery/' . $album->id) }}" style="display:block; overflow:hidden; position:relative; aspect-ratio:4/3; background:#f4f4f4;">
									<img src="{{ $album->cover_image ? asset('frontend/uploads/gallery/' . $album->cover_image) : asset('frontend/img/header/logo.png') }}" 
										alt="{{ $album->title }}" 
										title="{{ $album->title }}" 
										onerror="this.onerror=null; this.src='{{ asset('frontend/img/header/logo.png') }}';"
										style="width:100%; height:100%; object-fit:cover; transition:transform 0.3s ease;">
									@if($album->photos_count > 0)
										<span style="position:absolute; bottom:8px; right:8px; background:rgba(0,0,0,0.75); color:#fff; font-size:11px; font-weight:bold; padding:3px 8px; border-radius:12px;">
											<i class="fa fa-camera"></i> {{ $album->photos_count }}
										</span>
									@endif
								</a>
								<div class="location_title" style="padding:12px; flex:1; display:flex; flex-direction:column; justify-content:space-between;">
									<h4 style="font-size:14px; line-height:1.4; margin:0 0 8px 0; font-weight:600;">
										<a href="{{ url('/photo-gallery/' . $album->id) }}" style="color:#222; text-decoration:none;">{{ Str::limit($album->title, 60) }}</a>
									</h4>
									@if($album->post_date)
										<span style="font-size:12px; color:#888;">
											<i class="fa fa-calendar" style="color:#DA251C;"></i> {{ $album->post_date }}
										</span>
									@endif
								</div>
							</div>
						</div>
					@empty
						<div class="col-12 text-center p-4">
							<p class="text-muted">कोई फोटो गैलरी उपलब्ध नहीं है।</p>
						</div>
					@endforelse
				</div>

				<div class="clearfix"></div>
				<div class="text-center" style="margin-top: 20px;">
					@if(method_exists($albums, 'links'))
						{{ $albums->links() }}
					@endif
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
