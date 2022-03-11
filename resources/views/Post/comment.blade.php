@extends('layouts.master')
@section('content')

<div class="col-lg-8">

<!-- Title -->


<!-- Comments Form -->


<div class="card my-4">
  <h5 class="card-header">Leave a Comment:</h5>
  <div class="card-body">
    <form method="POST" action="{{route('createcomment')}}">
    @csrf
      <div class="form-group">
        <textarea class="form-control" rows="3">{{$comments->comment}}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<!-- Single Comment -->
@foreach($comments as $comment)
<div class="media mb-4">
  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
  <div class="media-body">
    <h5 class="mt-0">{{$comment->id}}</h5>
      <p>{{$comment->comment}}</p>
      <i></i>
  </div>
</div>
@endforeach
<!-- Comment with nested comments -->
<div class="media mb-4">
  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
    <div class="media-body">
      <h5 class="mt-0">Commenter Name</h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>

    <div class="media mt-4">
      <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
      <div class="media-body">
          <h5 class="mt-0">Commenter Name</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
  <!-- </div> -->
</div>

</div>
@endsection