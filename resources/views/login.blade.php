@extends('master')
@section('content');
<div class="container">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <form action="">
        <div class="form-group">
          <label for="exampleInputEmail1">Email Address</label>
          <input type="email" name="email" id="exampleInputEmail1" class="form-control">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" id="exampleInputPassword1" class="form-control">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
