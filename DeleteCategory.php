<?php require_once("include/DB.php");  ?>
<?php require_once("include/Sessions.php");  ?>
<?php require_once("include/Functions.php");  ?>
<?php
if (isset($_GET["id"])) {
	$IdFromURL=$_GET["id"];
	$connectingDB;
	$Query="DELETE FROM category WHERE id='$IdFromURL'";
	$Execute=mysqli_query($connectingDB,$Query);
if($Execute){
		$_SESSION["SuccessMessage"]="Post Updated Successfully";
	redirect_to('categories.php');	
	}else{
		$_SESSION["ErrorMessage"]="Not Added Successfully";
	redirect_to('categories.php');
	}
}
?>