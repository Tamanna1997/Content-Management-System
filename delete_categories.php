<?php  
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';
if(isset($_GET['category'])){
	$cat_id = $_GET['category'];
$sql = "DELETE FROM posts WHERE category = '$cat_id' ";
}
if (mysqli_query($conn, $sql)) {
  session_start();
  $_SESSION["message"] = "Post deleted successfully";
  header('Location: categories.php');
  exit;
} else {
  echo "Error updating record: " . mysqli_error($conn);
}