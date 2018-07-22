<?php
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';
include_once '../admin/header.php';



$sql = "SELECT * FROM usertb WHERE id = " . $_GET['id'] ;
$result = mysqli_query($conn , $sql);


if (mysqli_num_rows($result)>0){
  $user = mysqli_fetch_array($result);

  
if(isset($_POST['submit'])){
  $firstname =trim($_POST['firstname']);

  if(!preg_match("/^[a-zA-Z ]*$/",$firstname)){
    $firstNameError= "only letters and white spaces allowed" ;
  }

$lastname =trim($_POST['lastname']);

  if(!preg_match("/^[a-zA-Z ]*$/",$lastname)){
    $lastNameError= "only letters and white spaces allowed" ;
  }

$email =trim($_POST['email']);

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError= "Invalid email format" ;
  }


 


$username =trim($_POST['username']);

  if(!preg_match("/^[A-Za-z0-9]*$/",$username)){
    $userNameError= "only letters and numbers allowed" ;
  }


$password =trim($_POST['password']);

  if(!preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/",$password) ){
    $passwordError= "It must contain atleast one number, one uppercase and one lowercase" ;
  }


if ($_POST["password"] === $_POST["confirmpassword"]) {
    $confirmpassword= $_POST['confirmpassword'];
}
else {
   $confirmpasswordError = "Password doesn't match!";
}






if( (!isset($firstNameError)) AND (!isset($lastNameError)) AND (!isset($emailError))  AND (!isset($userNameError)))
{
  


    $update =mysqli_query( $conn,"UPDATE usertb SET 
  first_name =  '" . $_POST['firstname'] . "' ,
  last_name =  '" . $_POST['lastname'] . "' ,
  email =  '" . $_POST['email'] . "' ,
  username =  '" . $_POST['username'] . "' ,
  password =  '" . $_POST['password'] . "' ,
  date_of_birth =  '" . $_POST['dob'] . "' ,
  password =  '" . $_POST['password'] . "' ,
  address_line_1 =  '" . $_POST['address1'] . "' ,
  address_line_2 =  '" . $_POST['address2'] . "' ,
  city =  '" . $_POST['city'] . "' ,
  state =  '" . $_POST['state'] . "' ,
  country =  '" . $_POST['country'] . "' ,
  zip =  '" . $_POST['zip'] . "' 
  
  WHERE id = '" . $_GET['id']."'");


   if ($update){

    session_start();
      $_SESSION["message"] = "User updated successfully";
      header('Location: posts.php');
      exit;
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
 }
}


  
  


?>

    
  <h1 style="text-align: center;">EDIT YOUR PROFILE</h1><br>
  <h6 class="text-danger" style="margin-left: 500px" >* required field </h6><br>
<form action="" method="POST" id = "registrationForm" style="margin-left: 500px" >
  
  <p>
    <label for= "firstname" id="rom" style="font-weight: bold">First name</label></label><span class="text-danger"> *</span>
    <input type="text" name="firstname"  value="<?php echo $user['first_name']?>" >
    <?php
    if(isset($firstNameError)){
      echo  '<span class="text-danger">' .$firstNameError .'</span>';
    }
    ?>
    
     
    
  </p><br>
  
  <p>
    <label for= "lastname" id="rom" style="font-weight: bold">Last name </label></label><span class="text-danger"> *</span>
    <input type="text" name="lastname" id="lastName"  value="<?php echo $user['last_name']?>">
    <?php
    if(isset($lastNameError)){
      echo  '<span class="text-danger">' .$lastNameError .'</span>';
    }
    ?>
    
    
  </p><br>
  <p>
    <label for= "email" id="rom" style="font-weight: bold">Email</label></label><span class="text-danger"> *</span>
    <input type="text" name="email"  id="email"  value="<?php echo $user['email']?>">
    <?php
    if(isset($emailError)){
      echo  '<span class="text-danger">' .$emailError .'</span>';
    }
    ?>
    <body>
    
    
  </p><br>
  <p>
    <label for= "username" id="rom" style="font-weight: bold">Username</label></label><span class="text-danger"> *</span>
    <input type="text" name="username"  value="<?php echo $user['username']?>" >
    <?php
    if(isset($userNameError)){
      echo  '<span class="text-danger">' .$userNameError .'</span>';
    }
    ?>
    
  </p><br>
  <p>
    <label for= "password" id="rom" style="font-weight: bold">Password</label></label><span class="text-danger"> *</span>
    <input type="password" name="password"  >
    <?php
    if(isset($passwordError)){
      echo  '<span class="text-danger">' .$passwordError .'</span>';
    }
    ?>
    
  </p><br>
  <p>
    <label for= "confirmpassword" id="rom" style="font-weight: bold" >Confirm Password</label> 
    <input type="password" name="confirmpassword"  ><span class="text-danger"> *</span>
    <?php
    if(isset($confirmpasswordError)){
      echo  '<span class="text-danger">' .$confirmpasswordError .'</span>';
    }
    ?>
    
  </p><br>
  
  <p>
    <label for = "gender" id="rom"  style="font-weight: bold">Gender</label><span class="text-danger"> *</span>

    <label >
      <input type="radio" id="tom" name="gender" >
      Male 
    </label>
    <label >
      <input type="radio"  id ="tom"name="gender"  >
      Female
    </label>
    <label >
      <input type="radio"  id ="tom"name="gender" >
      Other
    </label>
    <?php
    if(isset($genderError)){
      echo  '<span class="text-danger">' .$genderError .'</span>';
    }
    ?>
    
  </p><br>
   <p>
    <label for= "dob" id="rom" style="font-weight: bold">Date of birth</label>
    <input type="date" name="dob"    value="<?php echo $user['date_of_birth']?>" >
  </p><br>
  

  <p>
    <label for= "addressLine1" id="rom" style="font-weight: bold" >Address Line 1</label>
    <input type="text" name="address1"  value="<?php echo $user['address_line_1']?>" ><span class="text-danger"> *</span>
    <?php
    if(isset($address1Error)){
      echo  '<span class="text-danger">' .$address1Error .'</span>';
    }
    ?>
  </p>
  <br>
  <p>
    <label for= "addressLine2" id="rom" style="font-weight: bold" >Address Line 2</label>
    <input type="text" name="address2" value="<?php echo $user['address_line_2']?>" >
    
  </p>
  <br>
  <p>
    <label for= "city" id="rom" style="font-weight: bold" >City</label>
    <input type="text" name="city" value="<?php echo $user['city']?>" ><span class="text-danger"> *</span>
    <?php
    if(isset($cityError)){
      echo  '<span class="text-danger">' .$cityError .'</span>';
    }
    ?>
  </p>
  <br>
  <p>
    <label for= "state" id="rom" style="font-weight: bold" >State</label>
    <input type="text" name="state" value="<?php echo $user['state']?>"  ><span class="text-danger"> *</span>
    <?php
    if(isset($stateError)){
      echo  '<span class="text-danger">' .$stateError .'</span>';
    }
    ?>
  </p>
  <br>
  <p>
    <label for= "country" id="rom" style="font-weight: bold" >Country</label>
    <input type="text" name="country" value="<?php echo $user['country']?>" ><span class="text-danger"> *</span>
    <?php
    if(isset($countryError)){
      echo  '<span class="text-danger">' .$countryError .'</span>';
    }
    ?>
  </p>
  <br>
  <p>
    <label for= "zip" id="rom" style="font-weight: bold" >Zip</label>
    <input type="text" name="zip"  value="<?php echo $user['zip']?>" ><span class="text-danger"> *</span>
    <?php
    if(isset($zipError)){
      echo  '<span class="text-danger">' .$zipError .'</span>';
    }
    ?>
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





  
