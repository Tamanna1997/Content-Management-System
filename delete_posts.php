<?php  
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';

$sql = "DELETE FROM posts WHERE id = " . $_GET['id'];
if (mysqli_query($conn, $sql)) {
  session_start();
  $_SESSION["message"] = "Post deleted successfully";
  header('Location: posts.php');
  exit;
} else {
  echo "Error updating record: " . mysqli_error($conn);
}