@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/posts" class="btn btn-primary">Go back</a>
            <br><br>
            <div class="card">
                <div class="card-header"><b><h3>{{$post->title}}</h3></b></div>

                <div class="card-body">
                    <div>
                        {!!$post->body!!}
                    </div>
                    <hr>
                    <small>Written on {{$post->created_at}}</small>
                    <hr>
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                    
                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
