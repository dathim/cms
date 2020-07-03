@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		@include('designs.brows')        
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">Design: {{$edit->name}}  <a class=" float-right" href="{{ route('design-delete',$edit->id) }}">delete</a></div>
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
					<form class="needs-validation" novalidate="" method="post" action="{{ route('design-edit-save',$edit->id) }}">
						@csrf
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="firstName">Enter name:</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="{{$edit->name}}" required="" name="name">
							</div>
							<div class="col-md-12 mb-3">
								<label for="firstName">Enter html & php code:</label>
								<textarea name="content"/>{{$edit->content}}</textarea>
								<div id="code_div" style="    height: 600px;"></div>
								
							</div>
						</div>

						<button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
						<p>*insert: @pagecontent, @pagecode,</p>
					</form>

					
					<script  src="https://code.jquery.com/jquery-2.2.4.js"  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="  crossorigin="anonymous"></script> 
					<script src="http://cdnjs.cloudflare.com/ajax/libs/ace/1.1.3/ace.js" type="text/javascript" charset="utf-8"></script>
					<script>

						var html_editor = ace.edit("code_div");
						var textarea = $('textarea[name="content"]').hide();
						    html_editor.setTheme("ace/theme/monokai");
						    html_editor.getSession().setMode("ace/mode/html");
						    html_editor.setShowPrintMargin(false);
						    html_editor.getSession().setValue(textarea.val());
						    html_editor.getSession().on('change', function(){
						      textarea.val(html_editor.getSession().getValue());
						    });
					</script>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection
