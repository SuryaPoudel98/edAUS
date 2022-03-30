<!-- banner -->
<?php

use App\Models\SelectClass;

$sc = new SelectClass();

$aboutsubheadings = $sc->selectSubHeading("About");

$testpreparationsubheadings = $sc->selectSubHeading("Test Preparation");
$australianedusubheadings = $sc->selectSubHeading("Australian Education");

$selectTestimonials = $sc->selectTestimonial();








?>





<div class="main_section_agile">
	<div class="agileits_w3layouts_banner_nav">





		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
					
						<li class="dropdown">
							<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">KNOW US <b class="caret"> </b> </a>
							<ul class="dropdown-menu agile_short_dropdown">
								@foreach ( $aboutsubheadings as $subheading )
								<li><a href="{{ url('pages/').'/'.$subheading->id }}">{{ $subheading->child_title }}</a></li>
								@endforeach

								<li><a href="/contact">contact us</a></li>
                              
							</ul>
						</li>
                        
						<li class="dropdown">
							<a class="dropdown-toggle  effect-3" href="#"  data-toggle="dropdown" >
								OUR SERVICES <b class="caret"> </b>
							</a>
							<ul class="dropdown-menu agile_short_dropdown">

                           



								<li class="nav-item dropdown">
									<a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										STUDY  <b style="text-align: right;" class="caret-right"> </b>
									</a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a class="dropdown-item" href="{{ url('pages/').'/'.$id=18  }} ">AUSTRALIA</a></li>
										<li><a class="dropdown-item" href=" {{ url('pages/').'/'.$id=17  }}">CANADA</a></li>
										


									</ul>
								</li>


                                <li class="nav-item dropdown">
									<a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										VISA <b style="text-align: right;" class="caret-right"> </b>
									</a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a class="dropdown-item" href="{{ url('pages/').'/'.$id=13  }}">AUSTRALIA</a></li>
										<li><a class="dropdown-item" href="{{ url('pages/').'/'.$id=19 }}">CANADA</a></li>
										


									</ul>
								</li>
								
                                <li class="nav-item dropdown">
									<a class="dropdown-item " href="{{ url('pages/').'/'.$id=16  }}" id="navbarDropdown1" role="button" aria-haspopup="true">
										IELTS/PTE
									</a>
								</li>
                                <li class="nav-item dropdown">
									<a class="dropdown-item " href="{{ url('pages/').'/'.$id=20  }}"  role="button"  aria-haspopup="true" aria-expanded="false">
										COUNSELLING
									</a>
								</li>

                                <li class="nav-item dropdown">
									<a class="dropdown-item " href="{{ url('pages/').'/'.$id=21  }}"  aria-haspopup="true" aria-expanded="false">
										HEALTH INSURANCE
									</a>
								</li>

                                <li class="nav-item dropdown">
									<a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										ADMISSION <b style="text-align: right;" class="caret-right"> </b>
									</a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a class="dropdown-item" href="{{ url('pages/').'/'.$id=22  }}">AUSTRALIA</a></li>
										<li><a class="dropdown-item" href="{{ url('pages/').'/'.$id=23 }}">CANADA</a></li>
										


									</ul>
								</li>
							</ul>
						</li>
				
					
						<li class="dropdown">
							<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown"> Australian Education <b class="caret"></b> </a>
							<ul class="dropdown-menu agile_short_dropdown">
								@foreach($australianedusubheadings as $subheading)
								<li><a href="{{ url('pages/').'/'.$subheading->id }}">{{ $subheading-> child_title }}</a></li>
								@endforeach
							</ul>
						</li>
						

                        <li class="dropdown">
							<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown"> CANADIAN Education <b class="caret"></b> </a>
							<ul class="dropdown-menu agile_short_dropdown">								
								<li><a href="{{ url('pages/').'/'.$id=27  }}">ABOUT CANADA</a></li>
								<li><a href="{{ url('pages/').'/'.$id=28  }}">WHY CANADA</a></li>
								<li><a href="{{ url('pages/').'/'.$id=29  }}">COLLEGES AND UNIVERSITIES</a></li>
								<li><a href="{{ url('pages/').'/'.$id=30  }}">POPULAR COURSES</a></li>
								<li><a href="{{ url('pages/').'/'.$id=31  }}">EDUCATION SYSTEM IN CANADA</a></li>





							</ul>
						</li>
						
					</ul>
				</nav>

			</div>
		</nav>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- banner -->