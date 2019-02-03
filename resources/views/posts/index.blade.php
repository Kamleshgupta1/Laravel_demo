@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b><h3>Your Posts</h3></b></div>

                <div class="card-body">
                   @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <div class = "card">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img style="width:100%;margin:5px;" src="/storage/cover_images/{{$post->cover_image}}">
                                    </div>
                                    
                                    <div class="col-md-8 col-sm-8">
                                        <div class="card-header" style="margin:5px;"><h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3></div>
                                        <div class="card-body">                              
                                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            <br>
                        @endforeach
                        {{$posts->links()}}
                   @else
                    <p>No post yet.</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
