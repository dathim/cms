@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('pages.brows')           

       <div class="col-md-9">
        <div class="card">
            <div class="card-header">PageName <a href="#">settings</a> <a href="#">open</a> <a href="#">add new</a> <a href="#">delete</a> </div>

            <div class="card-body">
              @if (\Session::has('success'))
                  <div class="alert alert-success">
                        <p class="mb-0"> {!! \Session::get('success') !!}</p>
                  </div>
              @endif

              
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">Code</div>
            <div class="card-body">
                Ace editor 
            </div>
        </div>
    </div>
</div>
</div>
@endsection
