@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b><h4>{{$post->title}}</h4></b></div>

                <div class="card-body">
                    <div>
                        {{$post->body}}
                    </div>
                    <hr>
                    <small>Written on {{$post->created_at}}</small>
                    <br>
                    <a href="/posts" class="btn btn-default">Go back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
