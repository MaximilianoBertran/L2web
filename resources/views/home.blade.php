@extends('layout')

@section('title', __('Home'))

@section('content')
 	<div class="container">
 		<div class="row">
	 		<div class="col-12 col-lg-8">
				<div class="d-flex justify-content-between align-items-center mb-3">
					<h2 class="mb-0">@lang('News')</h2>

				</div>
				<ul class="list-group">
					
					@foreach($notices as $notice)
						<li class="list-group-item border-0 mb-3 shadow-sm">
							<div class="text-secondary d-flex justify-content-between align-items-center">
							 <h4 class="font-weight-bold">{{ $notice->title }}</h4> 
							 <span class="text-black-50">{{ $notice->created_at->format('d/m/Y') }}</span>

							</div>
							<div>{{ $notice->description }}</div>
						</li>
					@endforeach

				</ul>
				
			</div>
			@include('partials.download')
		</div>
	</div>
	
@endsection