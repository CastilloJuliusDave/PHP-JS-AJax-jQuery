<?php
	include "included/header.php";
	session_start();
	include_once 'config/main.class.php';
	$user = new Main();

	if (isset($_REQUEST['submit_login'])) {
		extract($_REQUEST);
		$login = $user->check_login($emailoruser,$password);
		if ($login) {
			//if register success
			header("location:index.php");
		}else{
			//failed register
			echo"Incorrect email or password";
		}
	}

	if (isset($_SESSION['id'])) {
		header("location:index.php");
	}
?>
<script type="text/javascript">
	function submitlogin() {
		var	form = document.login;
		if (form.emailoruser.value == "") {
			alert("Enter Email or Password.");
			return false;
		}
		else if (form.password.value == "") {
			alert("Enter Password.");
			return false;
		}
	}
</script>
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
										<li class="navbithome"><a href="index.php" accesskey="1"><img src="images/mobicom/misc/navbit-home.png" alt="Home" title="Home"></a></li>
										<li class="navbit"><a href="index.php">Forum</a></li>
										<li class="navbit lastnavbit"><a href="login.php?">Login</a></li>
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
	    		<form action="" method="post" name="login">
		         	<div class="panel-group">
			            <div class="panel panel-info">
				            <div class="panel-heading">
				                <h3 class="panel-title">Login</h3>
				            </div>
			                <div class="panel-body">
								<div class="card">
									<div id="container">
										<div class="form-row p-3">
										    <div class="form-group col-md-6">
												<label for="username">User Name or Email</label>
												<input class="form-control" type="text" name="emailoruser" required="">
										    </div>
										    <div class="w-100"><br></div>
										    <div class="form-group col-md-6">
												<label for="password">Password</label>
												<input class="form-control" type="password" name="password" required="">
										    </div>
										    <div class="w-100"><br></div>
										    <div class="form-group col-md-6">
											    <input class="btn btn-primary float-center" onclick="return(submitlogin())" type="submit" name="submit_login" value="Login">
										    </div>
										</div>
									</div>
								</div>
			                </div>
			            </div>
			        </div>
			        <br>
				</form>
	        </div>
	        <div class="col-lg-3 col-md-3 col-sm-3 LatestChapterDiscussion p-4 imgLatest" style="background-color:#0F2B45; opacity: 0.9;">
				<div class="row">
					<div class="panel-group accordion-3" style="width: 95%">
			            <div class="panel panel-info">
			            	<div class="panel-heading" data-toggle="collapse" data-parent=".accordion-3" href="#a3-a05">
			                	<h3 class="panel-title">Latest Bulletin</h3>
			            	</div>

				                <div class="panel-body trBorder">
					     			<div class="card">
										<table>
										  <tr>
										    <th style="width: 20%;"></th>
										    <th style="width: 80%;"></th> 
										  </tr>
										  <tr>
										    <td>
										    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
										    </td>
										    <td>
												<ul class="list-unstyled">
													<li id="threadTitle">Thread Title</li>
													<li id="lastPostBy">by PostUserName</li>
													<li id="lastPostDate">1st Jan 2019, 7:30</li>
												</ul>
											</td> 
										  </tr>
										</table>
									</div>
									<div class="card">
										<table style="width:100%;">
										  <tr>
										    <th style="width: 20%;"></th>
										    <th style="width: 80%;"></th> 
										  </tr>
										  <tr>
										    <td>
										    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
										    </td>
										    <td>
												<ul class="list-unstyled">
													<li id="threadTitle">Thread Title</li>
													<li id="lastPostBy">by PostUserName</li>
													<li id="lastPostDate">1st Jan 2019, 7:30</li>
												</ul>
											</td> 
										  </tr>
										</table>
									</div>
									<div class="card">
										<table style="width:100%;">
										  <tr>
										    <th style="width: 20%;"></th>
										    <th style="width: 80%;"></th> 
										  </tr>
										  <tr>
										    <td>
										    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
										    </td>
										    <td>
												<ul class="list-unstyled">
													<li id="threadTitle">Thread Title</li>
													<li id="lastPostBy">by PostUserName</li>
													<li id="lastPostDate">1st Jan 2019, 7:30</li>
												</ul>
											</td> 
										  </tr>
										</table>
									</div>
									<div class="card">
										<table style="width:100%;">
										  <tr>
										    <th style="width: 20%;"></th>
										    <th style="width: 80%;"></th> 
										  </tr>
										  <tr>
										    <td>
										    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
										    </td>
										    <td>
												<ul class="list-unstyled">
													<li id="threadTitle">Thread Title</li>
													<li id="lastPostBy">by PostUserName</li>
													<li id="lastPostDate">1st Jan 2019, 7:30</li>
												</ul>
											</td> 
										  </tr>
										</table>
									</div>
									<div class="card">
										<table style="width:100%;">
										  <tr>
										    <th style="width: 20%;"></th>
										    <th style="width: 80%;"></th> 
										  </tr>
										  <tr>
										    <td>
										    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
										    </td>
										    <td>
												<ul class="list-unstyled">
													<li id="threadTitle">Thread Title</li>
													<li id="lastPostBy">by PostUserName</li>
													<li id="lastPostDate">1st Jan 2019, 7:30</li>
												</ul>
											</td> 
										  </tr>
										</table>
									</div>
				                </div>

			            </div>
		         	</div>
		         	<div class="w-100"></div>
		         	<br>
		         	<div class="panel-group accordion-3" style="width: 95%">
			            <div class="panel panel-info">
			            	<div class="panel-heading" data-toggle="collapse" data-parent=".accordion-3" href="#a3-a06">
			                	<h3 class="panel-title">Latest Forum Guides</h3>
			            	</div>

				                <div class="panel-body trBorder">
					     			<div class="card">
										<table>
										  <tr>
										    <th style="width: 20%;"></th>
										    <th style="width: 80%;"></th> 
										  </tr>
										  <tr>
										    <td>
										    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
										    </td>
										    <td>
												<ul class="list-unstyled">
													<li id="threadTitle">Thread Title</li>
													<li id="lastPostBy">by PostUserName</li>
													<li id="lastPostDate">1st Jan 2019, 7:30</li>
												</ul>
											</td> 
										  </tr>
										</table>
									</div>
									<div class="card">
										<table style="width:100%;">
										  <tr>
										    <th style="width: 20%;"></th>
										    <th style="width: 80%;"></th> 
										  </tr>
										  <tr>
										    <td>
										    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
										    </td>
										    <td>
												<ul class="list-unstyled">
													<li id="threadTitle">Thread Title</li>
													<li id="lastPostBy">by PostUserName</li>
													<li id="lastPostDate">1st Jan 2019, 7:30</li>
												</ul>
											</td> 
										  </tr>
										</table>
									</div>
									<div class="card">
										<table style="width:100%;">
										  <tr>
										    <th style="width: 20%;"></th>
										    <th style="width: 80%;"></th> 
										  </tr>
										  <tr>
										    <td>
										    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
										    </td>
										    <td>
												<ul class="list-unstyled">
													<li id="threadTitle">Thread Title</li>
													<li id="lastPostBy">by PostUserName</li>
													<li id="lastPostDate">1st Jan 2019, 7:30</li>
												</ul>
											</td> 
										  </tr>
										</table>
									</div>
									<div class="card">
										<table style="width:100%;">
										  <tr>
										    <th style="width: 20%;"></th>
										    <th style="width: 80%;"></th> 
										  </tr>
										  <tr>
										    <td>
										    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
										    </td>
										    <td>
												<ul class="list-unstyled">
													<li id="threadTitle">Thread Title</li>
													<li id="lastPostBy">by PostUserName</li>
													<li id="lastPostDate">1st Jan 2019, 7:30</li>
												</ul>
											</td> 
										  </tr>
										</table>
									</div>
									<div class="card">
										<table style="width:100%;">
										  <tr>
										    <th style="width: 20%;"></th>
										    <th style="width: 80%;"></th> 
										  </tr>
										  <tr>
										    <td>
										    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
										    </td>
										    <td>
												<ul class="list-unstyled">
													<li id="threadTitle">Thread Title</li>
													<li id="lastPostBy">by PostUserName</li>
													<li id="lastPostDate">1st Jan 2019, 7:30</li>
												</ul>
											</td> 
										  </tr>
										</table>
									</div>
				                </div>

			            </div>
		         	</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br/><br/>

</body>

<?php
	include "included/footer.php"
?>





