<?php require_once("include/DB.php");  ?>
<?php require_once("include/Sessions.php");  ?>
<?php require_once("include/Functions.php");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hit Inside</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		<!-- Favicon -->
		  <link rel="shortcut icon" href="Images/inside.png" type="image">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">  
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
<style>
html{
    scroll-behavior: smooth;
}
body{
	background-color:#F2F2F2;
}


.navbar-item:hover{
color:#AE404B!important;
}
.active{
	color:#AE404B!important;
}
.footer{
    list-style: none;
    display: flex;  
}
.fa-footer{
    
    font-size: 30px!important;
    color:#fff;
    background-color: #000;
}
.fa-facebook-official{
	margin: 12px;
    padding: 7px;
    border-radius: 5px;   
}
.fa-instagram{
    margin: 12px;
    padding: 7px;
    border-radius: 5px;
}
.fa-google-plus-official{
    margin: 12px;
    padding: 7px;
    border-radius: 5px;
}
.fa-facebook-official:hover{
    background-color: #3B5998;
    
}

.fa-instagram:hover{
    background: #f09433; 
    background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
    background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
    background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 

   
}

.fa-google-plus-official:hover{
    background-color: #D62408;
}
/*#social_logo{
    transform: translateX(3%);
}
@media only screen and (max-width: 1200px){
	#social_logo{
		transform: translateX(-15%);
	}
}
@media only screen and (max-width: 987px){
	#social_logo{
		transform: translateX(-6%);
	}
}*/

.well{
	background-color:#fff!important;
}


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 26px;
  border: none;
  outline: none;
  background-color: rgba(100, 100, 100, 0.4);
  color: white;
  cursor: pointer;
  padding: 0 11px;
  border-radius: 4px;
  
}

#myBtn:hover {
	background-color:#AE404B;
}
.i,.fa-angle-up{
    color:#fff;
    
}

</style>
</head>

<body> 
	<div class="nav-main">
	<nav class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
		data-target="#collapse">
		<span class="sr-only">Toggle Navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="index.php">
	   <img style="margin-top: -7px;" src="Images/inside.png" width=30;height=30;>
	</a>
		</div>
		<div class="collapse navbar-collapse" id="collapse">
		<ul class="nav navbar-nav">
			<li><a class="active"href="index.php">Home</a></li>
			<li><a href="#posts"class="navbar-item">Posts</a></li>
			<li><a href="#"class="navbar-item">Gallery</a></li>
			<li><a href="#"class="navbar-item">Feature</a></li>
			<li><a href="#"class="navbar-item">About Us</a></li>
			<li><a href="#"class="navbar-item">Contact Us</a></li>		
		</ul>
		<form action="index.php" class="navbar-form navbar-right">
		<div class="form-group">
		<input type="text" class="form-control" placeholder="Search" name="Search" >
		</div>
	         <button class="btn btn-default" name="SearchButton">Go</button>
			
		</form>
		</div>
		
	</div>
</nav>
</div>
<!--------- banner ----------->
<section id="banner" style="margin-top: -20px;">
	<img src="Images/banner.png" class="img-fluid img-responsive">	
</section>
<!----Service Section---->
<section id="Services">
<div class="container ">
<h1 class="title text-center">WHAT WE DO ?</h1>
<div class="row text-center">
<div class="col-md-4 services">
<img src="Images/img1.jpg" class="service-img">
<h4>Important Facts</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. </p>
</div>

<div class="col-md-4 services">
<img src="Images/img2.jpg" class="service-img">
<h4>Important Facts</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley .</p>
</div>


<div class="col-md-4 services">
<img src="Images/img3.jpg" class="service-img">
<h4>Important Facts</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley .</p>
</div>
</div>
</div>	
</section>

<!---Posts---->

	<h1 class="title text-center" id="posts">Posts</h1>
	<br>
	<br>
	<br>
	<div class="container" style="margin-top: 10px;">	
	<div class="row">
		<div class="col-md-8">
		<?php	
		global $connectingDB;
		if (isset($_GET["SearchButton"])) {
		$Search=$_GET["Search"];
		$ViewQuery="SELECT * FROM admin_panel WHERE datetime LIKE '%$Search%' OR title LIKE '%$Search%' OR category LIKE '%$Search%' OR post LIKE '%$Search%' ";
		}elseif(isset($_GET["Category"])){
			$Category=$_GET["Category"];
			$ViewQuery="SELECT * FROM admin_panel WHERE category='$Category' ORDER BY datetime desc";
		}elseif(isset($_GET["Page"])){
			$Page=$_GET["Page"];
			if($Page==0||$Page<1){
				$ShowPostFrom=0;
			}else{
				$ShowPostFrom=($Page*5)-5;}
			$ViewQuery="SELECT * FROM admin_panel ORDER BY datetime desc LIMIT $ShowPostFrom,5";	
		}
		else{

		$ViewQuery="SELECT * FROM admin_panel ORDER BY datetime desc LIMIT 0,3";}
		$Execute=mysqli_query($connectingDB,$ViewQuery);
		while ($DataRows=mysqli_fetch_array($Execute)) {
		$PostId=$DataRows["id"];
		$DateTime= $DataRows["datetime"];
		$Title= $DataRows["title"];
		$Category= $DataRows["category"];
		$Admin= $DataRows["author"];
		$Image= $DataRows["image"];
		$Post= $DataRows["post"]; 
		?>
		<div class="blogpost thumbnail" style="background-color:whitel;">
			<img class="img-responsive img-rounded" src="Upload/<?php echo $Image; ?>">
		<div class="caption">
		<h1 id="heading"> <?php echo htmlentities($Title); ?> </h1>	<p class="description">Category:<?php echo htmlentities($Category); ?>Published on <?php echo htmlentities($DateTime); ?>  </p>
		<p class="post"><?php echo $Post; ?></p>
		</div>
	</div>
		<?php } ?>	
		<nav>
			<ul class="pagination pull-left pagination-lg">
			<?php
		 global $connectingDB;
		 $QueryPagination="SELECT COUNT(*) FROM admin_panel";
		 $ExecutePagination=mysqli_query($connectingDB,$QueryPagination);
		 $RowPagination=mysqli_fetch_array($ExecutePagination);
		 $TotalPosts=array_shift($RowPagination);

		 $PostPagination=$TotalPosts/5;
		 $PostPagination=ceil($PostPagination);
		 for($i=1;$i<=$PostPagination;$i++){
		 if(isset($Page)){	
		 if($i==$Page){	
		 	?>
		<li class="active"><a href="index.php?Page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
		<?php
	}else{ ?>
		<li><a href="index.php?Page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
		<?php } 
	}
	}
	?>

 	</ul><br /><br /><br /><br /><br />
