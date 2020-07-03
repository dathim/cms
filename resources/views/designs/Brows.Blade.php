
<div class="col-md-3"> 
	<div class="card">
		<div class="card-header">Designs <a class=" float-right" href="{{ route('design-add')}}">add</a></div>

		<div class="card-body">
			<ul>
				@foreach($data as $d)
					<li><a href="{{route('design-edit',$d->id)}}">id:{{$d->id}} {{$d->name}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>        

