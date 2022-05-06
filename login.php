<?php  

 include_once('connection.php'); 

      $query = "SELECT email , password  from users " ;
        $result = mysqli_query($connection , $query) ; 
       while ($row = mysqli_fetch_assoc($result)) {
       	 $name = $row['email'] ; 
       	 $passwordDB = $row['password'];
       }


           if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset( $_POST['name'] ) && isset( $_POST['password'] )) {
            	session_start();
            	$_SESSION['login'] = true ;

            $user =  $_POST['name'] ; 
            $pass  =  $_POST['password'] ;
             if ($user == $name  && $pass ==  $passwordDB ) {
                   header("Location:StoreFolder\Store.php");
              

           }else{
           	view();
           } 
       }
       }else{
       	view();
       }

?>


   <?php  function view() { ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Steal My Admin</title>
		<link rel="stylesheet" type="text/css" href="css/Style_login.css">
 		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
<div class="container">
	<div class="screen">
		<div class="screen__content" >
			<form class="login" action="" method="post">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="User name / Email"  name="name">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password" name="password">
  				</div>
				<button class="button login__submit" >
					<span  style="color: black; " >Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			 
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

<?php } ?>

 