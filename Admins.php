<?php require_once("include/DB.php");  ?>
<?php require_once("include/Sessions.php");  ?>
<?php require_once("include/Functions.php");  ?>
<?php
if (isset($_POST["Submit"])) {
$Username=mysqli_real_escape_string($connectingDB,($_POST["Username"]));
$Password=mysqli_real_escape_string($connectingDB,($_POST["Password"]));
$ConfirmPassword=mysqli_real_escape_string($connectingDB,($_POST["ConfirmPassword"]));
date_default_timezone_set("Asia/Kolkata");
$CurrntTime=time();
$DateTime=strftime("%B-%d-%d %H:%M:%S",$CurrntTime);
$DateTime;
$Admin="Kislay";
if(empty($Username) || empty($Password) || empty($ConfirmPassword) ){
$_SESSION["ErrorMessage"]="All Fields must be filled out";
redirect_to("Admins.php");
}elseif(strlen($Password)<4){
	$_SESSION["ErrorMessage"]="Atleast 4 Characters are required";
	redirect_to("Admins.php");
}elseif(strlen($Password!==$ConfirmPassword))
{
	$_SESSION["ErrorMessage"]="Password does not match";
	redirect_to("Admins.php");
}else{
	global $connectingDB;
	$Query="INSERT INTO registration(datetime,username,password,addedby) VALUES ('$DateTime','$Username','$Password','$Admin')";
	$Execute=mysqli_query($connectingDB,$Query);
if($Execute){
		$_SESSION["SuccessMessage"]="Admin Added Successfully";
	redirect_to('Admins.php');	
	}else{
		$_SESSION["ErrorMessage"]="Not Added Successfully";
	redirect_to('Admins.php');
	}

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Admins</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script href="js/bootstrap.min.js"></script>
	 <link rel="stylesheet" href="css/adminstyle.css">
</head>
<body>
	<div class="container-fluid" style="background-color:black;">
	<div class="row">
			
			<div class="col-sm-2">
				<h1>Kislay</h1>
			<ul class="nav-stacked nav-pills" id="Side_Menu">
			<li ><a href="Dashboard.php">Dashboard</a></li>	
			<li><a href="AddNewPost.php">Add New Post</a></li>
			<li class="active"><a href="categories.php">Categories</a></li>
			<li><a href="Admins.php">Manage Admins</a></li>
			<li><a href="#">Comments</a></li>
			<li><a href="#">Live Blog</a></li>
			<li><a href="#">Logout</a></li>
			</ul>	
			</div><!-- Ending of sidebar -->
	<div class="col-sm-10" style="background-color: #FFFFFF;">
		<h1>Manage Admin Access</h1>

		<?php echo Message();
			  echo SuccessMessage(); 
		?>
<div>
	<form action="Admins.php" method="post">
	<fieldset>
		<div class="form-group">
		<label for="Username"><span class="FieldInfo">UserName:</span></label>	
		<input class="form-control" type="text" name="Username" id="UserName" placeholder="UserName">
	</div>
		<div class="form-group">
		<label for="Password"><span class="FieldInfo">Password:</span></label>	
		<input class="form-control" type="Password" name="Password" id="Password" placeholder="Password">
	</div>
		<div class="form-group">
		<label for="ConfirmPassword"><span class="FieldInfo"></span>ConfirmPassword:</label>	
		<input class="form-control" type="Password" name="ConfirmPassword" id="ConfirmPassword" placeholder="ConfirmPassword">
	</div>
	<br>
	<input class="btn btn-success btn-block" type="Submit" name="Submit" value="Add new Admin">
	</fieldset>
	<br>
</form>
</div>
<div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
			<th>Sr No.</th>
			<th>Date &  Time</th>
			<th>Admin Name</th>
			<th>Added By</th>
			<th>Action</th>
		</tr>
<?php
global $connectingDB;
$ViewQuery="SELECT * FROM registration ORDER BY datetime desc";
$Execute=mysqli_query($connectingDB,$ViewQuery);
$SrNo=0;
while ($DataRows=mysqli_fetch_array($Execute)) {
	$Id=$DataRows["id"];
	$DataTime=$DataRows["datetime"];
	$Username=$DataRows["username"];
	$Admin=$DataRows["addedby"];
	$SrNo++;
?>	
<tr>
	<td><?php echo "$SrNo"; ?></td>
	<td><?php echo "$DataTime"; ?></td>
	<td><?php echo "$Username"; ?></td>
	<td><?php echo "$Admin"; ?></td>
	<td><a href="DeleteAdmin.php?id=<?php echo $Id;?>">
		<span class="btn btn-danger">Delete</span>
		</a>
	</td>
</tr>

	<?php } ?>
	</table>

</div>
	</div><!-- Ending of main area -->
</div>
</div>	
<div id="Footer" style="padding: 10px;
	border-top: 1px solid black;
	color: #eeeeee;
	background-color: #211f22;
	text-align: center; ">
	<hr style="background-color:#FFFFFF">
	<p>Theme By | Kislay |&copy;2019-2020 --- All right reserved.</p>
	<a style="color: white;text-decoration: none;cursor: pointer;font-weight: bold;" href="www.google.com"><p>This site is only for study purpose.No one is allowed to copy other than <br>&trade;kislay.com &trade;</p>
	<hr style="background-color: #FFFFFF">
	</a>
</div>
<div style="height: 10px;background: #2458B8;">
	
</div>


</body>
</html>													