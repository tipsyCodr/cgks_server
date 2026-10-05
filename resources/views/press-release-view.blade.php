<x-frontend>
@section('title', $newsItem->title . ' | छत्तीसगढ़िया क्रान्ति सेना')
@section('description', Str::limit(strip_tags($newsItem->content), 150))

<section class="promotions_area section_padding bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="welcome-title"><h2>प्रेस <span>रिलीज़</span></h2></div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="single_blog">	
							<div class="blog_img text-center">		
								<img class="object-fit_contain" src="{{ $newsItem->first_image_url ? asset('frontend/uploads/press_release/' . $newsItem->first_image_url) : asset('frontend/img/header/logo.png') }}" alt="{{ $newsItem->title }}" title="{{ $newsItem->title }}">
							</div>
							<div class="blog_content blog_page">
								<span><i class="fa fa-calendar"></i> {{ $newsItem->published_date ?? $newsItem->created_at?->format('d M Y') }}</span>		
								<h3>{{ $newsItem->title }}</h3>			
								<div class="limit_txt-no">
									{!! nl2br(e($newsItem->content)) !!}
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				@include('layout.partials.sidebar')
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>
</x-frontend>
