@extends('posts.layout')
  
@section('content')
<div class="card" id="post-form">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <img src=https://cache.giaohangtietkiem.vn/image/show/cdae6e60-a952-4bda-97df-fe0e86c23e85/f5d3bd18-6159-4aa2-b3b7-37f959d1d5e7.jpg?width=100" width="200px" style="margin-bottom: 2%;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $post->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $post->description }}
            </div>
        </div>
    </div>
@endsection