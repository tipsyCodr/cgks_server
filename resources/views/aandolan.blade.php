<x-frontend>
@section('title', 'आंदोलन | छत्तीसगढ़िया क्रान्ति सेना')

<section class="promotions_area blog_area section_padding bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="welcome-title"><h2>आंदोलन<span></span></h2></div>

				@forelse($andolans as $item)
					<a href="{{ url('/aandolan/' . $item->id) }}" style="text-decoration:none; color:inherit; display:block;">
						<div class="highlight_text cks-event-card">
							<div class="cks-event-quote" aria-hidden="true"><i class="fa fa-quote-left"></i></div>
							<h3 class="cks-event-title">{{ $item->title }}</h3>
							@if($item->published_date)
								<div class="text-muted small" style="margin-top: 6px;">
									<i class="fa fa-calendar" style="color: #DA251C;"></i> {{ $item->published_date }}
								</div>
							@endif
						</div>
					</a>
				@empty
					<div class="alert alert-info text-center">कोई आंदोलन उपलब्ध नहीं है।</div>
				@endforelse

				<div class="clearfix"></div>
				<div class="text-center">
					<br>
					@if(method_exists($andolans, 'links'))
						{{ $andolans->links() }}
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
