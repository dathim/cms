@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		@include('designs.brows')        
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">New design   </div>
				<div class="card-body">
					@if ($errors->any())
						<div class="alert alert-danger">
							@foreach($errors->all() as $error)
								{{$error}}
							@endforeach
						</div>	
					@endif

					<form class="needs-validation" novalidate="" method="post" action="{{ route('design-add-save') }}">
						@csrf
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="firstName">Enter name:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="name">
							</div>
							<div class="col-md-12 mb-3">
								<label for="firstName">Enter html & php code:</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="22" name="content"></textarea>
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
