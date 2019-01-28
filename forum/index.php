<?php
	include "included/header.php";
/*	include "config/function.php";*/

	session_start();
	include_once 'config/main.class.php';

	$user = new Main();
	$uid = $_SESSION['id'];
	$uname = $_SESSION['username'];

	if (!$user->get_session()) {
		header("location:login.php");
	}
	if (isset($_GET['logout'])) {
		$user->user_logout();
		header("location:index.php");
	}

?>

<body>
<!-- smooth scroll -->
<div class="scrollup"></div>

<!-- Parallax -->
<?php
	include "included/navbar.php";
?>

<!-- ForumMainChat -->
<!-- <section id="ForumContent">
	<div id="container" class="p-4" style="background-color: #82B0E1">
		<div class="container section-header">
		  <h5 class="text-center text-info" style="margin-top: 15px;">Chat with Online Users</h5>
		  <div class="chatSpace">
		  </div>
		  <h4></h4>
		</div>
	</div> -->
</section>
<br/><br/>
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
									<li class="navbit lastnavbit"><a href="index.php">Forum</a></li>
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
	    <div class="row"  style="margin-top: -25px;">
	  		<div class="col-lg-9 col-md-9 col-sm-9 LatestChapterDiscussion p-4" style="background-color:#0F2B45; opacity: 0.9;">

	         	<div class="panel-group accordion-3">
		            <div class="panel panel-info">
		              <div class="panel-heading" data-toggle="collapse" data-parent=".accordion-3" href="#a3-a01">
		                <h3 class="panel-title">New Updated Chapters<i class="fa fa-plus pull-right"></i></h3>
		              </div>
		              <div id="a3-a01" class="panel-collapse">
		                <div class="panel-body trBorder">
							<div class="card">
								<table style="width:100%;">
								  <tr>
								    <th style="width: 8%;"></th>
								    <th style="width: 67%;">Forum Name</th> 
								    <th style="width: 25%;">Last Post Info</th>
								  </tr>
								  <tr>
								    <td>
								    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
								    </td>

		<?php
			$category = 1;
			$where = array("category_id"=>$category,);
			$row1 = $obj->select_data_orderby("thread",$where);

			if (!empty($row1['subject'])) {
				$category = $row1['user_account_id'];
				$where = array("id"=>$category,);
				$row2 = $obj->select_data("user_account", $where);
			}
			else{
				$row1['subject'] = "No Post Available";
				$row2['user_name'] = "NA";
				$row1['created']= "No Post Available";
			}

			?>
								    <td>
										<ul class="list-unstyled">
										  <li id="NUC_CN_title"><a href="forumdisplay.php?targetname=1&id=1"><h4>Chinese Novels</h4></a></li>
										  <li id="ForumContent">List of Currently updated Chinese Novels</li>
										</ul>
									</td> 
								    <td>
										<ul class="list-unstyled">
											<li id="threadTitle"><?php echo $row1['subject'];?></li>
											<li id="lastPostBy">posted by: <?php echo $row2['user_name'];?></li>
											<li id="lastPostDate"><?php echo $row1['created'];?></li>
										</ul>
									</td>


								  </tr>
								  <tr>
								    <td>
								    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
								    </td>
		<?php
			$category = 2;
			$where = array("category_id"=>$category,);
			$row1 = $obj->select_data_orderby("thread",$where);

			if (!empty($row1['subject'])) {
				$category = $row1['user_account_id'];
				$where = array("id"=>$category,);
				$row2 = $obj->select_data("user_account", $where);
			}
			else{
				$row1['subject'] = "No Post Available";
				$row2['user_name'] = "NA";
				$row1['created']= "No Post Available";
			}
				
			?>
								    <td>
										<ul class="list-unstyled">
										  <li id="NUC_KN_title"><a href="forumdisplay.php?targetname=1&id=2"><h4>Korean Novels</h4></a></li>
										  <li id="ForumContent">List of Most Currently updated Korean Novels</li>
										</ul>
									</td> 
								    <td>
										<ul class="list-unstyled">
											<li id="threadTitle"><?php echo $row1['subject'];?></li>
											<li id="lastPostBy">posted by: <?php echo $row2['user_name'];?></li>
											<li id="lastPostDate"><?php echo $row1['created'];?></li>
										</ul>
									</td>
								  </tr>
								  <tr>
								    <td>
								    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
								    </td>
		<?php
			$category = 3;
			$where = array("category_id"=>$category,);
			$row1 = $obj->select_data_orderby("thread",$where);

			if (!empty($row1['subject'])) {
				$category = $row1['user_account_id'];
				$where = array("id"=>$category,);
				$row2 = $obj->select_data("user_account", $where);
			}
			else{
				$row1['subject'] = "No Post Available";
				$row2['user_name'] = "NA";
				$row1['created']= "No Post Available";
			}
			
			?>
								    <td>
										<ul class="list-unstyled">
										  <li id="NUC_JN_title"><a href="forumdisplay.php?targetname=1&id=3"><h4>Japanese Novels</h4></a></li>
										  <li id="ForumContent">List of Most Currently updated Japanese Novels</li>
										</ul>
									</td> 
								    <td>
										<ul class="list-unstyled">
											<li id="threadTitle"><?php echo $row1['subject'];?></li>
											<li id="lastPostBy">posted by: <?php echo $row2['user_name'];?></li>
											<li id="lastPostDate"><?php echo $row1['created'];?></li>
										</ul>
									</td>
								  </tr>
								</table>
							</div>
		                </div>
		              </div>
		            </div>
		            <div class="panel panel-info">
		              <div class="panel-heading" data-toggle="collapse" data-parent=".accordion-3" href="#a3-a03">
		                <h3 class="panel-title">Completed Novels<i class="fa fa-plus pull-right"></i></h3>
		              </div>
		              <div id="a3-a03" class="panel-collapsev">
		                <div class="panel-body trBorder">
							<div class="card">
								<table style="width:100%;">
								  <tr>
								    <th style="width: 8%;"></th>
								    <th style="width: 67%;">Forum Name</th> 
								    <th style="width: 25%;">Last Post Info</th>
								  </tr>
								  <tr>
								    <td>
								    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
								    </td>
		<?php
			$category = 4;
			$where = array("category_id"=>$category,);
			$row1 = $obj->select_data_orderby("thread",$where);

			if (!empty($row1['subject'])) {
				$category = $row1['user_account_id'];
				$where = array("id"=>$category,);
				$row2 = $obj->select_data("user_account", $where);
			}
			else{
				$row1['subject'] = "No Post Available";
				$row2['user_name'] = "NA";
				$row1['created']= "No Post Available";
			}
			
			?>
								    <td>
										<ul class="list-unstyled">
										  <li id="C_CN_title"><a href="forumdisplay.php?targetname=1&id=4"><h4>Chinese Novels</h4></a></li>
										  <li id="ForumContent">List of Completed Chinese Novels</li>
										</ul>
									</td> 
								    <td>
										<ul class="list-unstyled">
											<li id="threadTitle"><?php echo $row1['subject'];?></li>
											<li id="lastPostBy">posted by: <?php echo $row2['user_name'];?></li>
											<li id="lastPostDate"><?php echo $row1['created'];?></li>
										</ul>
									</td>
								  </tr>
								  <tr>
								    <td>
								    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
								    </td>
		<?php
			$category = 5;
			$where = array("category_id"=>$category,);
			$row1 = $obj->select_data_orderby("thread",$where);

			if (!empty($row1['subject'])) {
				$category = $row1['user_account_id'];
				$where = array("id"=>$category,);
				$row2 = $obj->select_data("user_account", $where);
			}
			else{
				$row1['subject'] = "No Post Available";
				$row2['user_name'] = "NA";
				$row1['created']= "No Post Available";
			}
			
			?>
								    <td>
										<ul class="list-unstyled">
										  <li id="C_KN_title"><a href="forumdisplay.php?targetname=1&id=5"><h4>Korean Novels</h4></a></li>
										  <li id="ForumContent">List of Completed Korean Novels</li>
										</ul>
									</td> 
								    <td>
										<ul class="list-unstyled">
											<li id="threadTitle"><?php echo $row1['subject'];?></li>
											<li id="lastPostBy">posted by: <?php echo $row2['user_name'];?></li>
											<li id="lastPostDate"><?php echo $row1['created'];?></li>
										</ul>
									</td>
								  </tr>
								  <tr>
								    <td>
								    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
								    </td>
		<?php
			$category = 6;
			$where = array("category_id"=>$category,);
			$row1 = $obj->select_data_orderby("thread",$where);

			if (!empty($row1['subject'])) {
				$category = $row1['user_account_id'];
				$where = array("id"=>$category,);
				$row2 = $obj->select_data("user_account", $where);
			}
			else{
				$row1['subject'] = "No Post Available";
				$row2['user_name'] = "NA";
				$row1['created']= "No Post Available";
			}
			
			?>
								    <td>
										<ul class="list-unstyled">
										  <li id="C_JN_title"><a href="forumdisplay.php?targetname=1&id=6"><h4>Japanese Novels</h4></a></li>
										  <li id="ForumContent">List of Completed Japanese Novels</li>
										</ul>
									</td> 
								    <td>
										<ul class="list-unstyled">
											<li id="threadTitle"><?php echo $row1['subject'];?></li>
											<li id="lastPostBy">posted by: <?php echo $row2['user_name'];?></li>
											<li id="lastPostDate"><?php echo $row1['created'];?></li>
										</ul>
									</td>
								  </tr>
								</table>
							</div>
		                </div>
		              </div>
		            </div>
		            <div class="panel panel-info">
		              <div class="panel-heading" data-toggle="collapse" data-parent=".accordion-3" href="#a3-a04">
		                <h3 class="panel-title">Recently Added Novels<i class="fa fa-plus pull-right"></i></h3>
		              </div>
		              <div id="a3-a04" class="panel-collapsev">
		                <div class="panel-body trBorder">
							<div class="card">
								<table style="width:100%;">
								  <tr>
								    <th style="width: 8%;"></th>
								    <th style="width: 67%;">Forum Name</th> 
								    <th style="width: 25%;">Last Post Info</th>
								  </tr>
								  <tr>
								    <td>
								    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
								    </td>
		<?php
			$category = 7;
			$where = array("category_id"=>$category,);
			$row1 = $obj->select_data_orderby("thread",$where);

			if (!empty($row1['subject'])) {
				$category = $row1['user_account_id'];
				$where = array("id"=>$category,);
				$row2 = $obj->select_data("user_account", $where);
			}
			else{
				$row1['subject'] = "No Post Available";
				$row2['user_name'] = "NA";
				$row1['created']= "No Post Available";
			}
			
			?>
								    <td>
										<ul class="list-unstyled">
										  <li id="RA_JN_title"><a href="forumdisplay.php?targetname=1&id=7"><h4>Chinese Novels</h4></a></li>
										  <li id="ForumContent">List of Recently Added Chinese Novels</li>
										</ul>
									</td> 
								    <td>
										<ul class="list-unstyled">
											<li id="threadTitle"><?php echo $row1['subject'];?></li>
											<li id="lastPostBy">posted by: <?php echo $row2['user_name'];?></li>
											<li id="lastPostDate"><?php echo $row1['created'];?></li>
										</ul>
									</td>
								  </tr>
								  <tr>
								    <td>
								    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
								    </td>
		<?php
			$category = 8;
			$where = array("category_id"=>$category,);
			$row1 = $obj->select_data_orderby("thread",$where);

			if (!empty($row1['subject'])) {
				$category = $row1['user_account_id'];
				$where = array("id"=>$category,);
				$row2 = $obj->select_data("user_account", $where);
			}
			else{
				$row1['subject'] = "No Post Available";
				$row2['user_name'] = "NA";
				$row1['created']= "No Post Available";
			}
			
			?>
								    <td>
										<ul class="list-unstyled">
										  <li id="RA_JN_title"><a href="forumdisplay.php?targetname=1&id=8"><h4>Korean Novels</h4></a></li>
										  <li id="ForumContent">List of Recently Added Korean Novels</li>
										</ul>
									</td> 
								    <td>
										<ul class="list-unstyled">
											<li id="threadTitle"><?php echo $row1['subject'];?></li>
											<li id="lastPostBy">posted by: <?php echo $row2['user_name'];?></li>
											<li id="lastPostDate"><?php echo $row1['created'];?></li>
										</ul>
									</td>
								  </tr>
								  <tr>
								    <td>
								    	<img style="margin-top: 10;" src="assets/images/icons/icon_forum.png">
								    </td>
		<?php
			$category = 9;
			$where = array("category_id"=>$category,);
			$row1 = $obj->select_data_orderby("thread",$where);

			if (!empty($row1['subject'])) {
				$category = $row1['user_account_id'];
				$where = array("id"=>$category,);
				$row2 = $obj->select_data("user_account", $where);
			}
			else{
				$row1['subject'] = "No Post Available";
				$row2['user_name'] = "NA";
				$row1['created']= "No Post Available";
			}
			
			?>
								    <td>
										<ul class="list-unstyled">
										  <li id="RA_JN_title"><a href="forumdisplay.php?targetname=1&id=9"><h4>Japanese Novels</h4></a></li>
										  <li id="ForumContent">List of Recently Added Japanese Novels</li>
										</ul>
									</td> 
								    <td>
										<ul class="list-unstyled">
											<li id="threadTitle"><?php echo $row1['subject'];?></li>
											<li id="lastPostBy">posted by: <?php echo $row2['user_name'];?></li>
											<li id="lastPostDate"><?php echo $row1['created'];?></li>
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

<?php
	include 'bulletin.php'
?>

		</div>
	</div>
</section>

<br/><br/>
<script>
	

</script>

</body>

<?php
	include "included/footer.php"
?>





