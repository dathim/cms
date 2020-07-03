@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		@include('pages.brows')        
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">New page   </div>
				<div class="card-body">
					@if ($errors->any())
						<div class="alert alert-danger">
							@foreach($errors->all() as $error)
								{{$error}}
							@endforeach
						</div>	
					@endif

					<form class="needs-validation" novalidate="" method="post" action="{{ route('page-add-save') }}">
						@csrf
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="firstName">Enter name:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="name">
							</div>
							<div class="col-md-6 mb-3">
								<label for="firstName">Enter title:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="title">
							</div>
							<div class="col-md-6 mb-3">
								<label for="firstName">Parent page:</label>
								
								<select name="parent" class="form-control">
									@foreach($pagetree as $p)
										<option value="{{$p->id}}"> {{$p->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="col-md-6 mb-3">
								<label for="firstName">Enter path:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="" required="" name="path">
							</div>

							<div class="col-md-6 mb-3">
								<label for="firstName">Design:</label>
								
								<select name="design" class="form-control">
									@foreach($designs as $d)
										<option value="{{$d->id}}"> {{$d->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="col-md-6 mb-3">
								<label for="firstName">Subdesign:</label>
								
								<select name="subdesign" class="form-control">
									@foreach($designs as $d)
										<option value="{{$d->id}}"> {{$d->name}}</option>
									@endforeach
								</select>
							</div>

							<div class="col-md-12 mb-3">
								<label for="firstName">Description:</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="descr"></textarea>
							</div>

							<div class="col-md-4 mb-3">
								<label for="firstName" class=" d-block text-center">Public:</label>
								<input type="checkbox" checked="checked" class="form-control" id="firstName" placeholder="" value="1" required="" name="en_show">
							</div>
							<div class="col-md-4 mb-3">
								<label for="firstName" class=" d-block text-center">Show in menu:</label>
								<input type="checkbox" checked="checked" class="form-control" id="firstName" placeholder="" value="1" required="" name="en_menu">
							</div>
						
							<div class="col-md-4 mb-3">
								<label for="firstName" class=" d-block text-center">Use in datasets:</label>
								
								<input type="checkbox" class="form-control" id="firstName" placeholder="" value="1" required="" name="use_as_data">
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
