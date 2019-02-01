@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b><h4>Your Posts</h4></b></div>

                <div class="card-body">
                   @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <div class = "card">
                                <div class="card-header"><h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3></div>
                                <div class="card-body">                              
                                    <small>Written on {{$post->created_at}}</small>
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
