<?php
	include "included/header.php";
/*	include "config/function.php";*/
	session_start();
	include_once 'config/main.class.php';
	$user = new Main();

	if (isset($_SESSION['id'])) {
		header("location:home.php");
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
	  		<div class="col-lg-12 col-md-12 col-sm-12 LatestChapterDiscussion p-4" style="background-color:#0F2B45; opacity: 0.9;">
	    		<form  id="signupForm" action="" method="post" name="reg">
		         	<div class="panel-group">
			            <div class="panel panel-info">
			              <div class="panel-heading">
			                <h3 class="panel-title">Your Message</h3>
			              </div>
			                <div class="panel-body">
								<div class="card">
									<div id="container">
										<div class="form-row p-3">
										    <div class="form-group col-md-3 col-lg-3 col-sm-3">
												<label id="threadCategoryID" for="sel1">Select Thread Category:&nbsp;</label>
												<select class="form-control" id="category" name="category" style="width: 200px">
									                <option value="0" selected>New Updated Chapters</option>
									                <option value="1">Popular Novels</option>
									                <option value="1">Completed Novels</option>
									                <option value="1">Recently Added Novels</option>
									            </select>
								        	</div>
										    <div class="form-group col-md-3 col-lg-3 col-sm-3">
												<label id="threadCategoryID" for="sel1">Select Novel Language:&nbsp;</label>
												<select class="form-control" id="language" name="language" style="width: 200px">
									                <option value="0" selected>Chinese</option>
									                <option value="1">Korean</option>
									                <option value="1">Japanese</option>
									            </select>
										    </div>
										    <div class="w-100"><br></div>
										    <div class="form-group col-md-6">
												<label for="title">Title</label>
												<input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
										    </div>
										    <div class="w-100"><br></div>
										    <div class="form-group col-md-12 col-lg-12 col-sm-12">
											    <div class="editor-full">
												  <div id="document-full" name="document-full" class="ql-scroll-y" style="height: 300px;">
												    <h1></h1>
												  </div>
												</div>
										    </div>
										</div>
										<div class="form-group">
										    <div class="form-check">
	  											<input class="btn btn-primary float-right" type="submit" name="submit_thread" value="Post New Thread">
												<br><br>
										    </div>
										</div>
									</div>
								</div>
			                </div>
			            </div>
			        </div>
				</form>
	        </div>
		</div>
	</div>
</section>
<br/><br/>

</body>
	<script src="assets/css/js/jquery-3.3.1.min.js"></script>
	<script>

var toolbarOptions = [
    [{
      'header': [1, 2, 3, 4, 5, 6, false]
    }],
    ['bold', 'italic', 'underline', 'strike'], // toggled buttons
    ['blockquote', 'code-block'],

    [{
      'header': 1
    }, {
      'header': 2
    }], // custom button values
    [{
      'list': 'ordered'
    }, {
      'list': 'bullet'
    }],
    [{
      'script': 'sub'
    }, {
      'script': 'super'
    }], // superscript/subscript
    [{
      'indent': '-1'
    }, {
      'indent': '+1'
    }], // outdent/indent
    [{
      'direction': 'rtl'
    }], // text direction

    [{
      'size': ['small', false, 'large', 'huge']
    }], // custom dropdown

    [{
      'color': []
    }, {
      'background': []
    }], // dropdown with defaults from theme
    [{
      'font': []
    }],
    [{
      'align': []
    }],
    ['link', 'image'],

    ['clean'] // remove formatting button
  ];

var quillFull = new Quill('#document-full', {
  modules: {
    toolbar: toolbarOptions,
    autoformat: true
  },
  theme: 'snow',
  placeholder: "Write something..."
});


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
				category: "required",
				language: "required",
				document-full:"required",
				title: {
					required: true,
					minlength: 3
				}
			},
			messages: {
				category: "Please select Category",
				language: "Please select Language",
				document-full: "Please enter Thread Content",
				title:"Please Add Title"
			}
		});

	});
	</script>

<?php
	include "included/footer.php"
?>





