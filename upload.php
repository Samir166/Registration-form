<?php

include 'conf.php';

if(isset($_FILES['image'])){
   
    $temp_name = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_ext = strtolower(end(explode(".", $image_name)));
    $user_name = $_POST['name'];
    $user_surname = $_POST['surname'];
    $user_email = $_POST['email'];

    if ($image_ext = "jpg") {
    	
	    move_uploaded_file($temp_name, "./profile_image/".$image_name);
	    header("Location: profile.php?username=".$user_name."&img=".$image_name."&user_surname=".$user_surname."&email=".$user_email);
	}
	else{
		echo "This is not an image!";
	}
}

?>