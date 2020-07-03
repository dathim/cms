@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		@include('pages.brows')        
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">{{$edit->name}} <a class=" ml-3 float-right" href="{{ route('page-settings',$edit->id)}}">Delete</a>  <a class=" float-right" href="{{ route('page-settings', $edit->id)}}">Settings</a> 
					</div>
				<div class="card-body">
					@if ($errors->any())
						<div class="alert alert-danger">
							@foreach($errors->all() as $error)
								{{$error}}
							@endforeach
						</div>	
					@endif
					@if (\Session::has('success'))
					    <div class="alert alert-success">
				           	<p class="mb-0"> {!! \Session::get('success') !!}</p>
					    </div>
					@endif
					<form class="needs-validation" novalidate="" method="post" action="{{ route('page-settings-save',$edit->id) }}">
						@csrf
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="firstName">Enter name:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="{{$edit->name}}" required="" name="name">
							</div>
							<div class="col-md-6 mb-3">
								<label for="firstName">Enter title:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="{{$edit->title}}" required="" name="path">
							</div>
							<div class="col-md-6 mb-3">
								
							
							@if ($edit->parent != 0) 
								<label for="parent">Parent page:</label>
								<select name="parent" class="form-control" >
									@foreach($pagetree as $p)
										@if ($p->id === $edit->parent)
											<option value="{{$p->id}}" selected > {{$p->name}}</option>
										@else 
											<option value="{{$p->id}}"> {{$p->name}}</option>
										@endif
									@endforeach
								</select>
							@else 
								
							@endif 
							</div>
							<div class="col-md-6 mb-3">
								<label for="firstName">Enter path:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="{{$edit->path}}" required="" name="path">
							</div>

							<div class="col-md-6 mb-3">
								<label for="firstName">Design:</label>
								
								<select name="design" class="form-control">
									@foreach($designs as $d)
										@if ($d->id === $edit->design)
											<option value="{{$d->id}}" selected> {{$d->name}}</option>
										@else 
											<option value="{{$d->id}}"> {{$d->name}}</option>
										@endif
									@endforeach
								</select>
							</div>
							<div class="col-md-6 mb-3">
								<label for="firstName">Subdesign:</label>
								
								<select name="subdesign" class="form-control">
									@foreach($designs as $d)
										@if ($d->id === $edit->subdesign)
											<option value="{{$d->id}}" selected> {{$d->name}}</option>
										@else 
											<option value="{{$d->id}}"> {{$d->name}}</option>
										@endif
									@endforeach
								</select>
							</div>

							<div class="col-md-12 mb-3">
								<label for="firstName">Description:</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="descr">{{$edit->descr}}</textarea>
							</div>

							<div class="col-md-4 mb-3">
								<label for="firstName" class=" d-block text-center">Public:</label>
								<input type="checkbox" 	@if ($edit->en_show === 1) checked="checked"	@endif class="form-control" id="firstName" placeholder="" value="1" required="" name="en_show">
							</div>
							<div class="col-md-4 mb-3">
								<label for="firstName" class=" d-block text-center">Show in menu:</label>
								<input type="checkbox" @if ($edit->en_menu === 1) checked="checked"	@endif class="form-control" id="firstName" placeholder="" value="1" required="" name="en_menu">
							</div>
						
							<div class="col-md-4 mb-3">
								<label for="firstName" class=" d-block text-center">Use in datasets:</label>
								
								<input type="checkbox" @if ($edit->use_as_data === 1) checked="checked"	@endif class="form-control" id="firstName" placeholder="" value="1" required="" name="use_as_data">
							</div>
						</div>
						<button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection
