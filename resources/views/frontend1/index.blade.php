<!doctype html>
<html lang="en">

@include('frontend1.layouts.master')

<body>
@include('frontend1.layouts.header')

  <!-- php -->
  <?php

use App\Models\SelectClass;

$sc = new SelectClass();



$selectTestimonials = $sc->selectTestimonial();








?>


  <!-- endphp -->



	<!-- banner -->
	<div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				@foreach ($sliders as $slider)

				<li>
					<div class="w3layouts-banner-top">

						<div class="container">
							<div class="agileits-banner-info">

								<img src="uploads/slider/{{$slider->image}}" width="100%">

							</div>
						</div>
					</div>
				</li>
				@endforeach







			</ul>
		</div>
	</div>

	<!-- //banner -->


	<!-- study australia -->

	<div style="background-color: #f5f8fb;;" class="inner_main_agile_section">
		<div class="container">



			<div class="agile_inner_grids">

				<div class="col-md-12 ">
					<h3 style="text-align: center;" class="w3l_header w3_agileits_header"> Study <span> Australia</span></h3>
					</br>

					<p style="text-align: center; padding:15px 5px 10px 5px; ">

						Australia is home to over 600,000 students who study each year. They choose to study in Australia because of the high-quality education offered by the country's educational institutions. Since it adds much more significance to students' lives and assist them build their career opportunities anywhere in globe.
						Australia is a wonderful country with stunning scenery and attractions that appeal to visitors from all over the world. All of these natural experiences are accessible to you while studying in Australia.
						Australia is particularly proud of its cultural diversity, with around one-fourth of the population born outside of the country. Individuals in Australia are very friendly, and studying here allows you to make friends from all over the world.
						Australian universities are consistently ranked among the best universities in the world, and many employers and other institutions value Australian qualifications.

					<div class="more" style="text-align: center; margin: top -20px;">
						<a href="{{ url('pages/').'/'.$id=2  }} " class="hvr-shutter-in-vertical">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"> </i>
						</a>
					</div></br>
					</p>



				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>



	<!-- //study australia -->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header two">Our <span>SERVICES</span></h3>
			<!-- <p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p> -->

			<div class="agile_inner_grids">

				<!-- choose icon -->

				<div class="col-md-6 choose_icon">
					<div class="choose_left">
						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</div>
					<div class="choose_right">
						<a href="{{ url('pages/').'/'.$id=11  }}">
							<h3>Study</h3>
						</a>
						<p>Our team of expert counselors will help you choose the best course according to to your academic requirements</p>
					</div>
					<div class="clearfix"></div>
				</div>


				<!-- choose icon -->

				<div class="col-md-6 choose_icon">
					<div class="choose_left">
						<i class="fa fa-university" aria-hidden="true"></i>
					</div>
					<div class="choose_right">
						<a href="{{ url('pages/').'/'.$id=12  }}">
							<h3> Admission</h3>
						</a>
						<p> Applying to Australian Universities is not a cumbersome process, however, international students require stringent planning for it. </p>
					</div>
					<div class="clearfix"></div>
				</div>


				<!-- choose icon -->

				<div class="col-md-6 choose_icon">
					<div class="choose_left">
						<i class="fa fa-cc-visa" aria-hidden="true"></i>
					</div>
					<div class="choose_right">
						<a href="{{ url('pages/').'/'.$id=13  }}">
							<h3>Visa</h3>
						</a>
						<p>We guide you through the visa process and make sure that you have the correct documents ready for visa application.</p>
					</div>
					<div class="clearfix"></div>
				</div>




				<div class="col-md-6 choose_icon">
					<div class="choose_left">
						<i class="fa fa-laptop" aria-hidden="true"></i>
					</div>
					<div class="choose_right">
						<a href="{{ url('pages/').'/'.$id=6  }} ">
							<h3>IELTS/PTE CLASSES</h3>
						</a>
						<p>If you would like to study or live in Australia, New Zealand, Canada, the United States, or the United Kingdom, you must an English proficiency test .</p>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<div style="background-color: #f5f8fb;;" class="inner_main_agile_section">
		<div class="container">



			<div class="agile_inner_grids">

				<div class="col-md-12 ">
					<h3 style="text-align: center;" class="w3l_header w3_agileits_header"> Study IN<span> CANADA</span></h3>
					</br>

					<p style="text-align: center; padding:15px 5px 10px 5px; ">

						If you choose to study in Canada, you'll have the chance to experience a wide range of cultural and natural experiences,
						from British Columbia's ski slopes to Manitoba's prairie provinces, with cities like Toronto, Montréal,
						Vancouver, and Quebec known for their friendliness, tolerance, and multiculturalism.
						Canada, which occupies the northern half of the North American continent, is famed for
						its natural beauty – few countries can match its wealth of woods, lakes, and mountains – as well as its multicultural diversity.
						The country is officially bilingual, with English and French used in government and official papers at the same time.


					<div class="more" style="text-align: center; margin: top -20px;">
						<a href="{{ url('pages/').'/'.$id=2  }} " class="hvr-shutter-in-vertical">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"> </i>
						</a>
					</div></br>
					</p>



				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- testimonails -->


	<div class="test">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header">Happy <span>Clients</span></h3>
		

			<div class="agile_inner_grids">
				<div class="test-gri1">
					<div id="owl-demo2" class="owl-carousel">
					@foreach ( $selectTestimonials as $selectTestimonial )
						
						<div class="agile">
						
								
						
							<div class="test-grid">
								<div class="col-md-8 test-grid1">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p class="para-w3-agile">{{ $selectTestimonial->description }}</p>
									<h4></h4>
									
								</div>
								<div class="col-md-4 test-grid2">
									<img src="uploads/testimonial/{{$selectTestimonial->image }}" alt="" class="img-r">
								</div>
							</div>
							<div class="clearfix">{{ $selectTestimonial->name }}</div>
						</div>
						
						@endforeach
						
						
					</div>
				</div>
			</div>
		</div>
	</div>


	
	<!-- end testimonials -->


	<!-- about -->
	<div style="background-color: #f5f8fb;;" class="inner_main_agile_section">
		<div class="container">


			<!-- <p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p> -->

			<div class="agile_inner_grids">

				<div class="col-md-6 w3_agileits_about_grid_left">
					<h3 style="text-align: left;" class="w3l_header w3_agileits_header">Why Choose <span> Us</span></h3>
					</br>
					<!-- <p>Stem Education Consultants is a company that specializes in the overseas education of students and provides expert education consultation services to parents and students worldwide.</p>
				<br/> -->
					<ul>
						<li> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> We apply our extensive industry knowledge and experience to
							help you in reaching your goals.</li>
						<li> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> We develop strategies which are particularly suited to your
							academic progress.</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> We have such a strong work ethic and long-term client
							relationships.</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> We will assist you in determining the best academic provider and
							course for you.</li>
					</ul>
					<div class="more">
						<a href="{{ url('pages/').'/'.$id=2  }} " class="hvr-shutter-in-vertical">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"> </i>
						</a>
					</div></br>
				</div>
				<div class="col-md-6 w3_agileits_about_grid_right">

					<img src="{{ asset('frontend/images/whyus.png') }}" width="100%">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->



	

	<!-- map -->
	<h3 style="margin-top: 20px;" class="w3l_header w3_agileits_header"> Find <span>Us</span></h3>

	<div class="map">
	
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1757.9145233222919!2d83.98689466441319!3d28.21250607078916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39959500a0c258bf%3A0xb1de8d880cec132e!2sEDAUS%20STUDY%20SERVICE%20PVT.%20LTD.!5e0!3m2!1sen!2snp!4v1648623172894!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
			</iframe>
	
	</div>
	<!-- //map -->



	<!-- our travel partners -->



	<!-- //our travel partners -->

	@include('frontend1.layouts.footer')

</body>

</html>