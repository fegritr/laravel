@extends('layouts.master')

@section('title')
    Create
@endsection
    
@section('content')
    

    <div class="container">
  <h2>Create Form</h2>
  <form action="/" method="post">
    <div class="form-group" >
      <label for="email">Item:</label>
      <input type="text" class="form-control" id="item" placeholder="Item" name="item">
    </div>
    <div class="form-group">
      <label for="pwd">Count:</label>
      <input type="text" class="form-control" id="count" placeholder="Count" name="count">
    </div>
    <div class="form-group">
      <label for="pwd">Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Price" name="price">
    </div>
    <div class="form-group">
      <label for="pwd">Paid:</label>
      <input type="text" class="form-control" id="paid" placeholder="Paid" name="paid">
    </div>
    {{ csrf_field()}}

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
    @endsection