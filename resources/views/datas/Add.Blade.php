@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
  	    @include('datas.brows')              
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">Create new table <a href="#" class=" float-right">Delete</a>  </div>

				<div class="card-body">
				

					@if ($errors->any())
						<div class="alert alert-danger">
							@foreach($errors->all() as $error)
								{{$error}}
							@endforeach
						</div>	
					@endif

					<form class="needs-validation" novalidate="" method="post" action="{{ route('add-table-save') }}">
						@csrf
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="firstName">Enter name:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="name">
							</div>
							<div class="col-md-12 mb-3">
								<label for="firstName">Enter English table name:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="en_name">
							</div>
						</div>
						<button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
					</form>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection
