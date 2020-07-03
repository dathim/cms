@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		@include('users.brows')        
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">Добавлние пользователя   </div>
				<div class="card-body">
					@if ($errors->any())
						<div class="alert alert-danger">
							@foreach($errors->all() as $error)
								{{$error}}
							@endforeach
						</div>	
					@endif

					<form class="needs-validation" novalidate="" method="post" action="{{ route('user-add-save') }}">
						@csrf
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="firstName">Имя пользователя:</label>
								<input type="text" class="form-control" id="firstName"  value=""  name="name">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="firstName">Email:</label>
								<input type="text" class="form-control" id="firstName" value=""  name="email">
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="firstName">Пароль:</label>
								<input type="password" class="form-control" id="firstName"  value=""  name="password1">
							</div>
			
							<div class="col-md-6 mb-3">
								<label for="firstName">Подтверждение:</label>
								<input type="password" class="form-control" id="firstName"  value=""  name="password2">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="firstName">Группа:</label>
								<select name="rules">
									<option value="1">Администраторы</option>
									<option value="2">Редакторы</option>
									<option value="3">Внешние пользователи 1</option>
									<option value="4">Внешние пользователи 2</option>
									<option value="5">Внешние пользователи 3</option>
								</select>
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
