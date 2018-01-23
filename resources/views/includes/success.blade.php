@if(session('success'))

<div class="alert alert-success">
	<strong>Sucess !! </strong> {{ session('success') }}
</div>

@endif