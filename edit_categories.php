<?php
session_start();


?>
<?php  
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';
include_once '../includes/header.php';
if(isset($_GET['category'])){
    $cat_id = $_GET['category'];


$sql = "SELECT * FROM posts WHERE category = '$cat_id' ";
$result = mysqli_query($conn , $sql);


if (mysqli_num_rows($result)>0){
  $user = mysqli_fetch_array($result);

  

if(isset($_POST['submit'])){






$update =mysqli_query( $conn,"UPDATE posts SET 
  
  category =  '" . $_POST['category'] . "' 
  
  WHERE id = '" . $_GET['id']."'");


   if ($update){

    session_start();
      $_SESSION["message"] = "Category updated successfully";
      header('Location: categories.php');
      exit;
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
}
}
 



  
  


?>

    
  <h1 style="text-align: center;">EDIT YOUR CATEGORY</h1><br>
  <h6 class="text-danger" style="margin-left: 500px" >* required field </h6><br>
<form action="" method="POST" id = "registrationForm" style="margin-left: 500px" >
  
  
   
   
    
    
  </p><br>
  <p>
  	<label for= "category" id="rom" style="font-weight: bold" >Category</label>
  	<select name="category" value="<?php echo $user['category']?>">
  <option value="">Books</option>
  <option value="">Law</option>
  <option value="">Technology</option>
  <option value="">Education</option>
  
</select>
  </p><br>
  
  <div> 
  </div><br>
 <label>
      <input type="checkbox" value="terms">
      I agree to the <a href="/terms">terms and conditions</a>
    </label>
  </p><br>
 
  <input type="submit" name="submit" value="Update">
</form>
<hr>



<?php  }else{
  header("Location: categories.php");
}
?>
</body>





  
