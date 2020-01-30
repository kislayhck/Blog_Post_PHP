<?php require_once("include/DB.php");  ?>
<?php require_once("include/Sessions.php");  ?>
<?php require_once("include/Functions.php");  ?>
<?php
if (isset($_POST["Submit"])) {
$Title=mysqli_real_escape_string($connectingDB,($_POST["Title"]));
$Category=mysqli_real_escape_string($connectingDB,($_POST["Category"]));
$Post=mysqli_real_escape_string($connectingDB,($_POST["Post"]));
date_default_timezone_set("Asia/Kolkata");
$CurrntTime=time();
$DateTime=strftime("%B-%d-%d %H:%M:%S",$CurrntTime);
$DateTime;
$Admin="Kislay";
$Image=$_FILES["Image"]["name"];
$Target="Upload/".basename($_FILES["Image"]["name"]);
if(empty($Title)){
$_SESSION["ErrorMessage"]="Title can't be empty";
redirect_to("AddNewPost.php");
}
elseif(strlen($Title)<2){
$_SESSION["ErrorMessage"]="Title should be at-least 2 Characters";
redirect_to("AddNewPost.php");
}else{
	global $connectingDB;
	$Query="INSERT INTO admin_panel(datetime,title,category,author,image,post) VALUES ('$DateTime','$Title','$Category','$Admin','$Image','$Post')";
	$Execute=mysqli_query($connectingDB,$Query);
	move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
if($Execute){
		$_SESSION["SuccessMessage"]="Post Added Successfully";
	redirect_to('AddNewPost.php');	
	}else{
		$_SESSION["ErrorMessage"]="Not Added Successfully";
	redirect_to('AddNewPost.php');
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
	 <link rel="stylesheet" href="css/adminstyle.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid" style="background-color:black;">
	<div class="row">
			
			<div class="col-sm-2" style="background-color:#262626;color:#fff;">
				<h1>Add New Post</h1>
			
			<?php require_once("include/sidebar.php");  ?>
			
			</div><!-- Ending of sidebar -->
	<div class="col-sm-10" style="background-color: #FFFFFF;">
		<h1>Add New Post</h1>

		<?php echo Message();
			  echo SuccessMessage(); 
		?>
<div>
	<form action="AddNewPost.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<div class="form-group">
		<label for="title"><span class="FieldInfo">Title:</span></label><input class="form-control" type="text" name="Title" id="title" placeholder="Title">
	</div>
	<div class="form-group">
		<label for="categoryselect"><span class="FieldInfo">Category:</span></label>
		<select class="form-control" id="categoryselect" name="Category">
			<?php
global $connectingDB;
$ViewQuery="SELECT * FROM category ORDER BY datetime desc";
$Execute=mysqli_query($connectingDB,$ViewQuery);
while ($DataRows=mysqli_fetch_array($Execute)) {
	$Id=$DataRows["id"];
	$CategoryName=$DataRows["name"];
?>
	<option><?php echo $CategoryName;  ?></option>
<?php } ?>




		</select>
	</div>
	<div class="form-group">
		<label for="imageselect"><span class="FieldInfo">Select Image:</span></label>
		<input type="File" class="form-control" name="Image" id="imageselect">
</div>
<div class="form-group">
		<label for="postarea"><span class="FieldInfo">Post:</span></label>
		<textarea class="form-control" name="Post" id="postarea"></textarea>
	<br>
	<input class="btn btn-success btn-block" type="Submit" name="Submit" value="Add new Category">
	</fieldset>
	<br>
</form>
</div>
	
	</div><!-- Ending of main area -->
</div>
</div>	

<?php require_once("Footer.php");  ?>



</body>
</html>													