@extends('layout')
@section('content')
<form method="post" action="{{route('product.update',$product->id)}}">
    @method('PATCH') 
    @csrf
    <div class="form-group">

        <label for="first_name">Name:</label>
        <input type="text" class="form-control" name="name" value={{ $product->name }} />
    </div>

    <div class="form-group">
        <label for="last_name">Price:</label>
        <input type="text" class="form-control" name="price" value={{ $product->price }} />
    </div>

    <div class="form-group">
        <label for="email">Count:</label>
        <input type="text" class="form-control" name="count" value={{ $product->count }} />
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>    

@endsection