</nav>
		</div>
		

		
		<div class="col-md-4">
	    <div class="well">
		<h4>Follow Us</h4>
		<ol class="footer" id="social_logo">
                                    <li>
                                    <a href="#">
                                    <div class="float-left f"><i class="fa fa-facebook-official fa-footer" aria-hidden="true"></i></div>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="#">
                                    <div class="float-left i"><i class="fa fa-instagram fa-footer" aria-hidden="true"></i></div>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="#">
                                    <div class="float-left t"><i class="fa fa-google-plus-official fa-footer" aria-hidden="true"></i></div>
                                    </a>
                                    </li>                    
		</ol>
		

		
        <div class="col-md-12">
		
		<h4>About Us</h4>
		<p>We are the Official E-media group of Haldia Institute of Technology but we're not  just a media group but a launchpadfor your talent. A safe space where you can grow and blossom just like a flower in spring. We believe in removing barriers and bridging the gap between students and the campus proceedings. 
We believe that every student deserves a fair bit of chance to manifest his mettle.
Though not an entire sun but a ray of hope a helping hand in HIT and beyond so that you don't get perplexed at any point .
 A family , bonds , people you'll appreciate your entire life . Remember we are also students like you and not a bunch of professionals. Even we have our imperfections. Let's just say....We are “Somewhere between the better and the best.</p>
</div><br><br>

		
							  <h3>Categories</h3>
							  <br>
							  <br>
                             <?php 
                             global $connectingDB;

		$ViewQuery="SELECT * FROM category ORDER BY datetime desc";
		$Execute=mysqli_query($connectingDB,$ViewQuery);
		while ($DataRows=mysqli_fetch_array($Execute)) {
			$id=$DataRows['id'];
			$Category=$DataRows['name'];
			?>
<a href="index.php?Category=<?php echo $Category; ?>">		
<h4 style="color: blue;"><?php echo $Category."<br>"."<hr>"; ?></h4>
</a>
<?php } ?>

		<h3>Recent Posts</h3>

		<?php
		$connectingDB;
		$ViewQuery="SELECT * FROM admin_panel ORDER BY datetime desc LIMIT 0,5";
		$Execute=mysqli_query($connectingDB,$ViewQuery);
		while ($DataRows=mysqli_fetch_array($Execute)) {
		$PostId=$DataRows["id"];
		$DateTime= $DataRows["datetime"];
		$Title= $DataRows["title"];
		$Image= $DataRows["image"];
		if (strlen($DateTime)>11){
			$DateTime=substr($DateTime,0,11);}
		?>
	<div>
	<img style="margin-top: 10px;margin-left: 10px;" src="Upload/<?php echo htmlentities($Image); ?>" width=70; height=70;>
	<h4 id="heading" style="margin-left: 90px;margin-top: -65px;"><?php echo htmlentities($Title); ?></h4>	
	<p id="description" style="margin-left: 90px;"><?php echo htmlentities($DateTime); ?></p>
	<hr>
</div>

	<?php } ?>


		</div>
		
		</div>
						
		  </div>
	</div>
	</div>

	<!------Client Views----->
<h1 class="title text-center">Our Head</h1>	
<section id="testimonials">
<div class="container">
<br>
<br>
<div class="row col-md-offset-2">
<div class="col-md-5 tetimonials">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
<img src="Images/person.png">
<p class="user-details"><b>Hero</b><br>President</p>
</div>
<div class="col-md-5 tetimonials">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
<img src="Images/person.png">
<p class="user-details"><b>Hero</b><br>President</p>
</div>

</div>	
</div>
</section>
</section>	

			
 
<div id="Footer">
<hr><p>Theme By | Kislay And Kaumi Yashi |&copy;2019-2020 --- All right reserved.
</p>
<a style="color: white; text-decoration: none; cursor: pointer; font-weight:bold;" href="http://jazebakram.com/coupons/" target="_blank">
<p>
This site is only used to watch the recent post.<br>&trade; kislay.com</p><hr>
</a>
	
</div>

<!--scroll top button-->
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class=" fa fa-angle-up"></i>  </button>


<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>




</body>
</html>