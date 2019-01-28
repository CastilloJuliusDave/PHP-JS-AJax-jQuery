<?php
	include "included/header.php";
/*	include "config/function.php";*/
	session_start();
	include_once 'config/main.class.php';
	$user = new Main();

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
<section id="parallax">
	<div class="parallax">
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
		        <a class="nav-link" href="#">New Updated Chapters</a>
		      </li>
		      <li class="nav-item non-active">
		        <a class="nav-link" href="#">Popular Novels</a>
		      </li>
		      <li class="nav-item non-active">
		        <a class="nav-link" href="#">Completed Novels</a>
		      </li>
		      <li class="nav-item non-active">
		        <a class="nav-link" href="#">Recently Added Novels</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
		<div class="container">
			<div class="row py-5">
				<div class="col-lg-4 p-3 wow bounceInLeft" style="background-color:#0F2B45; opacity: 0.9; margin-bottom: 0px;">
					 <a class="text-light float-left navbar-brand text-uppercase ml-5" href="index.html"><b>WuxiaWorld <span class="text-primary">Novels</span></b></a>
				</div>
			</div>
		</div>
	</div>
</section>
<br><br>
<!-- ForumMainContent -->
<section id="ForumContent">
	<div class="container section-header">
	  <!-- Description -->
		<div class="row">
		  	<div class="col-lg-12 col-md-12 col-sm-12 LatestChapterDiscussion p-1" style="background-color:#0F2B45; opacity: 0.9;">
	  			<div class="panel-heading">
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
	         	<div class="panel-group">
				  	<div class="col-lg-12 col-md-12 col-sm-12 LatestChapterDiscussion p-3">
			         	<div class="panel-group">
				            <div class="panel panel-info">
				            	<a class="float-right" href="newthread.php"><input class="btn btn-primary float-right" onclick="" name="New_thread" value="Create New Thread"></a>

					            <div class="panel-heading">
					                <h3 class="panel-title">New Updated Chapters</h3>
					            </div>
				                <div class="panel-body">
									<div class="card">
										<div id="container">



												<!-- to get submitted search in form -->
								<?php

								if (isset($_GET["targetname"])) {
									$id = $_GET["id"];
									$where = array("category_id"=>$id,);
									$row = $obj->fetch_data("thread",$where);

										foreach ($row as $thread) {

											$category = $thread['user_account_id'];
											$where = array("id"=>$category,);
											$row1 = $obj->select_data("user_account", $where);

										$category = $thread['id'];
										$where = array("thread_id"=>$category,);
										$row2 = $obj->select_data_orderby("post",$where);


											$category = $row2['user_account_id'];
											$where = array("id"=>$category,);
											$row3 = $obj->select_data("user_account", $where);

										?>
											<div class="form-row p-1">
									  			<div class="col-lg-1 col-md-1 col-sm-1 LatestChapterDiscussion" style="background-color: ghostwhite;">
													<img id="iconLegend" src="assets/images/icons/icon_forum.png">
										  		</div>
										  		<div class="col-lg-5 col-md-5 col-sm-5 LatestChapterDiscussion" style="background-color: ghostwhite;">
													
													<ul class="list-unstyled">
														<li id="thread_title">
															<a href="showthread.php?targetname=1&id=<?php echo $thread['id'];?>"><h4><?php echo $thread['subject'];?></h4></a>
														</li>
														<li id="thread_post_date">
															<span>Starded by: <?php echo $row1['user_name'];?></span>, <?php echo $thread['created'];?>
														</li>
													</ul>
										  		</div>
										  		<div class="col-lg-1 col-md-1 col-sm-1 LatestChapterDiscussion" style="background-color: ghostwhite;">
													<img id="id_has_attachment" src="assets/images/icons/icon_forum.png" width="31" height="31" class="mt-2">
										  		</div>
										  		<div class="col-lg-2 col-md-2 col-sm-2 LatestChapterDiscussion" style="background-color: ghostwhite;">
													<ul class="list-unstyled">
														<li id="replyCount">Replies Count:<span>count</span></li>
														<li id="viewCount">Views Count:<span>count</span></li>
													</ul>
										  		</div>
										  		<div class="col-lg-3 col-md-3 col-sm-3 LatestChapterDiscussion" style="background-color: ghostwhite;">
													<ul class="list-unstyled">
														<li id="lastPostBy">by: <?php echo $row3['user_name'];?></li>
														<li id="lastPostDate"><?php echo $row2['created'];?></li>
													</ul>
										  		</div>
											</div>

										

									<?php 
										}
									}

									 ?>

	
										</div>
									</div>
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
	<script src="assets/css/js/jquery-3.3.1.min.js"></script>
<?php
	include "included/footer.php"
?>



