<x-frontend>
@section('title', $album->title . ' | फोटो गैलरी | छत्तीसगढ़िया क्रान्ति सेना')

<section class="promotions_area section_padding bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div style="margin-bottom: 15px;">
					<a href="{{ url('/photo-gallery') }}" class="btn btn-default btn-sm" style="border-radius:20px; font-weight:600; color:#444;">
						<i class="fa fa-arrow-left"></i> वापस फोटो गैलरी
					</a>
				</div>
				<div class="welcome-title" style="margin-bottom: 20px;">
					<h2 style="font-size:24px;">{{ $album->title }}</h2>
					@if($album->post_date)
						<p class="text-muted" style="margin-top:6px;"><i class="fa fa-calendar" style="color:#DA251C;"></i> {{ $album->post_date }}</p>
					@endif
				</div>

				<div class="row" style="display:flex; flex-wrap:wrap;">
					@forelse($photos as $photo)
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
							<div class="thumbnail" style="margin-bottom:0; border-radius:8px; overflow:hidden; border:1px solid #eee; box-shadow:0 2px 6px rgba(0,0,0,0.05);">
								<a href="{{ asset('frontend/uploads/gallery/' . $photo->image) }}" target="_blank" class="cks-photo-thumb" style="display:block; aspect-ratio:1/1; overflow:hidden; background:#f5f5f5;">
									<img src="{{ asset('frontend/uploads/gallery/' . ($photo->thumb ?: $photo->image)) }}" 
										alt="{{ $photo->title ?: $album->title }}" 
										title="{{ $photo->title ?: $album->title }}" 
										onerror="this.onerror=null; this.src='{{ asset('frontend/img/header/logo.png') }}';"
										style="width:100%; height:100%; object-fit:cover; transition:transform 0.3s ease;">
								</a>
								@if($photo->title)
									<div class="caption" style="padding:8px 10px;">
										<p style="font-size:12px; line-height:1.3; color:#555; margin:0;">{{ Str::limit($photo->title, 50) }}</p>
									</div>
								@endif
							</div>
						</div>
					@empty
						<div class="col-12 text-center p-4">
							<p class="text-muted">इस एल्बम में कोई फोटो उपलब्ध नहीं है।</p>
						</div>
					@endforelse
				</div>

				<div class="clearfix"></div>
				<div class="text-center" style="margin-top: 20px;">
					@if(method_exists($photos, 'links'))
						{{ $photos->links() }}
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
