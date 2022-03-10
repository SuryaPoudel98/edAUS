@extends('dashboard.master')

@section('content')
<div>
         <div class="grid-form1">
          <h3 id="forms-horizontal">Edit Slider Image</h3>
            
               <a href="{{ route('Sliderimage.index')}}" class="btn btn-primary float-end"> view all Parentpage</a>
            
                @if(Session::has('success'))
                            <p class="alert alert-success"  > {{ Session::get('success') }}</p>
                        @endif

                        @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif        
            <form class="form-horizontal" action="{{ route('Sliderimage.update',$sliderimage->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $sliderimage->id }}"/>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label hor-form">Image Caption</label>
                        <div class="col-sm-10">
                        <input type="text" class="col-xs-4" id="name" name="name" value="{{ $sliderimage->name }}"  placeholder="Enter page title">
                        </div>
                    </div>
                    <div class="form-group " Style=" display:inline-flex; margin-left:35px;">
                        <label for="image">Image input</label>
                        <input type="file"  Style="margin-left:40px " name="image" placeholder="image" onchange="previewFile(this)">
                        <img  id="previewImg" src="" alt="image" style="max-width:130px;margin-top:20px;" onerror='this.style.display = "none"' > 
   

                    </div>
                  
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
             </form>
        </div>
 <div>    

 @endsection

 <script> 
        function previewFile(input)
            {
                var file=$("input[type=file]").get(0).files[0];
                if(file)
                {
                    var reader= new FileReader();
                    reader.onload = function()
                    {
                        $('#previewImg').attr("src",reader.result);

                    }
                    reader.readAsDataURL(file);
                }
            }

            
</script>
<script> 
   function hideImg() 
    {
        document.getElementById("previewImg")
                          .style.display = "none";
    }
</script>