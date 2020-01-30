<?php require_once("include/Sessions.php");  ?>
<?php require_once("include/Functions.php");  ?>
<?php require_once("include/DB.php");  ?>
<?php Confirm_Login(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkig</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script href="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<style type="text/css">
#Side_Menu{
	    margin: 56px -41px;
}

</style>
</head>
<body>
	<div class="container-fluid">
	<div class="row">
			
			<div class="col-sm-2" style="background-color:#262626;color:#fff;">
				<h1>Dashboard</h1>
			<ul class="nav-stacked nav-pills" id="Side_Menu"style="list-style: none;">
			<li class="active"><a class="btn btn-primary"href="Dashboard.php"><span><i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard</span></a></li>	<br>
			<li><a class="btn btn-primary"href="AddNewPost.php"><span><i class="fas fa-vote-yea"></i>&nbsp;Add New Post</span></a></li><br>
			<li><a class="btn btn-primary"href="categories.php"><span><i class="fas fa-laptop"></i>&nbsp;Categories</span></a></li><br />
			<li><a class="btn btn-primary" href="Admins.php"><span><i class="fas fa-users"></i>&nbsp;Manage Admins</span></a></li><br />
			<li><a  class="btn btn-primary"href="Logout.php"><span><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</span></a></li>
			</ul>	
			</div><!-- Ending of sidebar -->
	<div class="col-sm-10">
		<div><?php echo Message();
				   echo SuccessMessage();
		 ?></div>
		 <div class="container-fluid">
		<h1 style="background-color: #262626;color:#fff;">Admin Dashboard</h1>
	</div>
		<br>
		<br>
	<div class="table-responsive">
		<table class="table table table-hover">
			<tr>
				<th>No.</th>
				<th>Post Title</th>
				<th>Date & Time</th>
				<th>Author</th>
				<th>Category</th>
				<th>Banner</th>
				<th>Comments</th>
				<th>Action</th>
				<th>Details</th>
			</tr>
<?php

$connectingDB;
$ViewQuery="SELECT * FROM admin_panel ORDER BY datetime desc";
$Execute=mysqli_query($connectingDB,$ViewQuery);
$SrNo=0;
while ($DataRows=mysqli_fetch_array($Execute)) {
	$Id=$DataRows["id"];
	$DataTime=$DataRows["datetime"];
	$Title=$DataRows["title"];
	$Category=$DataRows["category"];
	$Admin=$DataRows["author"];
	$Image=$DataRows["image"];
	$Post=$DataRows["post"];
	$SrNo++;
	?>

	<tr>
	<td><?php
	if(strlen($Title)>20){$Title=substr($Title,0,20).'..';}
	 echo $SrNo; ?>	
	</td>
	<td><?php echo $Title; ?></td>
	<td><?php 
	if(strlen($DataTime)>11){$DataTime=substr($DataTime,0,11).'..';}
	echo $DataTime; ?></td>
	<td><?php
	if(strlen($Admin)>20){$Admin=substr($Admin,0,6).'..';}
	 echo $Admin; ?></td>
	<td><?php echo $Category; ?></td>
	<td><img src="Upload/<?php echo $Image; ?>" width="170px"; height="50px" ></td>
	<td>Processing</td>
	<td>
	<a href="EditPost.php?Edit=<?php echo $Id; ?>">
		<span class="btn btn-warning">Edit</span></a>
	<a href="DeletePost.php?Delete=<?php echo $Id; ?>">
		<span class="btn btn-danger">Delete</span></a> 


</td>
	<td><a href="index.php?id=<? echo $Id; ?>" target="_blank">
	<span class="btn btn-primary">Live Preview</span>
	</a>
</td>
	</tr>





<?php } ?>	

		</table>



	</div>	
		
	</div><!-- Ending of main area -->
</div>
</div>
<?php require_once("Footer.php");  ?>
</body>
</html>													