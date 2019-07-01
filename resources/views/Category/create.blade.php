@extends('layouts.master')
@section('content')

<div class="col-md-8">

        <h1 class="my-4">Kindly
          <small>Create Category</small>
        </h1>
        @include('layouts.anyerror')
        <div class="signup-page">
            <form class="form-horizontal" action="{{route('createcategory')}}" method="POST">
                <div id="form-content">
                    <div class="form-group">
                        <label for="category">Category:</label>
                        <input type="text" class="form-control" name="name" id="category" required placeholder="category name" >
                    </div>

                    <!-- <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password"  id="password" required placeholder="your password">
                    </div> -->
                </div>
                <!-- <input type="submit" value="Sign Up" class="form-control" name="submit"> -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create Category</button>
                </div>
                @csrf
            </form>
    </div>
  
    </div>
        <script src="js/script.js"></script>
        <script src="{{ asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  @endsection