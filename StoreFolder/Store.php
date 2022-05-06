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
		
					<h1 id="head">Steal My Admin Template</h1>
		
		<ul id="navigation">
			<li><span class="active"><a href="Store.php">Store</a></span></li>
			<li><a href="../CategoryFolder/category.php">Category</a></li>
			<li><a href="../ratingfolder/rating.php">rating</a></li>
		</ul>
		

				
				<div class="grid_16"  style="margin-left: 212px;  margin-right: 210px;">
					<table>
						<thead>
							<tr>
								<th>name Store</th>
								<th>Address</th>
								<th>mobile</th>
								<th>img</th>
								<th>Category</th>								
								<th   >Actions</th>
							    <th   >Actions</th>

							</tr>
						</thead>
						
						<tbody>
							
							<!-- <tr class="alt">
								<td>name Store</td>
								<td>Address</td>
								<td>mobile</td>
								<td>img</td>
								<td>Category</td>	
								<td><a href="#" class="edit">Edit</a></td>
								<td><a href="#" class="delete">Delete</a></td>
							</tr>
						  -->

						  	<?php

                            $query = "SELECT id ,  name ,   mobile , address,img , category_id  from stores";
                           $result = mysqli_query($connection , $query) ; 
                         if(mysqli_num_rows($result) >0 ){
                         	while ($row = mysqli_fetch_assoc($result)) {
                         		 echo '<tr>'.'<td>'.$row['name'].'</td>'
                                 .'<td>'.$row['mobile'].'</td>'
                                 .'<td>'.$row['address'].'</td>'
                                 .'<td><img width=30px src= "'.'http://localhost/admin-template-master/StoreFolder/'.$row['img'].'"></td>'
                                 .'<td>'.$row['category_id'].'</td>'.'
        <td><a href="editStore.php?id='.$row['id'].'">edit<a/></td>'.'<td><form action = "actionStoreDelete.php" method ="post" id = "my-form"><input type = "hidden" name = "id" value ="'.$row['id'].'"><button type ="button" class ="btn btn-danger delete">Delete</button></form></td>'.'</tr>' ;
                          	} 
                          }
                      
                  		?>
							
						</tbody>
					</table>
					<div class="grid_5">
					<p>
						<button onclick="location.href='AddStore.php'"  class="btn btn-outline-dark"  > Add stores</button>
 					</p>
				</div>
				</div>
			</div>
			<script type="text/javascript">
					$('.delete').click(function (event)
					{
						event.preventDefault(); 
						var result = confirm("Are you sure? ") ; 
						if (result == true) {
							$(this).parent('form').submit();
						}


					}

		
				);


				</script>
		 
	</body>
</html>

<?php






 }else{
      header("Location:../login.php");

                       }



	?>