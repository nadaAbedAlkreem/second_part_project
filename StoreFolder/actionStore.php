<?php
   include_once('../connection.php'); 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
      if(isset($_POST['addStore'])){
     $file_name=$_FILES['image_personal']['name'];
     $file_size=$_FILES['image_personal']['size'];
     $file_tmp=$_FILES['image_personal']['tmp_name'];
     $file_type=$_FILES['image_personal']['type'];
     $file_ext=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
    $file_newname=strval(time()+rand(1,10000000))."$file_ext";
    $upload_path='upload/'. $file_newname;
    move_uploaded_file($file_tmp, $upload_path);

   



   ###################
    $name = $_POST['name'] ; 
    $mobile = $_POST['mobile']; 
    $address = $_POST['address'] ; 
    $NameCategory = $_POST['NameCategory'];
    $img = str_replace('../', '', $upload_path);
    $query = "INSERT INTO stores (name ,address , mobile, img,  category_id) VALUES ('$name' , '$mobile', '$address','$img','$NameCategory')"  ;
    $result = mysqli_query($connection , $query) ; 
    if($result){
    	 header("Location:Store.php");
    }else{
    	echo "ni" ; 
    }  
 }  
}

        if (isset($_POST['edit_btn'])) {
        	 
      
                     	$id = $_POST['edit_id'] ; 
                	  	$name = $_POST['name'] ; 
				   		$mobile = $_POST['mobile']; 
				   	  $file_tmp=$_FILES['image_personal']['tmp_name'];
				   		 $file_name =$_FILES['image_personal']['name']; 
    					$address = $_POST['address'] ; 
    					$NameCategory = $_POST['NameCategory'];
    					 $file_ext=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
    					$file_newname=strval(time()+rand(1,10000000))."$file_ext";
   						 $upload_path='upload/'. $file_newname;
   						 move_uploaded_file($file_tmp, $upload_path);
   					    $imgUdat = str_replace('../', '', $upload_path);
                       
                   if (!empty($id) && !empty($name) && !empty($mobile) && !empty($address) && !empty($NameCategory && !empty($imgUdat)) ) {


                        $query = "update stores set name = '$name' , mobile =  '$mobile' , 
                        address = '$address' , category_id =  $NameCategory , img = '$imgUdat'
                         where id = $id " ; 
                    	$result = mysqli_query($connection , $query)  ; 
                     	if ($result) {
                    		echo     
                  
                     		    header("Location:Store.php");

                    		 ;
                      	}else{
                     		echo '
                            <div class = "row " > 
                            <div class = "col-12">
                            <div class = "alert alert-danger "> some filed are missing 
                            </div>
                            </div>
                            </div>

                    		' ; 

							} 
                    }   	                 
                      }


	?>