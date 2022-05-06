<?php

  include_once('../connection.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name = $_POST['NameCategory'] ; 
 
$query = "INSERT INTO  categories (name )
VALUE ('$name')";

$result = mysqli_query($connection, $query) ; 
if($result){
 header("Location:category.php");

 }else {
	echo 'faild' ; 

}
}
 




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Steal My Admin</title>
		<link rel="stylesheet" href="../css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>

		<h1 id="head">Dashborad</h1>

			<ul id="navigation">
			<li><span class="active"><a href="../StoreFolder/Store.php">Store</a></span></li>
			<li><a href="category.php">Category</a></li>
			<li><a href="../ratingfolder/rating.php">rating</a></li>
		</ul>
		

<div class="container">
		<div class="row"   >
				<div class="col-10" style="margin-left : 100px">
						<form method="post" action=""

						>
							<div class="form-group">
								<label for="NameCategory" > name category </label>
								<input type="text" name="NameCategory" id="NameCategory" class="form-control">
							</div>




						
 							   
							<button 
							class="btn btn-outline-dark" type="submit" 
							> save</button>
						</form>
				</div>
		</div>

</div>

<script type="text/javascript">
	$('#save').click(function(event){
  event.preventDefault();
var result=confirm("Are you sure?");
if (result==true) {
 $('#my_form').submit();
}
	});
</script>