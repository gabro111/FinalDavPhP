@extends('layout')
@section('content')

<div class="container">


    
    <h1>All the Products</h1>
        
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Price</td>
                <td>Count</td>
                <td>Description<--Relation From Another Table</td>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->price }}</td>
                <td>{{ $value->count }}</td>

                <td>{{ $value->desc->description ?? 'No description'}}</td> 
                
                
                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('product/' . $value->id . '/edit') }}">Edit</a>

                    <form action="{{route('product.destroy',$value->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    
    
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
    </div>

    
@endsection