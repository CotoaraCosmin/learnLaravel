      @extends('layouts.app')

      @section('content')
      <div class="jumbotron text-center">
      <h2>{{$title}}</h2>
      <p>Laravel application from the Laravel youtube series :))</p>
      <p><a class="btn btn-primary btn-lg" href="/learnLaravel/public/login" role="button">Login</a><span><a class="btn btn-success btn-lg" href="/learnLaravel/public/register" role="button">Register</a></span></p>
    </div>
      @endsection

