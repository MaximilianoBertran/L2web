@extends('layout')

@section('title', __('Features'))

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8">
				<h4>@lang('SERVER RATES & FEATURES')</h4>
				<div class="col-8 py-3">
					<table>
						<tr>
							<td>
								<img src="img/exp.png">
							</td>
							<td>
								<img src="img/sp.png">
							</td>
							<td>
								<img src="img/adena.png">
							</td>
							<td>
								<img src="img/pickup.png">
							</td>
							<td>
								<img src="img/spoil.png">
							</td>
						</tr>
						<tr>
							<td>
								x10
							</td>
							<td>
								x10
							</td>
							<td>
								x5
							</td>
							<td>
								x2
							</td>
							<td>
								x4
							</td>
						</tr>
					</table>
				</div><hr>
				<h4>@lang('ENCHANT RATES')</h4>
				<div class="col-8 py-3">
					
				</div><hr>

				<h4>@lang('CLASS TRANSFER')</h4>
				<div class="col-8 py-3">
					@lang('1st, 2nd and 3rd transfers are by NPC.')
				</div><hr>

				<h4>@lang('BUFFS')</h4>
				<div class="col-8 py-3">
					
				</div><hr>

				<h4>@lang('CASTLE SIEGES')</h4>
				<div class="col-8 py-3">
					@lang('Momentarily disabled.')
				</div><hr>

				<h4>@lang('MORE DETAILS')</h4>
				
				<div class="col-8 py-3">
					<ul>
						<li>Auto Loot for items from monsters & and manual pickup for raid bosses.</li>
						<li>Auto Loot system for adena from monsters & raid bosses</li>
						<li>Auto learn skills</li>
					</ul>
				</div><hr>
			</div>
			@include('partials.download')
		</div>
	</div>
@endsection