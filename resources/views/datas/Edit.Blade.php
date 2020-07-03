@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
  	    @include('datas.brows')              
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">{{$curent_data->name}} ({{$curent_data->en_name}}) <a href="#" class=" float-right">Config</a>  </div>
				<div class="card-body">
				
				Filter any field, insert<br>
				Data table<br>
					
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection
