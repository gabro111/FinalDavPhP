@extends('layout')


@section('content')
    



<form id="myForm" name="myForm" method="POST" >
    {{ csrf_field() }}
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" id="name" name="name"
                placeholder="Enter name" value="">
    </div>

    <div class="form-group">
        <label>Description</label>
            <input type="text" class="form-control" id="description" name="description"
                placeholder="Enter Description" value="">
    </div>

    <button type="submit" class="btn btn-primary" id="ajaxSubmit">Submit</button>
</form>



<script> 
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });</script>
    
    <script>
    
    
    
        $(document).ready(function(){
        
        
            $('#ajaxSubmit').click(function (e){
                e.preventDefault();
                $.ajax({
                    url: "{{route("productDesc.store")}}",
                    method: 'POST',
                    data:{name:$("#name").val(),description:$("#description").val()},  
                    dataType:"json",   
                    success: function(response){
                        window.location.href = "productDesc";       
                    },
                    error:function(response){
                        console.log(response);
                    }
                });
            })
        
        });
                
        </script>



@endsection

