@extends('layouts.app')

@section('content')
      <h2>{{$htmlcssTitle}}</h2>
           <ul class="list-group">
                <li class="list-group-item"><a href="/learnLaravel/public/playground/services">{{$htmlcss}}</a></li>
           </ul>
      <h2>{{$vuejsTitle}}</h2>
           <ul class="list-group">
                <li class="list-group-item"><a href="/learnLaravel/public/playground/vuejs">{{$vuejsDescription}}</a></li>
           </ul>
@endsection