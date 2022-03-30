@extends('dashboard.master')

@section('content')
<div>
         <div class="grid-form1">
          
            
               <a href="{{ url('/all-parentpage')}}" class="btn btn-primary float-end"> View All Parentpage</a>
            
                @if(Session::has('parentpage_added'))
                            <p class="alert alert-success"  > {{ Session::get('parentpage_added') }}</p>
                        @endif
            <form class="form-horizontal" action="{{ route('addparentpage.store') }}" method="POST">
                @csrf
                    <div class="form-group" >
                        <label for="title" class="col-xs-2 control-label">Page Title</label>
                        <div class="col-sm-10">
                        <input type="text" class="col-xs-4 " id="title" name="title" placeholder="Enter Page Title" required>
                        @error('title')
                          <div class=" col-xs-4  alert alert-danger mt-1 mb-1 p-2" style="height:10px;">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group" Style="display:inline-flex; margin-left:35px;" >
                        <label for="page"  >Child Page</label>
                        <select name="ischild" class="form-select form-select-sm" Style="margin-left:50px ">                           
                             <option value="0">No child</option>                            
                             <option value="1" >Has childPage</option>
                            
                       </select>   
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
