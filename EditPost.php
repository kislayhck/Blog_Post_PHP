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
	$EditFromURL=$_GET['Edit'];
	$Query="UPDATE admin_panel SET datetime='$DateTime',title='$Title',category='$Category',author='$Admin',image='$Image',post='$Post'
	WHERE id='$EditFromURL'"; 
$Execute=mysqli_query($connectingDB,$Query);
move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
if($Execute){
		$_SESSION["SuccessMessage"]="Post Updated Successfully";
	redirect_to('Dashboard.php');	
	}else{
		$_SESSION["ErrorMessage"]="Not Added Successfully";
	redirect_to('Dashboard.php');
	}

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Post</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script href="js/bootstrap.min.js"></script>
	 <link rel="stylesheet" href="css/adminstyle.css">
</head>
<body>
	<div class="container-fluid" style="background-color:black;">
	<div class="row">
			
			<div class="col-sm-2">
				<h1>Update Post</h1>
			<ul class="nav-stacked nav-pills" id="Side_Menu">
			<li ><a href="Dashboard.php">Dashboard</a></li>	
			<li><a href="AddNewPost.php">Add New Post</a></li>
			<li class="active"><a href="categories.php">Categories</a></li>
			<li><a href="#">Manage Admins</a></li>
			<li><a href="#">Comments</a></li>
			<li><a href="#">Live Blog</a></li>
			<li><a href="#">Logout</a></li>
			</ul>	
			</div><!-- Ending of sidebar -->
	<div class="col-sm-10" style="background-color: #FFFFFF;">
		<h1>Add New Post</h1>

		<?php echo Message();
			  echo SuccessMessage(); 
		?>
<div>
	<?php
	$SearchQueryParameter=$_GET['Edit'];
	$connectingDB;
	$Query="SELECT * FROM admin_panel WHERE id='$SearchQueryParameter'";
	$ExecuteQuery=mysqli_query($connectingDB,$Query);
	while ($DataRows=mysqli_fetch_array($ExecuteQuery)) {
		$TitleToBeUpdated=$DataRows['title'];
		$CategoryToBeUpdated=$DataRows['category'];
		$ImageToBeUpdated=$DataRows['image'];
		$PostToBeUpdated=$DataRows['post'];


	}


	?>

	<form action="EditPost.php?Edit=<?php echo $SearchQueryParameter;  ?>" method="post" enctype="multipart/form-data">
	<fieldset>
		<div class="form-group">
		<label for="title"><span class="FieldInfo">Title:</span></label><input value="<?php echo $TitleToBeUpdated; ?>" class="form-control" type="text" name="Title" id="title" placeholder="Title">
	</div>
	<div class="form-group">
		<span class="FieldInfo">Existing Category:</span>
		<?php echo $CategoryToBeUpdated; ?>
		<br>
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
		<span class="FieldInfo">Existing Image:</span>
		<img src="Upload/<?php echo $ImageToBeUpdated;?>" width=170px; height=70px;>
		<br>

		<label for="imageselect"><span class="FieldInfo">Select Image:</span></label>
		<input type="File" class="form-control" name="Image" id="imageselect">
</div>
<div class="form-group">
		<label for="postarea"><span class="FieldInfo">Post:</span></label>
		<textarea class="form-control" name="Post" id="postarea">
			<?php echo $PostToBeUpdated;  ?>
		</textarea>
	<br>
	<input class="btn btn-success btn-block" type="Submit" name="Submit" value="Update Post">
	</fieldset>
	<br>
</form>
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
	<a style="color: white;text-decoration: none;cursor: pointer;font-weight: bold;" href="www.google.com">
	<hr style="background-color: #FFFFFF">
	</a>
</div>
<div style="height: 10px;background: #2458B8;">
	
</div>



</body>
</html>													