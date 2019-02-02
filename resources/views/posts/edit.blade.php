@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/posts" class="btn btn-primary">Go back</a>
            <br><br>
            <div class="card">
                <div class="card-header"><b><h3>Edit Post</h3></b></div>

                <div class="card-body">
                    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::label('title', 'Title')}}
                            {{Form::text('title', $post->title, ['class'=> 'form-control', 'placeholder'=> 'Title'])}}
                            
                            {{Form::label('body', 'Body')}}
                            {{Form::textarea('body', $post->body, [ 'class' => 'form-control', 'placeholder' => 'Type your mind here...'])}}
                        </div>
                        {{form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
                    {!! Form::close() !!}    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
