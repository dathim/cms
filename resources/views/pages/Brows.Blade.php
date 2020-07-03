<div class="col-md-3"> 
	<div class="card">
		<div class="card-header">Страницы <a class=" float-right" href="{{ route('page-add',0)}}">add</a></div>
		<div class="card-body">	
 			@include('pages.browspart', ['menudata' => $pagetree, 'start_id' =>0,'curent_id'=> $id])  
		</div>
	</div>
</div>        

