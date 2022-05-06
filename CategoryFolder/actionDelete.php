<?php 
   include_once('../connection.php'); 
 
  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'] ; 
    

  if (!empty($id)) {
  $query = "delete from categories where id = $id" ; 
  $result = mysqli_query($connection , $query)  ; 
  if($result){
 header("Location:category.php");
  }else{
  	echo "failed to delete" ; 
  }
  mysqli_close($connection) ;
}else{
	echo "ID is missing" ; 
}
 
}


?>

