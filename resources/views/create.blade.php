@extends('layout')
@section('content')

<form action="{{route('product.store')}}" method="post">
    @csrf
    <div class="form-group">
        <input class="form-control" type="text" name="name" placeholder="Enter Product Name:">
        <input class="form-control" type="number" name="price" placeholder="Enter Product Price:">
        <input class="form-control" type="number" name="count" placeholder="Enter Product Count:">
        
    </div>

    <button class="btn btn-primary" type="submit">Submit</button>
    
</form>
    
@endsection