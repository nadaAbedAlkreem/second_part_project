<?php
session_start();
  	if(isset($_SESSION['login']) && $_SESSION['login'] ){
   include_once('../connection.php'); 
   include_once('../java.php');
 


 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Steal My Admin</title>
		<link rel="stylesheet" href="../css/960.css" type="text/css" media="screen" charset="utf-8" />
		<!--<link rel="stylesheet" href="css/fluid.css" type="text/css" media="screen" charset="utf-8" />-->
		<link rel="stylesheet" href="../css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		
					<h1 id="head">Dashborad  Store </h1>
		
		<ul id="navigation">
			<li><span class="active"><a href="../StoreFolder/Store.php">Store</a></span></li>
			<li><a href="../CategoryFolder/category.php">Category</a></li>
			<li><a href="rating.php">rating</a></li>
		</ul>
		

				
				<div class="grid_16"  style="margin-left: 450px;  ">
					<table  >
						<thead>
							<tr>
							  	<th>value AllRating </th>
							   	<th>name Store</th>		
  								<th>date rating </th>
								<th>ip address </th>		
									<th>count </th>						
 							</tr>
						</thead>
					 
						<tbody>
							
							 <?php

							  
   $query = "SELECT ratings.id ,count(ratings.id) as count , avg(ratings.value) as avg , stores.name ,  ratings.date , ratings.idAddress  , COUNT(ratings.store_id) from ratings , stores where ratings.store_id = stores.id GROUP BY ratings.store_id ";
                            $result = mysqli_query($connection , $query) ; 
                         if(mysqli_num_rows($result) >0 ){
                         	while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>'.'<td>'.$row['avg'].'</td>'.''.'<td>'.$row['name'].'</td>'.'<td>'.$row['date'].'</td>'.'<td>'.$row['idAddress'].'</td>'.'<td>'.$row['count'].'</td>'.'</tr>' ;
                         		  
                          	} 
 
                          }
                  		?>
							
						 
						</tbody>
                       
					</table>
					
				</div>
				</div>
				 
		
		 
	</body>
</html>
<?php 
 }else{
      header("Location:../login.php");

                       }

?>