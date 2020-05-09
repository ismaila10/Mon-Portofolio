@if(count($errors) > 0)
	@foreach($errors->all() as $error)
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		  <div class="alert alert-danger alert-dismissible" role="alert">
		        <strong>Erreur!</strong> {{ $error }}.
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		  </div>
	</div>
	@endforeach
@endif
@if (session('status'))

	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>Succés!</strong> {{ session('status') }}.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	</div>

@endif
@if (session('Erreur'))

	<div class="alert alert-danger alert-dismissible" role="alert">
	    <strong>Erreur!</strong> {{ session('Erreur') }}.
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      <span aria-hidden="true">&times;</span>
	    </button>
	</div>
@endif
