@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">User Log</div>

                <div class="card-body">
                    <p>12.03.2015 12:23 Vasya > Edit Page "Contacts"</p>
                    <p>12.03.2015 12:23 Vasya > Edit Page "Contacts"</p>
                    <p>12.03.2015 12:23 Vasya > Edit Page "Contacts"</p>
                    <p>12.03.2015 12:23 Vasya > Edit Page "Contacts"</p>
                    <p>12.03.2015 12:23 Vasya > Edit Page "Contacts"</p>
                    <a href="more">more</a>
                </div>
            </div>
        </div>        

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Info</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p>You are logged in!</p>
                    <p>File sustem: 140 mb</p>
                    <p>Admin email: admin@site.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
