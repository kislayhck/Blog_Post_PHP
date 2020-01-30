<?php
require_once("include/DB.php");  
session_start();
  ?> 
<!DOCTYPE html>
<html>
<head>
  <title>sign up</title>
  <meta charset="UTF-8">
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
    top:8%;
    left:41%; 
}
@media only screen and (max-width: 588px){
.signup{
  position: absolute;
  left:0!important;
}
.wel_text{
 top:8%;
 left: 0;
}
}


form.signup{
    background-image: linear-gradient(to right top, #d13b62, #da455f, #e2505c, #ea5b59, #f06656, #f47153, #f87b51, #fb864f, #fd924d, #ff9e4d, #ffab4d, #ffb74f);
    padding: 40px;
    margin: 0px;
    position: absolute;
    top: 18%;
    border-radius: 4px; 
    left:40%;
    -webkit-box-shadow: 24px 20px 5px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 24px 20px 5px 0px rgba(0,0,0,0.75);
    box-shadow: 24px 20px 5px 0px rgba(0,0,0,0.75);
}
</style>
</head>
  <body>
    
<h1 class="wel_text">Welcome Admin</h1>
  <div class="container-fluid">
  <div class="container">
    <form class="signup"action="sign_up.php"method="post">
    
      <div class="form-group">
        <label for="exampleInputEmail1"><i class="fas fa-user"></i> &nbsp;</i>Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"name="email"required>
      
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1"><i class="fas fa-lock"></i> &nbsp;Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"name="password"required>

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1"><i class="fas fa-lock"></i> &nbsp;confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="confirm Password"name="cpassword"required>
    
      </div>
     
     <div>
      <label for="gender" >Gender</label>
      <select class="custom-select custom-select-sm"name="gender">
        <option selected value="male" >Male</option>
        <option value="Female" >Female</option>
        <option value="other" >Other</option>
      </select>
      </div>
     <br />
      <button name="submit_btn"type="submit" class="btn btn-primary">sign up</button>
      <hr>
      <span class="login_line">Have an account with us?</span>
      &nbsp;
      <a href="mainlogin.php">
      <button type="button" class="btn btn-primary">log in</button>
     </a>
    </form>
</div>
</div>
    <?php
    if(isset($_POST['submit_btn']))
	{
		//echo '<script type="text/javascript">alert("sign up successfully")</script>';
		
		$email = $_POST['email'];
		$password =$_POST['password'];
		$cpassword = $_POST['cpassword'];
		$gender = $_POST['gender'];
	   
	   if($password==$cpassword) 
		{
            $hashFormat ="$2y$10$";
            $salt="iusesomecrazystrings22";
            $hashF_and_salt= $hashFormat . $salt;
            $encrypted_password= crypt($password,$hashF_and_salt);
           
	   
		$query="select * from signup WHERE email='$email'";
		$query_run	= mysqli_query($connectingDB,$query);

		
		if(mysqli_num_rows($query_run)>0)
		{
			//there is already a user with the same username
			echo '<script type="text/javascript">alert("User already exits")</script>';
		
		} else
		{
			
			$query="insert into signup values('','$email','$encrypted_password','$gender')";
		    $query_run = mysqli_query($connectingDB,$query);
			
			if($query_run)
			{
				echo '<script type="text/javascript">alert("successfully register..go to login page")</script>';
			}
			else
			{
             
			 echo '<script type="text/javascript">alert("error")</script>';
			}			
				
		}	
		
		}
		
	   else{
		echo '<script type="text/javascript">alert("password and confirm password not match")</script>';
	     }
	}
  ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>