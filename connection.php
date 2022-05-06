
<?php
 $connection = mysqli_connect('localhost' , 'root' , '' ,'Stores_db') ; 
  if(!$connection){
  	die("connection faild : " . mysqli_connect_error()) ;
  }

?>
