<x-frontend>
@section('title', $andolan->title . ' | छत्तीसगढ़िया क्रान्ति सेना')
@section('description', Str::limit(strip_tags($andolan->content), 150))

<section class="promotions_area section_padding bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="welcome-title"><h2>आंदो<span>लन</span></h2></div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="single_blog">	
							@if($andolan->first_image_url)
								<div class="blog_img text-center">		
									<img class="object-fit_contain" src="{{ asset('frontend/uploads/andolan/' . $andolan->first_image_url) }}" alt="{{ $andolan->title }}" title="{{ $andolan->title }}">
								</div>
							@endif
							<div class="blog_content blog_page">
								<span><i class="fa fa-calendar"></i> {{ $andolan->published_date ?? $andolan->created_at?->format('d M Y') }}</span>		
								<h3>{{ $andolan->title }}</h3>			
								<div class="limit_txt-no">
									{!! nl2br(e($andolan->content)) !!}
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
