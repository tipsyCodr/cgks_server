<x-frontend>
@section('title', $item->title . ' | छत्तीसगढ़िया क्रान्ति सेना')
@section('description', Str::limit(strip_tags($item->content), 150))

<section class="promotions_area section_padding bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="welcome-title"><h2>पुरखा<span></span></h2></div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="single_blog">	
							@if($item->first_image_url)
								<div class="blog_img text-center">		
									<img class="object-fit_contain" src="{{ asset('frontend/uploads/purakha/' . $item->first_image_url) }}" alt="{{ $item->title }}" title="{{ $item->title }}">
								</div>
							@endif
							<div class="blog_content blog_page">
								<span><i class="fa fa-calendar"></i> {{ $item->published_date ?? $item->created_at?->format('d M Y') }}</span>		
								<h3>{{ $item->title }}</h3>			
								<div class="limit_txt-no">
									{!! $item->content !!}
								</div> 
							</div>
						</div>
					</div>
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
