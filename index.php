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

  .fa-chevron-right{
  	font-size:10px;
  	transform: translateY(15%);
  	backface-visibility: none;

  }
    
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
			<li><a href="gallery1.php"class="navbar-item">Gallery</a></li>
			<li><a href="#features"class="navbar-item">Feature</a></li>
			<li><a href="#about_us"class="navbar-item">About Us</a></li>
			<li><a href="#Contact_us"class="navbar-item">Contact Us</a></li>		
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
<h1 class="title text-center" id="features"><u>WHAT WE DO ?</u></h1>
<div class="row text-center">
<div class="col-md-4 services">
<img src="Images/img1.jpg" class="service-img">
<h4>Quality Context</h4>
<p>We believe in quality and to the point detailing so that you don't miss out even a drop in an ocean of information. </p>
</div>

<div class="col-md-4 services">
<img src="Images/img2.jpg" class="service-img">
<h4>Faster Updates</h4>
<p>We ensure that you get the fastest update on everything , because we believe that only you can choose what is useful to you.
</p>
</div>


<div class="col-md-4 services">
<img src="Images/img3.jpg" class="service-img">
<h4>Almanac</h4>
<p>We believe that every person is the master of unique skill. Not every one is a prodigy but your perseverance is your character builder. With this intent we have introduced our weekly Almanac.</p>
</div>
</div>
</div>	
</section>

<!---Posts---->

	<h1 class="title text-center" id="posts"><u>Posts</u></h1>
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
			<ul class="pagination pull-left pagination-sm">
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
<a href="index.php?Page=1" style="margin-left: 180px;"><button onclick="btn01()" class="btn btn-sm btn-primary" >Show more</button></a>    

  
 	</ul><br /><br /><br /><br /><br /><br />
</nav>
		</div>
		

		
		<div class="col-md-4">
	    <div class="well">
		<h4>Follow Us</h4>
		<ol class="footer" id="social_logo">
                                    <li>
                                    <a href="https://www.facebook.com/HITian.Inside/">
                                    <div class="float-left f"><i class="fa fa-facebook-official fa-footer" aria-hidden="true"></i></div>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="https://instagram.com/hitianinside?igshid=1m5wnm33zitom">
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
		
		<h4 id="about_us">About Us</h4>
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
<h1 class="title text-center" style="margin-top: 1px;" id="Contact_us"><u>Our Heads<u></h1>
<section id="testimonials">	
<div class="container">

<div class="row " style="margin-top: -30px;margin-left:120px;">
<div class="col-md-6 tetimonials" style="padding: 5px;">
<img src="Images/pic2.jpg">
<p class="user-details"><b>Prof.(Dr.)Apratim Mitra</b><br>Mentor of HITian Inside<br> and HOD,MCA,HIT.</p>
</div>
<div class="col-md-6 tetimonials" style="padding: 5px;">

<img src="Images/pic1.jpg">
<p class="user-details"><b>Prof.(Dr.)Bikash Bepari</b><br>Students' Welfare DEAN <br>and HOD,PE,HIT.</p>
</div>





</div>	
</div>
</section>
</section>	

			
 
<div id="Footer">
<hr><p>Theme By | <a href="http://kislay.ml/">Kislay</a> And Kaumi Yashi |&copy;2019-2020 --- All right reserved.
</p>
<a style="color: white; text-decoration: none; cursor: pointer; font-weight:bold;" href="http://kislay.ml/" target="_blank">
<hr>
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
<script type="text/javascript">
    var button = document.getElementById('show_button')
    button.addEventListener('click',hideshow,false);

    function hideshow() {
        document.getElementById('hidden-div').style.display = 'block'; 
        this.style.display = 'none'
    }   
</script>



</body>
</html>