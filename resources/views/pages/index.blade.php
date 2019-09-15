@extends ('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This is a laravel application from "Laravel From Scratch" Youtube series</p>
    <p><a href="/login" class="btn btn-primary btn-lg" role="button">Login</a> <a href="/register" class="btn btn-success btn-lg" role="button">Register</a></p>
</div>
    
@endsection