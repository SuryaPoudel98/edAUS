
	<!-- banner -->
<?php

		use App\Models\SelectClass;

		$sc = new SelectClass();

		$aboutsubheadings = $sc->selectSubHeading("About");

		$testpreparationsubheadings = $sc->selectSubHeading("Test Preparation");
		$australianedusubheadings = $sc->selectSubHeading("Australian Education");




		

 
?>






	<!-- jafljla -->

	
	<div class="main_section_agile">
		<div class="agileits_w3layouts_banner_nav">

			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="{{ url('/')}}">
							<img src="{{ asset('frontend/images/logo.png') }}" height="55"></a></h1>

				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{ url('/')}}" class="effect-3">Home</a></li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">About <b class="caret">   </b>   </a>
								<ul class="dropdown-menu agile_short_dropdown">
									@foreach ( $aboutsubheadings as $subheading )
									  <li><a href="{{ url('pages/').'/'.$subheading->id }}">{{ $subheading->child_title }}</a></li>
									@endforeach	
									
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown"> Australian Education <b  class="caret"></b>   </a>
								<ul class="dropdown-menu agile_short_dropdown">
									@foreach($australianedusubheadings as $subheading)
									<li><a href="{{ url('pages/').'/'.$subheading->id }}">{{ $subheading-> child_title }}</a></li>
									@endforeach
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Test Preparation <b  class="caret"></b>   </a>
								<ul class="dropdown-menu agile_short_dropdown">
									@foreach($testpreparationsubheadings as $subheading)
									<li><a href="{{ url('pages/').'/'.$subheading->id }}">{{ $subheading->child_title  }}</a></li>	
									@endforeach				
								</ul>
							</li>
							
							<li><a href="{{ url('/contact')}}" class="effect-3">Contact  Us</a></li>
						</ul>
					</nav>

				</div>
			</nav>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- banner -->