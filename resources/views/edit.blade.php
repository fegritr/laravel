@extends('layouts.master')

@section('title')
    Edit
@endsection
    
@section('content')
    <form action="/{{$datas->id}}" method="post">
    <div class="form-group" >
      <label for="item">Item:</label>
      <input type="text" class="form-control" id="item" value="{{$datas->item}}" name="item">
    </div>
    <div class="form-group">
      <label for="count">Count:</label>
      <input type="text" class="form-control" id="count" value="{{$datas->count}}" name="count">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="price" value="{{$datas->price}}" name="price">
    </div>
    <div class="form-group">
      <label for="text">Paid:</label>
      <input type="text" class="form-control" id="paid" value="{{$datas->paid}}" name="paid">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
         {{ csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
    </form>

    @endsection