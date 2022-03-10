
<!DOCTYPE html>
<html lang="en">
@include('frontend1.layouts.master')

	
<body>
<!-- banner -->
@include('frontend1.layouts.header') 

<!--/ banner -->
<div class="banner1">
		<div class="w3_agileits_service_banner_info">
			<h2>{{ $childContentDetails[0]->childpage->child_title}}</h2>
		</div>
	</div>
<!--/ banner -->



<!-- services -->
	<div >
		<div class="container">
			
			<div class="agile_inner_grids">	
				<div class="col-md-12 wthree_services_grid_left">
					@isset($childContentDetails[0]->Thumbnailimg)
						
					

					   <img class="img-fluid" width="100%" src="{{url('uploads/childcontentimg/').'/'.$childContentDetails[0]->Thumbnailimg }}">
				    
				    @endisset
					    <h3> <span>{{ $childContentDetails[0]->childpage->child_title}}</span> </h3>
				     	<h4>{{ $childContentDetails[0]->childpage->child_title}}</h4>
				 	     <p>{!! $childContentDetails[0]->text !!} .</p>
						
					
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
@include('frontend1.layouts.footer')


</body>
</html>