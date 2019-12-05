<?php
include'functions/imgurAPI.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset($_POST['profile']) || isset($_POST['post'])){
	$filename = basename($_FILES["fileUpload"]["name"]);
        $filetype = pathinfo($filename, PATHINFO_EXTENSION); // get file extension and check its type.
        if($filetype != "png" && $filetype != "jpg" && $filetype!= "jpeg" && $filetype != "gif"){
            echo 'Only JPG, JPEG, PNG & GIF formats are allowed.';
        }
	if(exif_imagetype($_FILES["fileUpload"]["tmp_name"])){
	
	if(isset($_POST['post'])){
		$return = upload_media();
                $success = 0;
                $sql5 = "INSERT INTO posts (post_caption, post_public, post_time, post_by,post_media)
                         VALUES ('" . $row['user_firstname'] . " " . $row['user_lastname'] . " has changed his profile picture.', 'N', NOW(), {$_SESSION['user_id']},'1')";
                    $query5 = mysqli_query($conn, $sql5);
                    $last_id = mysqli_insert_id($conn);
                    
				$hashs = (string)$return->data->deletehash;
				$links = (string)$return->data->link;
				
				$sql6 = "INSERT INTO media (media_post, media_hash, media_url)
						VALUES ('$last_id','$hashs','$links')";
				$query6 = mysqli_query($conn, $sql6);
				header("refresh:5; url=home.php");
                }
		else if(isset($_POST['profile'])){
				$success = 0;
                $filepath = "data/images/profiles/" . $_SESSION['user_id'] . '.' . $filetype;
                if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $filepath)){
                    $sql5 = "INSERT INTO posts (post_caption, post_public, post_time, post_by)
                            VALUES ('" . $row['user_firstname'] . " " . $row['user_lastname'] . " has changed his profile picture.', 'N', NOW(), {$_SESSION['user_id']})";
                    $query5 = mysqli_query($conn, $sql5);
                    $last_id = mysqli_insert_id($conn);
                    $filepath2 = "data/images/posts/" . $last_id . '.' . $filetype;
                    copy($filepath, $filepath2);
                    if(!$query5)
                        echo mysqli_error($conn);
                    else
                        $success = 1;

                }
                if($success = 1)
                    header("location:profile.php?id=" . $_SESSION['user_id']);
            }
    
	 //https://i.imgur.com/y3GJYPC.jpg
	//j1YMzIvXiWPDAl7
	
	//https://i.imgur.com/A8wBQlQ.jpg
	//deletehash//czLLd3TPYgYaVLS
	
	//https://i.imgur.com/cDfojaF.jpg
	//v1kvx0LE4B7qZkH
	
	//https://i.imgur.com/ix2nbtq.jpg
	//0gycFD5CMgS9uoD
	
	//https://i.imgur.com/BQ1J9B8.jpg
	//qOnhBnblfQpL27g
	
	//https://i.imgur.com/0U0xy3c.jpg
	//8oRYITbQXpfm3QG
	
	//https://i.imgur.com/Ski7XrS.jpg
	//Bo3RDCc9XevVO2o
	
		//FZGprP2EkLMtDjP
		//KDQSHkF5HPRaVoj
		//G6GQ8BZCeMmGWjM
		//z5cvMeeAFdDsDjA
		//7t3UY3QUyGbTR1S
		
	
}}} ?>