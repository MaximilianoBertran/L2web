@extends('layout')

@section('title', __('Raids'))

@section('content')
	<div class="container">
 		<div class="row">
	 		<div class="col-12 col-lg-8">
				<table>
					<tr>
						<th>
							RAID
						</th>
						<th>
							ESTADO
						</th>
					</tr>
					
					@foreach($raids as $raid)
					<tr>
						<td>
							{{ $raid->name }}
						</td>
						<td>
							@if($raid->respawn_time == 0)
								@lang('VIVO')
							@else
								@lang('MUERTO') (Resucita {{ respawnTime($raid->respawn_time) }})
							@endif
						</td>
					</tr>
					@endforeach
				</table>
			</div>
			@include('partials.download')
		</div>
	</div>
@endsection