@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		@include('pages.brows')        
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">{{$edit->name}} <a class=" ml-3 float-right" href="{{ route('page-delete',$edit->id)}}">Delete</a>  <a class=" float-right" href="{{ route('page-settings', $edit->id)}}">Settings</a> 
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
					<form class="needs-validation" novalidate="" method="post" action="{{ route('page-edit-save',$edit->id) }}">
						@csrf
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="firstName">Text page:</label>

								<textarea class="form-control" id="content" rows="11" name="content">{{$edit->content}}</textarea>
							</div>
							<div class="col-md-12 mb-3">
								<label for="firstName">Enter html & php code:</label>
								<textarea class="form-control" id="code" rows="11" name="code">{{$edit->code}}</textarea>
								<div id="code_div" style="    height: 400px;"></div>
							</div>
						</div>
						<button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>


	 <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  
		<script>
		tinymce.init({
		    selector: '#content'
		  }); 
		</script>

	<script  src="https://code.jquery.com/jquery-2.2.4.js"  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="  crossorigin="anonymous"></script> 
					<script src="http://cdnjs.cloudflare.com/ajax/libs/ace/1.1.3/ace.js" type="text/javascript" charset="utf-8"></script>
					<script>

						var html_editor = ace.edit("code_div");
						var textarea = $('textarea[name="code"]').hide();
						    html_editor.setTheme("ace/theme/monokai");
						    html_editor.getSession().setMode("ace/mode/html");
						    html_editor.setShowPrintMargin(false);
						    html_editor.getSession().setValue(textarea.val());
						    html_editor.getSession().on('change', function(){
						      textarea.val(html_editor.getSession().getValue());
						    });
					</script>	
@endsection
