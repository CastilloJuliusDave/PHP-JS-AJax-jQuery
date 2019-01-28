<?php
	include "included/header.php";
/*	include "config/function.php";*/
	session_start();
	include_once 'config/main.class.php';
	$user = new Main();

?>


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
					<a class="float-left" href="replythread.php"><input class="btn btn-primary float-right" onclick="" name="Reply_thread" value="Reply to Thread"></a>
				  	<div class="col-lg-12 col-md-12 col-sm-12 LatestChapterDiscussion p-3">
						<?php

						//get thread id from show forumdisplay
						if (isset($_GET["targetname"])) {
							$id = $_GET["id"];
							$where = array("id"=>$id,);
							$row = $obj->select_data("thread",$where);

									$category = $row['user_account_id'];
									$where = array("id"=>$category,);
									$row1 = $obj->select_data("user_account", $where);

								$category = $thread['id'];
								$where = array("thread_id"=>$category,);
								$row2 = $obj->select_data_orderby("post",$where);


									$category = $row2['user_account_id'];
									$where = array("id"=>$category,);
									$row3 = $obj->select_data("user_account", $where);

								?>
			         	<div class="panel-group">
				            <div class="panel panel-info">
				            	<a class="float-right" href="newthread.php"><input class="btn btn-primary float-right" onclick="" name="New_thread" value="Create New Thread"></a>
					            <div class="panel-heading">
					                <h4 class="panel-title"><?php echo $row['created'];?></h4>
					            </div>
				                <div class="panel-body">
									<div class="card">
										<div id="container">
											<div class="form-row p-1">
									  			<div class="col-lg-2 col-md-2 col-sm-2 LatestChapterDiscussion" style="background-color: ghostwhite;">
													
													<ul class="list-unstyled text-center">
														<li id="thread_subject">
															<h4><?php echo $row1['user_name'];?></h4>
														</li>
														<li id="thread_content">
															<img id="profileLegend" src="assets/images/icons/icon_forum.png">
														</li>
														<li id="thread_content">
															<h4>Joined Date: <?php echo $row1['created'];?></h4>
														</li>
													</ul>

										  		</div>
										  		<div class="col-lg-10 col-md-10 col-sm-10 LatestChapterDiscussion" style="background-color: ghostwhite;">
													
													<ul class="list-unstyled">
														<li id="thread_subject">
															<h4><?php echo $row['subject'];?></h4>
														</li>
														<li id="thread_content">
															<div><?php echo $row['content'];?></div>
														</li>
													</ul>

										  		</div>
											</div>
										</div>
									</div>
				                </div>
				            </div>
				        </div>
				        <br>
					                
						<?php 
							}

							 ?>
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



