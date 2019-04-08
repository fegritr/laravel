@extends('layouts.master')

@section('title')
    Index
@endsection
    
@section('content')
    <form action="/create" method=""> 
    <input type="submit" name="submit" value="Tambah">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value=""></form></td>
     
    <table id="example" class="display" style="width:100%" >
    <br>
        <thead>
            <tr>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Item</th>
                <th>Count</th>
                <th>Price</th>
                <th>Paid</th>
                <th>Action</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($datas as $data)
            <tr>
                <td>{{$data->created_at}}</td>
                <td>{{$data->updated_at}}</td>
                <td>{{$data->item}}</td>
                <td>{{$data->count}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->paid}}</td>
                <td><a href="/{{$data->id}}/edit">Update</a>
                <td><form action="/{{$data->id}}" method="post"> <input type="submit" name="submit" value="Delete">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE"></form></td>
                
            </tr>
            @endforeach
        </tbody>
        
        <tfoot>
            <tr>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Item</th>
                <th>Count</th>
                <th>Price</th>
                <th>Paid</th>
                <th>Action</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table>
    @endsection

