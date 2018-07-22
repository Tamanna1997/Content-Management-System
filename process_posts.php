<?php
session_start();
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';

    
      

$title ='';
$content='';
$category='';
$publish_date='';
$status="publish";
 if (isset($_SESSION['user_logged_in']) AND $_SESSION['user_logged_in'] === true) {
      $sql = "SELECT first_name FROM usertb WHERE id = " . $_SESSION['logged_in_user_id'] . " LIMIT 1";
      $result = mysqli_query($conn, $sql);
      $user = mysqli_fetch_assoc($result);
      
      }



 if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$title =trim($_POST['title']);
if (empty($title)) {
	$titleError = "Title is required";
	
}
$content =$_POST['content'];
if (empty($content)) {
	$contentError = "Content is required";
	
}



$category =trim($_POST['category']);

$publish_date =trim($_POST['publish_date']);
if (empty($publish_date)) {
	$publish_dateError = "Publish Date is required";
	
}



if( (!isset($titleError)) AND (!isset($contentError)) AND (!isset($publish_dateError)) )
{
	
$insert = "INSERT INTO posts (publish_date, title, author, category, post_data,  status) VALUES ('" . $publish_date . "', '" . $title . "', '" . $user['first_name'] . "', '" . $category . "', '" .$content . "', '" .$status . "');";
    

if (mysqli_query($conn, $insert)) {
      echo "Post added successfully";
      exit;
    } else {
      echo "Error: " . $insert . "<br>" . mysqli_error($conn);
    }
}
}

?>





