@extends('layouts.master')
@section('content')

<div class="col-md-8">

        <h1 class="my-4">Kindly
          <small>Login</small>
        </h1>

        <!-- Blog Post -->
        <!-- <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div> -->
        
        <div class="signup-page">
            <form class="form-horizontal" action="">
                <div id="form-content">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="your mail" >
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password"  id="password" placeholder="your password">
                    </div>
                </div>
                <!-- <input type="submit" value="Sign Up" class="form-control" name="submit"> -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

                

            </form>
    </div>
  
    </div>

    





        <script src="js/script.js"></script>
        <script src="{{ asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  @endsection