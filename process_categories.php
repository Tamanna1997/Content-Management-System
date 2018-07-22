<?php
session_start();
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';

    
      


$category='';


 if (isset($_SESSION['user_logged_in']) AND $_SESSION['user_logged_in'] === true) {
      
      
      



 if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$category =trim($_POST['category']);
if (empty($category)) {
	$categoryError = "Category is required";
	
}


if( (!isset($categoryError))  )
{
	
$added = "INSERT INTO posts (category) VALUES ( '" . $category . "');";
    

if (mysqli_query($conn, $added)) {
      echo "Category added successfully";
      exit;
    } else {
      echo "Error: " . $insert . "<br>" . mysqli_error($conn);
    }
}
}
}

?>





