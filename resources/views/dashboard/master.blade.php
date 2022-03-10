
<!DOCTYPE HTML>
<html>
<head>
<title>Admin panel </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{ asset('dashboardpublic/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{ asset('dashboardpublic/css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('dashboardpublic/css/font-awesome.css') }}" rel="stylesheet"> 
<script src="{{ asset('dashboardpublic/js/jquery.min.js') }}"> </script>
<!-- Mainly scripts -->
<script src="{{ asset('dashboardpublic/js/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('dashboardpublic/js/jquery.slimscroll.min.js') }}"></script>
<!-- Custom and plugin javascript -->
<link href="{{ asset('dashboardpublic/css/custom.css') }}" rel="stylesheet">
<script src="{{ asset('dashboardpublic/js/custom.js') }}"></script>
<script src="{{ asset('dashboardpublic/js/screenfull.js') }}"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

<!--pie-chart--->
<script src="{{ asset('dashboardpublic/js/pie-chart.js') }}" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!--skycons-icons-->
<script src="{{ asset('dashboardpublic/js/skycons.js') }}"></script>
<!--//skycons-icons-->
</head>
<body>
<div id="wrapper">

<!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="{{ route('dashboard')}}">Dashboard</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	<section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		
			<div class="clearfix">
       
     </div>
	  <!-- slider left side -->
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                   
                        <li>
                            <a href="{{ route('parentpage')}}" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">AddParentPage</span><span class="fa arrow"></span></a>
                          
                        </li>
                        <li>
                            <a href="/add-childpage" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">AddChildPage</span> </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('parentcontent')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">ParentContentPage</span> </a>
                        </li>
						<li>
                            <a href="{{ route('childcontent')}}" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">ChildContentPage</span> </a>
                        </li>
                        <li>
                            <a href="/Sliderimage" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Add Slider images </span><span class="fa arrow"></span></a>
                       
                        </li>
                        <li>
							<div>
						     <form method="post" action="{{ route('logout')}}" >
								@csrf
									<a href="{{route('logout')}}"  class="hvr-bounce-to-right" onclick="event.preventDefault(); this.closest('form').submit();"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">logout </span>  </a>

								
							 </form>
	                        </div>
						</li>
		
                    
                       
                    </ul>
                </div>
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Dashboard</span>
				</h2>
		    </div>
		<!--//banner-->

	
  <div class="banner">  
       @yield('content')
  </div>
		


	 
		<!---->
<div class="copy fixed-bottom">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by Tuki Soft </p>
	    </div>
		</div>
		<div class="clearfix"> </div>
       </div>
</div>
<!---->
<!--scrolling js-->
	<script src="{{ asset('dashboardpublic/js/jquery.nicescroll.js')  }}"></script>
	<script src="{{ asset('dashboardpublic/js/scripts.js') }}"></script>
	<!--//scrolling js-->
	<script src="{{ asset('dashboardpublic/js/bootstrap.min.js') }}"> </script>
	
</body>
</html>
