<?php 

include_once('../connection.php'); 

if(isset($_GET['id'])){
	$id = $_GET['id'] ; 
$query = "SELECT * from  stores where id = $id limit 1 " ; 
$result = mysqli_query($connection , $query ) ; 
  if(mysqli_num_rows($result) >0 ){
$row = mysqli_fetch_assoc($result) ; 
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

		<h1 id="head">Steal My Admin Template</h1>

			<ul id="navigation">
			<li><span class="active"><a href="Store.php">Store</a></span></li>
			<li><a href="../CategoryFolder/category.php">Category</a></li>
			<li><a href="../ratingfolder/rating.php">rating</a></li>
		</ul>
		

<div class="container">
		<div class="row"   >

			 <?php 
       //            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       //            	$id = $_GET['id'] ; 
       //          	  	$name = $_POST['name'] ; 
				   // 		$mobile = $_POST['mobile']; 
				   // 		 $mobile = $_POST['mobile']; 
    			// 		$address = $_POST['address'] ; 
    			// 		$NameCategory = $_POST['NameCategory'];
             
       //      if (!empty($id) && !empty($name) && !empty($mobile) && !empty($address) && !empty($NameCategory)) {
       //                  $query = "update stores set name = '$name' , mobile =  '$mobile' , 
       //                  address = '$address' , category_id =  $NameCategory
       //                   where id = $id " ; 
       //              	$result = mysqli_query($connection , $query)  ; 
       //               	if ($result) {
       //              		echo '
       //                      <div class = "row " > 
       //                      <div class = "col-12">
       //                      <div class = "alert alert-success"> some filed are true 
       //                      </div>
       //                      </div>
       //                      </div>

       //              		' ;
       //                	}else{
       //               		echo '
       //                      <div class = "row " > 
       //                      <div class = "col-12">
       //                      <div class = "alert alert-danger "> some filed are missing 
       //                      </div>
       //                      </div>
       //                      </div>

       //              		' ; 

							// } 
       //              }   	                 }                   
                 ?>
				<div class="col-10" style="margin-left : 100px">
						<form method="post" action= "actionStore.php"
                           enctype="multipart/form-data" 
						>
                           <input type="hidden" name="edit_id" value="<?=  ((isset($row)) ? $row["id"] : "" ) ?>" >

							<div class="form-group">
								<label for="Name" > name  </label>
								<input type="text" name="name" id="name" class="form-control"
								value="<?=  ((isset($row)) ? $row["name"] : "" ) ?>">
							</div>
							<div class="form-group">
								<label for="mobile" > mobile </label>
								<input type="text" name="mobile" id="mobile" class="form-control"
								value="<?=  ((isset($row)) ? $row["mobile"] : "" ) ?>">
							</div>
							<div class="form-group">
								<label for="address" > address </label>
								<input type="text" name="address" id="address" class="form-control"
								value="<?=  ((isset($row)) ? $row["address"] : "" ) ?>">
							</div>
							<div class="form_group">
   							<label for="image_personal">Image </label>
   							<input type="file" name="image_personal" class="form-control"
              	value="<?=  ((isset($row)) ? $row['img'] : "" ) ?>"
   							  >
   							  
    							</div>
							<div class="form-group">
								<label for="NameCategory" >name category </label>
								<input type="text" name="NameCategory" id="NameCategory" class="form-control" value="<?=  ((isset($row)) ? $row["category_id"] : "" ) ?>">

							</div>

						
 							   
							<button 
							class="btn btn-outline-dark" type="submit"  name="edit_btn" 
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