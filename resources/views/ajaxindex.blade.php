@extends('layout')
@section('content')

<div class="container">


    
    <h1>All the Products</h1>
        
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                
                <td>desc</td>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $key => $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->description }}</td>
                
    
                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('productDesc/' . $value->id . '/edit') }}">Edit</a>
                    <form action="{{route('productDesc.destroy',$value->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
    </div>

    
@endsection