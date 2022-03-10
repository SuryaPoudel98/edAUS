@extends('dashboard.master')

@section('content')
<div>
         <div class="grid-form1">
          <h3 id="forms-horizontal">Edit Parent page</h3>
            
               <a href="{{ url('/all-parentpage')}}" class="btn btn-primary float-end"> view all Parentpage</a>
            
                @if(Session::has('parentpage_updated'))
                            <p class="alert alert-success"  > {{ Session::get('parentpage_updated') }}</p>
                        @endif
            <form class="form-horizontal" action="{{ route('parentpage.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $parentpage->id }}"/>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label hor-form">Page title</label>
                        <div class="col-sm-10">
                        <input type="text" class="col-xs-4 " id="title" name="title" value="{{ $parentpage->title }}"  placeholder="Enter page title">
                        </div>
                    </div>
                    <div class="form-group" Style="display:inline-flex; margin-left:35px;" >
                        <label for="child" >choose option</label>
                        <select name="ischild" class="form-select form-select-sm" Style="margin-left:23px" value="{{ $parentpage->ischild }}"  >                           
                            <option value="1" >has childPage</option>
                            <option value="0">No child</option>
                            
                       </select>   
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
