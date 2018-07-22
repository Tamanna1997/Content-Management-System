<?php
session_start();


?>
<?php  
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';
include_once '../includes/header.php';

$sql = "SELECT * FROM posts WHERE id = " . $_GET['id'] ;
$result = mysqli_query($conn , $sql);


if (mysqli_num_rows($result)>0){
  $user = mysqli_fetch_array($result);

  

if(isset($_POST['submit'])){






$update =mysqli_query( $conn,"UPDATE posts SET 
  publish_date =  '" . $_POST['publish_date'] . "' ,
  title =  '" . $_POST['title'] . "' ,
  category =  '" . $_POST['category'] . "' ,
  post_data =  '" . $_POST['content'] . "' 

  WHERE id = '" . $_GET['id']."'");


   if ($update){

    session_start();
      $_SESSION["message"] = "Post updated successfully";
      header('Location: posts.php');
      exit;
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
}
 



  
  


?>

    
  <h1 style="text-align: center;">EDIT YOUR POST</h1><br>
  <h6 class="text-danger" style="margin-left: 500px" >* required field </h6><br>
<form action="" method="POST" id = "registrationForm" style="margin-left: 500px" >
  
  <p>
    <label for= "title" id="rom" style="font-weight: bold">Title</label>
    <input type="text" name="title"  value="<?php echo $user['title']?>" >
   
    
     
    
  </p><br>
  
  <p>
  	<label for= "content" id="rom" style="font-weight: bold" >Content</label><br>
  	<textarea rows="10" cols="50" name="content" ><?php echo $user['post_data']?></textarea>
   
   
    
    
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
   <p>
  	<label for= "publish_date" id="rom" style="font-weight: bold" >Publish Date</label>
  	<input type="date" name="publish_date" value="<?php echo $user['publish_date']?>"  >
  </p>
  <br>
  
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
  header("Location: posts.php");
}
?>
</body>





  
