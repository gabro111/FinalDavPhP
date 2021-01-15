@extends('layout')
@section('content')
<form method="post" id="editform" action="{{route('productDesc.update',$product->id)}}">
    @method('PATCH') 
    @csrf
    
    <div class="form-group">

        <label for="first_name">Name:</label>
        <input type="text" class="form-control" name="name" value={{ $product->name }} />
    </div>

    <div class="form-group">
        <label for="last_name">Description:</label>
        <input type="text" class="form-control" name="description" value={{ $product->description }} />
    </div>

    
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
</div>    

@endsection

