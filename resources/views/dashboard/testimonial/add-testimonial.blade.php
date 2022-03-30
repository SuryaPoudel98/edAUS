@extends('dashboard.master')

@section('content')
<div>
         <div class="grid-form1">
          
            
               <a href="{{ url('/Sliderimage') }}" class="btn btn-primary float-end"> view all Testimonial </a>
            
                       @if(Session::has('testimonial_added'))
                            <p class="alert alert-success"  > {{ Session::get('testimonial_added') }}</p>
                        @endif
            <form class="form-horizontal" action="{{ route('Testimonial.store') }}" method="POST"  enctype="multipart/form-data" >
                @csrf
                   
                    <div class="form-group">
                        <div>
                        <label for="for description"  class="col-sm-2 control-label hor-form" >Name</label>
                        </div>
                        <div class="col-sm-10">                                  
                        <input type="text" class="col-xs-4" id="name" name="name" placeholder="Enter Full Name">
                        </div>
                        <span style="text-color:red;" >@error('name')
                            <div class="error">{{ $message }}</div>
                           @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <div>
                        <label for="for description"  class="col-sm-2 control-label hor-form" >Note</label>
                        </div>
                        <div class="col-sm-10">                                  
                        <textarea name="description">

                        </textarea>
                        </div>
                        <span style="text-color:red;">@error('description')>
                            <div class="error">{{ $message }}</div>
                           @enderror
                        </span>
                    </div>
                    <div class="form-group " Style=" display:inline-flex; margin-left:35px;">
                    <label for="exampleInputFile"  class="col-sm-2 control-label hor-form">  Photo</label>
                        <input type="file" Style="margin-left:55px " name="image" placeholder="image" onclick="alert('image size should be width=260px and height=342px');">

                        <div>
                            @error('image')
                            <div class="error">{{ $message }}</div>
                           @enderror
                        </div>
                    </div>
                     
                  
                   
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Add</button>
                        </div>
                    </div>
             </form>
        </div>
 <div> 
    

 

 


 @endsection
