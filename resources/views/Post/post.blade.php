@extends('layouts.master')
@section('content')

<div class="col-lg-8">

<!-- Title -->
<h1 class="mt-4">{{$post->title}}</h1>

<!-- Preview Image -->
<!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->

<hr>

<!-- Post Content -->
<!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p> -->

<p>{{$post->content}}</p>

<hr>

<!-- Comments Form -->

<div class="card my-4">
  <h5 class="card-header">Leave a Comment:</h5>
  <div class="card-body">
    <form method="POST" action="{{route('createcomment', $post->id)}}">
    @csrf
    <input type="hidden" name="post_id" value="{{$post->id}}">
      <div class="form-group">
        <textarea class="form-control" rows="3" name="comment" ></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Comment</button>
    </form>
  </div>

  <!-- Comment with nested comments -->
  @foreach($post->comments as $comment)
    <div class="media mb-4">
      <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
      <div class="media-body">
        <h5 class="mt-0">Commenter Name</h5>
        {{$comment->comment}};
        <p><i>Posted on {{$post->created_at}}</i></p>

      </div>
    </div>
@endforeach




</div>

<!-- Single Comment -->
</div>

@endsection