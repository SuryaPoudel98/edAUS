@extends('dashboard.master')

@section('content')
   <div class="container">
                <div class="row">
                                <div class="col-lg-9 margin-tb">
                                    <div class="pull-left">
                                        <h2>all Parent content </h2>
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-success" href=" {{ url('/add-parentcontent') }}"> Add New ParentContent</a>
                                    </div>
                                </div>
                </div>
                @if(Session::has('parentcontent_deleted'))
                            <p class="alert alert-success"> {{ Session::get('parentcontent_deleted') }}</p>
                @endif
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">Parentpage_id</th>
                            <th scope="col">Description</th>
                            <th scope="col">images</th>  
                            <th scope="col">Action</th>  



                           </tr>
                        </thead>
                        <tbody>
                            @foreach ( $parentcontents as  $parentcontent )
                                
                           
                            <tr>
                                <th scope="row">{{  $parentcontent->id}}</th>
                                <td> {{ $parentcontent->parentpage->title}} </td>
                                <td style="width: 700px;">{!! $parentcontent->text !!}</td>
                                <td> <img src="uploads/thumbnailimg/{{ $parentcontent->Thumbnailimg }} " width="100px"> </td>
                                <td >
                                  <a href="/edit-parentcontent/{{ $parentcontent->id}}" class="btn btn-info">Edit </a> 
                        
                                  <a href="/delete-parenentcontent/{{ $parentcontent->id}}" class="btn btn-danger" >Delete </a>
                                 </td>


                           
                            </tr>

                            @endforeach
                            
                          
                        </tbody>
                        </table>

               
                </table>


   </div>



@endsection