
<!DOCTYPE html>
<html lang="en">
	
@include('frontend1.layouts.master')

	
<body>
@include('frontend1.layouts.header') 

<!-- banner -->

<!--/ banner -->
<div class="banner1">
			
		<div class="w3_agileits_service_banner_info">
			<h2>Mail Us </h2>
		</div>
	</div>

<!--/ banner -->
	<!-- Modal1 -->
													<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Sign In</h3>	
																			<div class="login-form">
																				<form action="#" method="post">
																					<input type="email" name="email" placeholder="E-mail" required="">
																					<input type="password" name="password" placeholder="Password" required="">
																					<div class="tp">
																						<input type="submit" value="Sign In">
																					</div>
																				</form>
																			</div>
																			<div class="login-social-grids">
																				<ul>
																					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
																					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
																					<li><a href="#"><i class="fa fa-rss"></i></a></li>
																				</ul>
																			</div>
																			<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal1 -->	
													<!-- Modal2 -->
													<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Sign Up</h3>	
																			<div class="login-form">
																				<form action="#" method="post">
																				   <input type="text" name="name" placeholder="Username" required="">
																					<input type="email" name="email" placeholder="Email" required="">
																					<input type="password" name="password" placeholder="Password" required="">
																					<input type="password" name="password" placeholder="Confirm Password" required="">
																					<input type="submit" value="Sign Up">
																				</form>
																			</div>
																			<p><a href="#"> By clicking register, I agree to your terms</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal2 -->	
<!-- /contact -->	
<div class="inner_main_agile_section">
	<div class="container">
	   
			<h3 class="w3l_header w3_agileits_header"> Leave a <span>Message</span></h3>
			<p class="sub_para_agile two">feel free to message us</p>
			 <div class="contact-form agile_inner_grids">
				<form action="/sendmail" method="get">
					@csrf
					<div class="fields-grid">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="fullname" required="">
							<label>Full Name</label>
							<span></span>
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="phone" required=""> 
							<label>Phone</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text" name="email" required="">
							<label>Email</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text" name="subject" required="">
							<label>Subject</label>
							<span></span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="styled-input textarea-grid">
						<textarea name="message" required="">

						</textarea>
						<label>Message</label>
						<span></span>
					</div>	 
					<input type="submit" value="SEND">
				</form>
			</div>
    </div>
</div>
<h3 style="margin-top: 20px;" class="w3l_header w3_agileits_header"> Find <span>Us</span></h3>

<div class="map">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1757.9145233222919!2d83.98689466441319!3d28.21250607078916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39959500a0c258bf%3A0xb1de8d880cec132e!2sEDAUS%20STUDY%20SERVICE%20PVT.%20LTD.!5e0!3m2!1sen!2snp!4v1648623172894!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
		</iframe>

</div>
<!-- //contact -->	
<!-- footer -->
@include('frontend1.layouts.footer')

<!-- //footer -->

</body>
</html>