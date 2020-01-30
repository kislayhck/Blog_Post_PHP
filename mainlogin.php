<?php
include("DB.php");  
session_start();
  ?> 
  
<?php 

 if(isset($_POST['login_btn']))
 {
   $email=$_POST['email'];
   $password=$_POST['password'];
   $hashFormat ="$2y$10$";
   $salt="iusesomecrazystrings22";
   $hashF_and_salt= $hashFormat . $salt;
   $encrypted_password= crypt($password,$hashF_and_salt);
   
   $query="select * from signup WHERE email='$email' AND password='$encrypted_password'";
   
   $query_run = mysqli_query($connectingDB,$query);
   if(mysqli_num_rows($query_run)>0)
   {
     //valid
     $_SESSION['email']= $email;
      redirect_to("Dashboard.php");
   }
   else
   {  //invalid
   echo '<script type="text/javascript">alert("invalid user")</script>';
   }		  
 } 
        ?> 
<!DOCTYPE html>
<html>
<head>
  <title>log in</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <style>
  body{
   margin: 10px;
   padding: 10px;
   background-color: #1191B5;


}


.wel_text{
    text-align: center;
    color:#fff;
    position: absolute;
    top:12%;
    left:40%; 
}
.login_line{
    font-size: 80%;
    font-weight: 400;
}
@media only screen and (max-width: 10000px){

.bt{
    display: none;
}
}

.para{
    text-align: center;
    font-family: 'Felipa', cursive;
}
.para_article{
    text-align: center;
    font-family: 'Nova Flat', cursive;
    font-size:30px;
    color: white;
	
}
.begin_btn:hover{
    background-color: rgba(21, 255, 0, 0)!important;
}
.login{
    background-image: linear-gradient(to right top, #d13b62, #da455f, #e2505c, #ea5b59, #f06656, #f47153, #f87b51, #fb864f, #fd924d, #ff9e4d, #ffab4d, #ffb74f);
    padding: 40px;
    margin: 0px;
    position: absolute;
    top: 25%;
    border-radius: 4px; 
    left:40%;
    -webkit-box-shadow: 24px 20px 5px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 24px 20px 5px 0px rgba(0,0,0,0.75);
    box-shadow: 24px 20px 5px 0px rgba(0,0,0,0.75);
}
@media only screen and (max-width: 588px){
.login{
  position: absolute;
  left:0;
}
.wel_text{
 top:8%;
 left: 0;
}
}

  
  </style>
</head>
  <body>
    
<h1 class="wel_text">Welcome Admin</h1>
  <div class="container-fluid">
  <div class="container">
  <form class="login"action="Dashboard.php" method="post">
  <p style="color:#fff;">Sign in to start your session</p>
      <div class="form-group">
        <label for="exampleInputEmail1"><i class="fa fa-envelope" aria-hidden="true"></i> Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"name="email"required>
        
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1"><i class="fa fa-user-secret" aria-hidden="true"></i> Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"name="password"required>
      </div>
     <!-- <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>   -->
      <button name="login_btn"type="submit" class="btn btn-primary">log in</button>
      
    </form>

</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>