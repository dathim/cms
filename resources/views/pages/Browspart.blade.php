<ul>
@foreach ($menudata as $menu_item)
	@if ($menu_item->parent == $start_id) 
		@if($menu_item->id == $curent_id)
			<li><a href="{{route('page-edit', $menu_item->id)}}"><b>{{$menu_item->name}}</b></a></li> 
		@else
			<li><a href="{{route('page-edit', $menu_item->id)}}">{{$menu_item->name}}</a></li>   
		@endif
		@include('pages.browspart', ['menudata' => $menudata, 'start_id' => $menu_item->id,'curent_id'=> $curent_id])  
   @endif
@endforeach
</ul>