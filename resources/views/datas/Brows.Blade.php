<div class="col-md-3"> 
	<div class="card">
		<div class="card-header">Tables <a class=" float-right" href="{{ route('add-table')}}">add</a></div>
		<div class="card-body">	
 			<ul>
				@foreach($tables_list as $d)
					<li><a href="{{ route('data-brows',$d->id)}}">id:{{$d->id}} {{$d->name}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>        

