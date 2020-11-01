<div class="col-12 col-lg-4">
	<div> @lang('Status: ')
		@if(getStatuslogin() && getStatusServer())
			Online
		@else
			Offline
		@endif
	</div>

	<div> 
		@lang('Players Online: '){{ $online }}
	</div>
	<hr>
	<div><a href="#">Descarga Cliente</a></div>
	<div><a href="#">Descarga Parche</a></div>		
	<hr>
	<h3>@lang('VOTE FOR US')</h3>
	<div><a href="#">Hopzone</a></div>
</div>