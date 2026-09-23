<x-frontend>
@section('title', 'वीडियो गैलरी | छत्तीसगढ़िया क्रान्ति सेना')

<section class="promotions_area section_padding bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="welcome-title"><h2>वीडियो <span>गैलरी</span></h2></div>

				<div class="row" style="display:flex; flex-wrap:wrap;">
					@forelse($videos as $video)
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 24px;">
							<div class="single_service" style="background:#fff; border-radius:8px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.06); height:100%; display:flex; flex-direction:column; border:1px solid #eee;">
								<div style="position:relative; aspect-ratio:16/9; background:#000;">
									<iframe width="100%" height="100%" 
										src="https://www.youtube.com/embed/{{ $video->video_id }}" 
										frameborder="0" 
										allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
										allowfullscreen 
										loading="lazy" 
										style="border:0; position:absolute; top:0; left:0; width:100%; height:100%;">
									</iframe>
								</div>
								<div class="location_title" style="padding:12px; flex:1; display:flex; flex-direction:column; justify-content:space-between;">
									<h4 style="font-size:14px; line-height:1.4; margin:0 0 6px 0; font-weight:600;">
										<a href="https://www.youtube.com/watch?v={{ $video->video_id }}" target="_blank" rel="noopener" style="color:#222; text-decoration:none;">
											{{ Str::limit($video->title, 65) }}
										</a>
									</h4>
									@if($video->created_at)
										<span style="font-size:12px; color:#888;">
											<i class="fa fa-calendar" style="color:#DA251C;"></i> {{ $video->created_at->format('d M Y') }}
										</span>
									@endif
								</div>
							</div>
						</div>
					@empty
						<div class="col-12 text-center p-4">
							<p class="text-muted">कोई वीडियो उपलब्ध नहीं है।</p>
						</div>
					@endforelse
				</div>

				<div class="clearfix"></div>
				<div class="text-center" style="margin-top: 20px;">
					@if(method_exists($videos, 'links'))
						{{ $videos->links() }}
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
