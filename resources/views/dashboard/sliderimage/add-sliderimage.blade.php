@extends('dashboard.master')

@section('content')
<div>
         <div class="grid-form1">
          <h3 id="forms-horizontal">Add image slider</h3>
            
               <a href="{{ url('/Sliderimage') }}" class="btn btn-primary float-end"> view all Parent Contents </a>
            
                       @if(Session::has('parentcontent_added'))
                            <p class="alert alert-success"  > {{ Session::get('parentcontent_added') }}</p>
                        @endif
            <form class="form-horizontal" action="{{ route('Sliderimage.store') }}" method="POST"  enctype="multipart/form-data" >
                @csrf
                   
                    <div class="form-group">
                        <div>
                        <label for="for description"  class="col-sm-2 control-label hor-form" >Image Caption</label>
                        </div>
                        <div class="col-sm-10">                                  
                        <input type="text" class="col-xs-4" id="name" name="name" placeholder="Enter Image Caption">
                        </div>
                    </div>
                    <div class="form-group " Style=" display:inline-flex; margin-left:35px;">
                        <label for="exampleInputFile">Image input</label>
                        <input type="file" Style="margin-left:40px " name="image" placeholder="image" onchange="previewFile(this)">
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
     
 <script src="{{ asset('ckeditor/ckeditor.js')}}">  </script>

 <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script> 
   function hideImg() 
    {
        document.getElementById("previewImg")
                          .style.display = "none";
    }
</script>

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

 @endsection
