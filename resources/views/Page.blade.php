@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3"> 
            <div class="card">
                <div class="card-header">Page tree</div>

                <div class="card-body">
                    <ul>
                        <li>
                            <a href="more">Главная</a>
                            <ul>
                               <li><a href="more">PageName</a></li>
                               <li><a href="more">PageName</a></li>
                           </ul>   
                           <li><a href="more">PageName</a></li>
                           <li><a href="more">PageName</a></li>
                           <li><a href="more">PageName</a></li>
                       </li>
                   </ul>
               </div>
           </div>
       </div>        

       <div class="col-md-9">
        <div class="card">
            <div class="card-header">PageName <a href="#">settings</a> <a href="#">open</a> <a href="#">add new</a> <a href="#">delete</a> </div>

            <div class="card-body">
               Ckeditor - WYSIWYG edirot
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
