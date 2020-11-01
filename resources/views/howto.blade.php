@extends('layout')

@section('title', __('HowTo'))

@section('content')
 	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8">
				<h3>@lang('HOW TO CONNECT')</h3>
				<h4>1- @lang('Download a game client')</h4>
				<p>@lang('L2 H5, downloadable via these mirrors:')</p>
				<ul class="nav nav-pills">
					<li class="nav-item">
						<a class="nav-link" href="#">Link1</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link2</a>
					</li>
				</ul>


				<h4>2- @lang('Download a game patch')</h4>
				<p>@lang("L2 Ancient Civil War's patch, downloadable via these mirrors:")</p>

				<ul class="nav nav-pills">
					<li class="nav-item">
						<a class="nav-link" href="#">Link1</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link2</a>
					</li>
				</ul>

				<p class="text-secondary">@lang('Download the archive with the patch, unzip it to the root folder of the game.') (@lang('Example:') C:\Program Files\Lineage 2\)</p>

				<h4>3- @lang('Accounts')</h4>
				<p>@lang('To Play L2 Ancient Civil War you need to register. By playing here, you also agree with all of our rules stated in the footer of this website.')</p>
			</div>
			@include('partials.download')
		</div>
	</div>
@endsection