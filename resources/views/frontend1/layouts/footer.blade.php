	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_agile_footer_grids">
				 <div class="col-md-4 w3_agile_footer_grid">
				<a href="{{ url('pages/').'/'.$id=1  }}" >	  <h3>About Us</h3> </a>
					<ul class="agile_footer_grid_list">
						<li>
							EDAUS is an acronym that stands for EDucationAndUS. 
							EDAUS STUDY SERVICES (previously known as RIGHT EDUCATION CONSULTANCY) is a 
							Nepal-based competent educational services provider
					    </li>
						
					</ul>
				</div> 
				<div class="col-md-3 w3_agile_footer_grid">
					<h3>Navigation</h3>
					<ul class="agileits_w3layouts_footer_grid_list">
						<li><a href="{{ url('/')}}">Home</a></li>
						<li>
							<a href="{{ url('/')}}#services" onclick="">Services</a></li>
						
						<li><a href="{{url('/contact')}}">Mail Us</a>
						</li>
					</ul>
				</div>
				<div class="col-md-2 w3_agile_footer_grid">
					<h3>Useful Links</h3>
					<ul class="agileits_w3layouts_footer_grid_list">
						<li><a href="https://www.studyaustralia.gov.au">Study Australia</a></li>
						<li>
							<a href="https://moe.gov.np">NOC FORM 
						    </a>
						</li>
						<li><a
								href="https://www.vfsglobal.com">VFS Global</a></li>
						<li><a href="https://www.pearsonpte.com">Pearson PTE</a>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 w3_agile_footer_grid">
					<h3>Office</h3>
					<ul class="agile_footer_grid_list">
						<li> Nayabazar-08, Pokhara  </li>
						<li> Opposite of Sajha prakshan  </li>
						<li>  info@edaus.edu.np </li>
					
						
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			
			<div class="agileinfo_copyright">
				<p>© 2017 EDAUS EDUCATIONAL CONSULTANCY. All Rights Reserved | Design by <a href="#">Tuki Soft</a>
				</p>
			</div>
		</div>
	</div>
	<!-- //footer -->

	<!-- start-smoth-scrolling -->
	<!-- js -->
	<script type="text/javascript" src="{{ asset('frontend/js/jquery-2.1.4.min.js') }}"></script>
	<!-- //js -->
	<script src="{{ asset('frontend/js/JiSlider.js') }}"></script>
	<script>
		$(window).load(function () {
			$('#JiSlider').JiSlider({ color: '#fff', start: 3, reverse: true }).addClass('ff')
		})
	</script>
	<!-- <script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36251023-1']);
		_gaq.push(['_setDomainName', 'jqueryscript.net']);
		_gaq.push(['_trackPageview']);

		(function () {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script> -->
	<!-- stats -->
	<!-- <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.countup.js') }}"></script> -->
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- <script type="text/javascript">
		$(function () {
			$("#bars li .bar").each(function (key, bar) {
				var percentage = $(this).data('percentage');

				$(this).animate({
					'height': percentage + '%'
				}, 1000);
			})
		})
	</script> -->
	<!-- flexisel -->
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.flexisel.js') }}"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 667,
						visibleItems: 2
					},
					tablet: {
						changePoint: 800,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<!-- //flexisel -->
	<!-- requried-jsfiles-for owl -->
	<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo2").owlCarousel({
				items: 1,
				lazyLoad: false,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->


	<script type="text/javascript" src="{{ asset('frontend/js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/easing.js') }}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- for bootstrap working -->
	<script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
	<!-- //for bootstrap working -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<script> 
          const targetDiv = document.getElementById("service");
		  a.onclick = function () {
              
                targetDiv.style.display = "block";
              
                  };
	</script>
	<!-- //here ends scrolling icon -->