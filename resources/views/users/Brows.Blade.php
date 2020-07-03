
<div class="col-md-3"> 
	<div class="card">
		<div class="card-header">Пользователи <a class=" float-right" href="{{ route('user-add')}}">Добавить</a></div>

		<div class="card-body">
			<ul>
				@foreach($data as $d)
					<li><a href="{{route('user-edit',$d->id)}}">id:{{$d->id}} {{$d->name}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>        

