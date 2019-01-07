@extends ('layouts.app')

@section('content')
   <h2>Posts</h2>
   @if(count($posts)>0)
      @foreach($posts as $post) 
        <div class="card card-body bg-light">
        <h4><a href="/learnLaravel/public/posts/{{$post->id}}">{{$post->title}}</a></h4>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        </div>
      @endforeach
      {{$posts->links()}}
   @else
    <p>No posts found</p>
   @endif
@endsection   