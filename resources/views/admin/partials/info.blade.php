@if(Session::has('info'))
	<div class="alert alertinfo">
		<button type="button" class="close" data-dismiss="alert">
			&times;
		</button>
		{{ Session::get('info') }}
	</div>
@endif