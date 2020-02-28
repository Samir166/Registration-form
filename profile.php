<?php

$image_name =$_GET['img'];
$user_name =$_GET['username'];
$user_surname =$_GET['user_surname'];
$user_email =$_GET['email'];

?>

<!DOCTYPE html>
<html>
<head>
<title>My Profile</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

<style>
        
    .profile-header {
        transform: translateY(5rem);
    }

    body {
        background: #2c6ed5;
        min-height: 100vh;
        color: white;
    }

    h4{
        font-size: 40px;
    }

    h5{
        font-size: 20px;
    }

</style>


<div class="row py-5 px-4">
    <div class="col-xl-12 col-md-6 col-sm-10 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 bg-dark">
                <div class="media align-items-end profile-header">
                    <div class="profile mr-3">
                        <img src="./profile_image/<?=$image_name;?>" alt="..." width="260" class="rounded mb-2 img-thumbnail">
                    </div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0"><?=$user_name;?><?=" ";?><?=$user_surname;?></h4>
                        <h5 class="mt-0 mb-0"><?=$user_email;?></h5>
                    </div>
                </div>
            </div>
         </div><!-- End profile widget -->
    </div>
</div>

</body>

</html>