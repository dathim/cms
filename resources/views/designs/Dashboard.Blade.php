@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		@include('designs.brows')	        
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">PageName <a href="#" class=" float-right">Delete</a>  </div>

				<div class="card-body">
					@if (\Session::has('success'))
					    <div class="alert alert-success">
				           	<p class="mb-0"> {!! \Session::get('success') !!}</p>
					    </div>
					@endif

					Help text
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection
