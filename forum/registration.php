<?php
	include "included/header.php";
/*	include "config/function.php";*/
	session_start();
	include_once 'config/main.class.php';
	$user = new Main();

	if (isset($_SESSION['id'])) {
		header("location:index.php");
	}
?>


<!-- <script type="text/javascript">
	function submitreg(){
		var form = document.reg;
		if (form.username.value == "") {
			alert("Please enter your User Name")
			return false;
		}else if (form.password.value == "") {
			alert("Please enter your Password")
			return false;
		}else if (form.password1.value == "") {
			alert("Please enter confirm Password")
			return false;
		}else if (form.password.value != form.password1.value) {
			alert("Password do not match. Please try again.")
			return false;
		}else if (form.email.value == "") {
			alert("Please enter your Email")
			return false;
		}else if (form.email1.value == "") {
			alert("Please enter confirm Email")
			return false;
		}else if (form.email.value != form.email1.value) {
			alert("Email do not match. Please try again.")
			return true;
		}else if (form.firstname.value == "") {
			alert("Please enter your First Name")
			return false;
		}else if (form.lastname.value == "") {
			alert("Please enter your Last Name")
			return false;
		}else if (form.bday.value == "") {
			alert("Please enter your Birth Day")
			return false;
		}else if (form.gender.value == "") {
			alert("Please select your Gender")
			return false;
		}else {
			return true;
			alert("User Nameasdasdasd asd ")
		}
	}
</script> -->

<body>
<!-- smooth scroll -->
<div class="scrollup"></div>

<!-- Parallax -->
<?php
	include "included/navbar.php";
?>
<!-- ForumMainContent -->
<section id="ForumContent">
	<div class="container section-header">
	  <!-- Description -->
		<div class="row">
		  	<div class="col-lg-12 col-md-12 col-sm-12 LatestChapterDiscussion p-1" style="background-color:#0F2B45; opacity: 0.9;">
	  			<div class="panel-heading">
	  	
	  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav mr-auto">
		    	<li class="nav-item active">
		        	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		    	</li>
		   	 	<li class="nav-item non-active">
		        	<a class="nav-link" href="tracking.html">New Updated Chapters</a>
		    	</li>
		    	<li class="nav-item non-active">
		        	<a class="nav-link" href="schedule.html">Popular Novels</a>
		    	</li>
		    	<li class="nav-item non-active">
		        	<a class="nav-link" href="services.html">Completed Novels</a>
		    	</li>
		    	<li class="nav-item non-active">
		        	<a class="nav-link" href="about.html">Recently Added Novels</a>
		    	</li>
		    	</ul>
		    	<form class="form-inline my-2 my-lg-0">
		    	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		    	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    	</form>
			</div>
		</nav>
	                <div id="breadcrumb" class="breadcrumb">
						<div class="breadcrumb-bg">
							<div class="breadcrumb-left">
								<div class="breadcrumb-right">
									<ul class="floatcontainer list-unstyled breadcrumb">
										<li class="navbithome"><a href="index.php" accesskey="1"><img src="assets/images/icons/icon_forum.png" height="32" width="32" style="margin-top: -5px;" alt="Home" title="Home"></a></li>
										<li class="navbit"><a href="registration.php">Registration</a></li>
									</ul>
								</div>
							</div>
						</div>
						<hr>
						<br>
						<div class="w-100"></div>
						<ul class="list-unstyled text-dark">
							<li id="ForumTitle" style="line-height: 1px;"><h5>WuxiaWorld Forum</h5></li>
							<li id="ForumContent" style="line-height: 1px;">Welcome to the WuxiaWorld Forum.</li>
						</ul>
					</div>
	             </div>
		  	</div>
		</div>
	    <div class="row"  style="margin-top: -30px;">
	  		<div class="col-lg-9 col-md-9 col-sm-9 LatestChapterDiscussion p-4" style="background-color:#0F2B45; opacity: 0.9;">
	    		<form  id="signupForm" action="" method="post" name="reg">
		         	<div class="panel-group">
			            <div class="panel panel-info">
			              <div class="panel-heading">
			                <h3 class="panel-title">Required Information</h3>
			              </div>
			                <div class="panel-body">
								<div class="card">
									<div id="container">
											<div class="form-row p-3">
											    <div class="form-group col-md-6">
													<label for="username">User Name</label>
													<input id="username" type="text" class="form-control" name="username" placeholder="User Name" minlength="2" required>
											    </div>
											    <div class="form-group col-md-12" style="margin-top: -15px">
													<small id="emailHelp" class="form-text text-muted">Please enter the nickname or alias by which you would like to log-in and be known on this site. This is permanent and CANNOT be changed later.</small>
													<small id="emailHelp" class="form-text text-danger">Do not use obscene username, or very similar to Staff's username. Your account will be banned later if you do so.</small>
											    </div>
											    <div class="w-100"><br></div>
											    <div class="form-group col-md-6">
													<label for="password">Password</label>
													<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
											    </div>
											    <div class="form-group col-md-6">
												    <label for="password1"> Confirm Password</label>
												    <input type="password" class="form-control" id="password1" placeholder="Confirm Password" required>
											    </div>
											    <div class="w-100"><br></div>

											    <div class="form-group col-md-6">
													<label for="email">Email</label>
													<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
											    </div>
											    <div class="form-group col-md-6">
												    <label for="confirm_email"> Confirm Email</label>
												    <input type="email" class="form-control" id="confirm_email" name="confirm_email" placeholder="Confirm Email" required>
											    </div>
											    <div class="form-group col-md-12" style="margin-top: -15px">
													<small id="emailHelp" class="form-text text-muted">Please enter your valid email address for confirmation purposes. Mobilarian Forum does not send spam or sell email addresses. Your email address will be kept private.</small>
													<small id="emailHelp" class="form-text text-danger">Use Gmail, Yahoo, or Hotmail email address only.</small>
											    </div>
											</div>

									</div>
								</div>
			                </div>
			              </div>
			        </div>
			        <br>
		         	<div class="panel-group">
		            	<div class="panel panel-info">
			            	<div class="panel-heading">
			               		<h3 class="panel-title">Additional Information</h3>
			            	</div>
			                <div class="panel-body">
								<div class="card">
									<div id="container">
										<form>
											<div class="form-row p-3">
											    <div class="w-100"><br></div>
											    <div class="form-group col-md-6">
													<label for="firstname">First Name</label>
													<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
											    </div>
											    <div class="form-group col-md-6">
												    <label for="lastname">Last Name</label>
												    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
											    </div>
											    <div class="w-100"><br></div>

											    <div class="form-group col-md-6">
													<label for="bday">Birth Day</label>
													 <input class="form-control" id="bday" name="bday" type="date" data-input-style="box" placeholder="Please Select..." required/>
											    </div>
											    <div class="form-group col-md-6">
												    <label for="Gender">Gender</label>
												    <select name="gender" id="gender" class="form-control">
												    	<option value="Male" selected>Male</option>
												    	<option value="Female" >Female</option>
												    </select>
										  		</div>
											</div>
											<div class="form-group" style="overflow-y: auto; height: 100px; border: 1px solid black;">
												<div class="blockbody formcontrols p-3" style="width:100%; padding-top: 1px;">
													<div class="section">
														<div class="blockrow">
															<div id="forumrules" class="restore">
																<small><p class="text-danger" align="justify">In order to proceed, you must agree with the following rules:</p></small>
																<p><strong>Forum Rules</strong></p>
																<p>Registration to this forum is free! We do insist that you abide by the rules and policies detailed
																below. If you agree to the terms, please check the 'I agree' checkbox and press the 'Complete Registration' button below.
																If you would like to cancel the registration, click <a href="index.php">here</a>
																to return to the forums index.</p>
																<p align="justify">
																The following rules apply everywhere on the site, unless explicitly mentioned otherwise in a forum specific rule. Please refer to the forum descriptions, as well as the announcement and sticky threads posted by Moderators in selected forums.
																</p>
																<p align="justify">
																<span style="font-weight:bold">1. No Flaming or Trolling.</span> All members must be treated in a respectful and mature manner even those who don't deserve it. Do not create any messages that harass, insult, threaten, or with the sole purpose of starting a dispute. Posts that disrupt the peace and harmony of this site are not permitted.
																</p>
																<p align="justify">
																<span style="font-weight:bold">2. No Spamming</span>
																Do not re-post, double post, cross-post, or reply the same message in multiple threads or forums. Use the search engine before posting. Do not post for the sake of increasing your post count or collecting points. Smiley or character abuse and link-only posts are also treated as spam.
																</p>
																<p align="justify">
																<span style="font-weight:bold">3. No Offtopic.</span> Always check the description of the forum. When creating new thread, make sure your topic is related to the forum. When replying to a thread, your post should be in relation with the thread. Your thread title should be descriptive enough to give other members an idea of what your post is all about.
																</p>
																<p align="justify">
																<span style="font-weight:bold">4. No Flooding.</span> Do not post consecutively in the same thread for a short period of time. Edit your post if you would like to add something or use the multi-quote button if you're quoting multiple posts.
																</p>
																<p align="justify">
																<span style="font-weight:bold">5. No Bumping.</span> Do not repeatedly bump a thread to try and get attention. Members are not online 24 hours a day and so will not see your post the instant it is made. Do not bump a thread within 24 hours, and not more than twice a week.
																</p>
																<p align="justify">
																<span style="font-weight:bold">6. No Inappropriate Language.</span> Obscene, profane or bad words are prohibited. Refrain from using text speak to prevent misunderstanding of the word. Only english and tagalog are allowed to be used anywhere on the site, except on Regional forum where other dialects are permitted.
																</p>
																<p align="justify">
																<span style="font-weight:bold">7. No Offensive Material.</span> Do not post messages that are racist, sexist, slanderous, discriminatory, or containing extreme violence, pornography, and files with virus, worm, trojan, spyware and other form of malwares.
																</p>
																<p align="justify">
																<span style="font-weight:bold">8. No Illegal Activity.</span> Do not engage in activities that cheat, endanger or abuse the system and users of this site. Bugs and exploits should be reported privately to the Moderators. Alteration of copyright notices and attributes without the consent of the author, account hacking, website attack, scam and phishing are strictly prohibited.
																</p>
																<p align="justify">
																<span style="font-weight:bold">9. No Inappropriate Link.</span> Posting messages primarily for the promotion or advertisement of other site is not allowed. When sharing information or file, post the actual details and not the link that redirects to another site. Posts with referral or affiliate link, torrent link, and link to other site with similar service to our site are not allowed to be posted anywhere.
																</p>
																<p align="justify">
																<span style="font-weight:bold">10. No Unnecessary PM.</span> This site is a public discussion forum so everything should be discussed and shared on the threads. Do not require members to contact you or ask for their contact details just to give the rest of the information you posted unless it contains sensitive details demanding utmost privacy.
																</p>
															</div>
														</div>
														<div class="blockrow singlecheck">
															<label for="cb_rules_agree">
																<input type="checkbox" name="agree" id="agree" id="cb_rules_agree" tabindex="1" value="0"><br>
																<strong>I have read, and agree to abide by the WuxiaWorld Forum rules.</strong>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
											    <div class="form-check">
		  											<input class="btn btn-primary float-right" type="submit" name="submit_registration" value="Register">
		  											<input class="btn btn-primary float-right" onclick="" type="submit" name="clear" value="Clear">
													<br><br>
													<a class="float-right" href="login.php">Already Registered Click Here!</a>
											    </div>
											</div>
										</form>
									</div>
								</div>
			                </div>
		            	</div>
			        </div>
				</form>
	        </div>
<?php
	include 'bulletin.php'
?>
		</div>
	</div>
</section>
<br/><br/>

</body>
	<script src="assets/css/js/jquery-3.3.1.min.js"></script>

	<script>
	$(document).ready(function() {
		
		$.validator.setDefaults({
		   errorClass: 'help-block',
		   highlight: function(element) {
		     $(element)
		       .closest('.form-group')
		       .addClass('has-error');
		   },
		   unhighlight: function(element) {
		     $(element)
		       .closest('.form-group')
		       .removeClass('has-error');
		   },
		   errorPlacement: function (error, element) {
		     if (element.prop('type') === 'checkbox') {
		       error.insertAfter(element.parent());
		     } else {
		       error.insertAfter(element);
		     }
		   }
		 });


		// validate the comment form when it is submitted
		$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				firstname: "required",
				lastname: {
					required: true,
					minlength: 3
				},
				email: {
					required: true,
					email: true
				},
				confirm_email: {
					required: true,
					email: true,
					equalTo: "#email"
				},
				mainphone: {
					required: true,
					minlength: 11
				},
				homephone: {
					required: true,
					minlength: 11
				},
				bday: {
					required: true
				},
				address: {
					required: true
				},
				gender: {
					required: true
				},
			},
			messages: {
				firstname: "Please enter your First Name",
				lastname: "Please enter your Last Name",
				email: "Please enter a valid eEmail Address",
				confirm_email:{

					equalTo: "Please enter the same email"
				},
				mainphone: {
					required: "Please provide a Main Phone Number",
					minlength: "Your Phone number must be 11 Numbers long"
				},
				homephone: {
					required: "Please provide a Main Phone Number",
					minlength: "Your Phone number must be 11 Numbers long",
				},
				bday: "Please enter your Birth Date",
				bday: "Please enter your Address",
				gender: "Please choose your Gender",
			}
		});

		// propose username by combining first- and lastname
/*		$("#username").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + "." + lastname;
			}
		});*/

	});
	</script>
	

<?php
	include "included/footer.php"
?>





