<?php require_once("include/DB.php");  ?>
<?php require_once("include/Sessions.php");  ?>
<?php require_once("include/Functions.php");  ?>


<?php
if (isset($_POST["Submit"])) {
$Category=mysqli_real_escape_string($connectingDB,($_POST["Category"]));
date_default_timezone_set("Asia/Kolkata");
$CurrntTime=time();
$DateTime=strftime("%B-%d-%d %H:%M:%S",$CurrntTime);
$DateTime;
$Admin="Kislay";
if(empty($Category)){
$_SESSION["ErrorMessage"]="All Fields must be filled out";
redirect_to("categories.php");
}elseif(strlen($Category)>99){
	$_SESSION["ErrorMessage"]="Too long Name";
	redirect_to("categories.php");
}else{
	global $connectingDB;
	$Query="INSERT INTO category(datetime,name,creatorname) VALUES ('$DateTime','$Category','$Admin')";
	$Execute=mysqli_query($connectingDB,$Query);
if($Execute){
		$_SESSION["SuccessMessage"]="Category Added Successfully";
	redirect_to('categories.php');	
	}else{
		$_SESSION["ErrorMessage"]="Not Added Successfully";
	redirect_to('categories.php');
	}

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkig</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script href="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid" style="background-color:black;">
	<div class="row">
			
				<div class="col-sm-2" style="background-color:#262626;color:#fff;">
				<h1>Categories</h1>
		


				<?php require_once("include/sidebar.php");  ?>




			</div><!-- Ending of sidebar -->
	<div class="col-sm-10" style="background-color: #FFFFFF;">
		<h1>Manage Categories</h1>

		<?php echo Message();
			  echo SuccessMessage(); 
		?>
<div>
	<form action="categories.php" method="post">
	<fieldset>
		<div class="form-group">
		<label for="categoryname">Name:</label>	
		<input class="form-control" type="text" name="Category" id="categoryname" placeholder="Name">
	</div>
	<br>
	<input class="btn btn-success btn-block" type="Submit" name="Submit" value="Add new Category">
	</fieldset>
	<br>
</form>
</div>
<div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
			<th>Sr No.</th>
			<th>Date &  Time</th>
			<th>Category name</th>
			<th>Creator Name</th>
			<th>Action</th>
		</tr>
<?php
global $connectingDB;
$ViewQuery="SELECT * FROM category ORDER BY datetime desc";
$Execute=mysqli_query($connectingDB,$ViewQuery);
$SrNo=0;
while ($DataRows=mysqli_fetch_array($Execute)) {
	$Id=$DataRows["id"];
	$DataTime=$DataRows["datetime"];
	$CategoryName=$DataRows["name"];
	$CreatorName=$DataRows["creatorname"];
	$SrNo++;
?>	
<tr>
	<td><?php echo "$SrNo"; ?></td>
	<td><?php echo "$DataTime"; ?></td>
	<td><?php echo "$CategoryName"; ?></td>
	<td><?php echo "$CreatorName"; ?></td>
	<td><a href="DeleteCategory.php?id=<?php echo $Id;?>">
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


<?php require_once("Footer.php");  ?>



</body>
</html>													