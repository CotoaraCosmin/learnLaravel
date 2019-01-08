@extends('layouts.app')

@section('content')
      <h2>{{$title}}</h2>
           <ul class="list-group">
            <li class="list-group-item"><a href="/learnLaravel/public/services/htmlcss">{{$HTML}}</a></li>
            <li class="list-group-item"><a href="/learnLaravel/public/services/css">{{$CSS}}</a></li>
            <li class="list-group-item"><a href="/learnLaravel/public/services/visual">{{$Visual}}</a></li>
           </ul>
@endsection
