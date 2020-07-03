@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		@include('users.brows')        
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">Design: {{$edit->name}} 
					@if (Auth::user()->id != $edit->id)
					<a class=" float-right" href="{{ route('user-delete',$edit->id) }}">delete</a>
					@endif
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
					<form class="needs-validation" novalidate="" method="post" action="{{ route('user-edit-save',$edit->id) }}">
						@csrf
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="firstName">Имя пользователя:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="{{$edit->name}}"  name="name">
							</div>

							<div class="col-md-12 mb-3">
								<label for="firstName">Email:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="{{$edit->email}}"  name="email">
							</div>

							
							<div class="col-md-6 mb-3">
								<label for="firstName">Введите пароль:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="" name="password1">
							</div>

							<div class="col-md-6 mb-3">
								<label for="firstName">Повторите пароль:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="" name="password2">
							</div>

							<div class="row">
								<div class="col-md-12 mb-3">
									<label for="firstName">Группа:</label>
									<select name="rules">
										<option value="1" @if ($edit->rules == 1)  selected @endif>Администраторы</option>
										<option value="2" @if ($edit->rules == 2)  selected @endif>Редакторы</option>
										<option value="3" @if ($edit->rules == 3)  selected @endif>Внешние пользователи 1</option>
										<option value="4" @if ($edit->rules == 4)  selected @endif>Внешние пользователи 2</option>
										<option value="5" @if ($edit->rules == 5)  selected @endif>Внешние пользователи 3</option>
									</select>
								</div>
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
