<?php require_once("include/DB.php");  ?>
<?php require_once("include/Sessions.php");  ?>
<?php require_once("include/Functions.php");  ?>
<?php
if (isset($_GET["id"])) {
	$IdFromURL=$_GET["id"];
	$connectingDB;
	$Query="DELETE FROM registration WHERE id='$IdFromURL'";
	$Execute=mysqli_query($connectingDB,$Query);
if($Execute){
		$_SESSION["SuccessMessage"]="Admin Deleted Successfully";
	redirect_to('Admins.php');	
	}else{
		$_SESSION["ErrorMessage"]="Not Deleted Successfully";
	redirect_to('Admins.php');
	}
}
?>