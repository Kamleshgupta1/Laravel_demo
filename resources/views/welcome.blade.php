@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Posts</a>
                    <br><br>
                    <h3>Your Blog Posts.</h3>
                    
                
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>

                     
                    </table>
               
                        <h4>Youd have no posts.</h4>
                    
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
