<x-frontend>
@section('title', 'प्रेस रिलीज़ | छत्तीसगढ़िया क्रान्ति सेना')

<section class="promotions_area section_padding bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="welcome-title"><h2>प्रेस <span>रिलीज़</span></h2></div>

				<div class="row">
					@forelse($news as $item)
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
							<div class="press-release clearfix">   
								<div class="row clearfix">	
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<a href="{{ url('/press-release/' . $item->id) }}" class="thumbnail">
											<img class="object-fit_contain" src="{{ $item->first_image_url ? asset('frontend/uploads/press_release/' . $item->first_image_url) : asset('frontend/img/header/logo.png') }}" alt="{{ $item->title }}" title="{{ $item->title }}">
										</a>        
									</div>
									<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">   
										<div class="text_limit-1" style="font-size:18px;">
											<a href="{{ url('/press-release/' . $item->id) }}">{{ $item->title }}</a>
										</div>
										<span style="color:#EB0001;"><i class="fa fa-calendar"></i> {{ $item->published_date ?? $item->created_at?->format('d M Y') }}</span>
										<div class="limit_txt">{{ Str::limit(strip_tags($item->content), 180) }}</div>   
										<div class="text-right"><a href="{{ url('/press-release/' . $item->id) }}" class="know_more2">और पढ़ें ...</a></div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>	  
							</div>	
						</div>
						<div class="clearfix"></div>
					@empty
						<div class="col-12 text-center p-4">
							<p class="text-muted">कोई प्रेस विज्ञप्ति उपलब्ध नहीं है।</p>
						</div>
					@endforelse
				</div>

				<div class="text-center">
					<br>
					@if(method_exists($news, 'links'))
						{{ $news->links() }}
					@endif
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
