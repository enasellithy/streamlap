@extends('layouts.app')
@section('content')
<div class="container">
    <h1>All Posts</h1>
    <a href="{{route('post.create')}}" class="btn btn-info">Create</a>
    <hr>
<table class="table table-border">
    <tr>
        <th>Title</th>
         <th>Created At</th>
    </tr>
   @foreach($posts as $post)
   <tr>
       <td>{{$post->title}}</td>
       <td>{{date('M j, Y ',strtotime($post->created_at))}}</td>
   </tr>
   @endforeach
</table>
</div>
@endsection