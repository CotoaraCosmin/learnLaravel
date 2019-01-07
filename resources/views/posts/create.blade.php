@extends ('layouts.app')

@section('content')
   <h2>Create Posts</h2>
   {!! Form::open(['action' =>'PostsController@store', 'method'=>'POST']) !!}
     <div class="form-group">
         {{Form::label('title','Title')}}
         {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'title'])}}
     </div>
     <div class="form-group">
            {{Form::label('body','Body')}}
            <ckeditor></ckeditor>
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'body'])}}
     </div>
     {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
   {!! Form::close() !!}
@endsection

@section('scriptss')
<script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>   
@endsection


