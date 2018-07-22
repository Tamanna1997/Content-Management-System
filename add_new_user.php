<?php
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';
include_once '../includes/header.php';
include_once 'process_new_user.php';

?>
<html>
<head>
  <style>
  form  { display: table; }
p     { display: table-row;  }
label { display: table-cel; }
#rom { display: table-cell; }
input[type="radio"]{
  margin: 0 10px 0 10px;
}>

</style>
</head>
<body>
  <h1 style="text-align: center;">ADD NEW USER</h1>
  <h6 class="text-danger" style="margin-left: 500px" >* required field </h6><br>
<form action="reg_form.php" method="POST" id = "registrationForm" style="margin-left: 500px" >
  
  <p>
    <label for= "firstname" id="rom" style="font-weight: bold" >First name</label>
    <input type="text" name="firstname" id="firstName"  ><span class="text-danger"> *</span>
    <?php
    if(isset($firstNameError)){
      echo  '<span class="text-danger">' .$firstNameError .'</span>';
    }
    ?>
    
     
    
  </p><br>
  
  <p>
    <label for= "lastname" id="rom" style="font-weight: bold" >Last name </label>
    <input type="text" name="lastname" id="lastName"  ><span class="text-danger"> *</span>
    <?php
    if(isset($lastNameError)){
      echo  '<span class="text-danger">' .$lastNameError .'</span>';
    }
    ?>
    
    
  </p><br>
  <p>
    <label for= "email" id="rom" style="font-weight: bold" >Email</label>
    <input type="text" name="email"  id="email"  ><span class="text-danger"> *</span>
    <?php
    if(isset($emailError)){
      echo  '<span class="text-danger">' .$emailError .'</span>';
    }
    ?>
    
    
  </p><br>
  <p>
    <label for= "username" id="rom" style="font-weight: bold" >Username</label></label>
    <input type="text" name="username"  ><span class="text-danger"> *</span>
    <?php
    if(isset($userNameError)){
      echo  '<span class="text-danger">' .$userNameError .'</span>';
    }
    ?>
    
  </p><br>
  <p>
    <label for= "password" id="rom" style="font-weight: bold" >Password</label> 
    <input type="password" name="password" ><span class="text-danger"> *</span>
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
    <label for = "gender" id="rom" style="font-weight: bold" >Gender</label><span class="text-danger"> *</span>

    <label >
      <input type="radio" id="tom" name="gender"  value="male" >
      Male 
    </label>
    <label >
      <input type="radio"  id ="tom"name="gender" value="female" >
      Female
    </label>
    <label >
      <input type="radio"  id ="tom"name="gender" value="other">
      Other
    </label>
    <?php
    if(isset($genderError)){
      echo  '<span class="text-danger">' .$genderError .'</span>';
    }
    ?>
    
  </p><br>
   <p>
    <label for= "dob" id="rom" style="font-weight: bold" >Date of birth</label>
    <input type="date" name="dob"  value="<?php echo $dob?>"  >
  </p><br>
  <p>
    <label for= "addressLine1" id="rom" style="font-weight: bold" >Address Line 1</label>
    <input type="text" name="address1"   ><span class="text-danger"> *</span>
    <?php
    if(isset($address1Error)){
      echo  '<span class="text-danger">' .$address1Error .'</span>';
    }
    ?>
  </p>
  <br>
  <p>
    <label for= "addressLine2" id="rom" style="font-weight: bold" >Address Line 2</label>
    <input type="text" name="address2"  >
    
  </p>
  <br>
  <p>
    <label for= "city" id="rom" style="font-weight: bold" >City</label>
    <input type="text" name="city" ><span class="text-danger"> *</span>
    <?php
    if(isset($cityError)){
      echo  '<span class="text-danger">' .$cityError .'</span>';
    }
    ?>
  </p>
  <br>
  <p>
    <label for= "state" id="rom" style="font-weight: bold" >State</label>
    <input type="text" name="state"   ><span class="text-danger"> *</span>
    <?php
    if(isset($stateError)){
      echo  '<span class="text-danger">' .$stateError .'</span>';
    }
    ?>
  </p>
  <br>
  <p>
    <label for= "country" id="rom" style="font-weight: bold" >Country</label>
    <input type="text" name="country" ><span class="text-danger"> *</span>
    <?php
    if(isset($countryError)){
      echo  '<span class="text-danger">' .$countryError .'</span>';
    }
    ?>
  </p>
  <br>
  <p>
    <label for= "zip" id="rom" style="font-weight: bold" >Zip</label>
    <input type="text" name="zip"  ><span class="text-danger"> *</span>
    <?php
    if(isset($zipError)){
      echo  '<span class="text-danger">' .$zipError .'</span>';
    }
    ?>
  </p>
  <br>
   
 <label>
      <input type="checkbox" value="terms">
      I agree to the <a href="/terms">terms and conditions</a>
    </label>
  </p><br>
 
  <input type="submit" value="Submit">
</form>
<hr>
</body>
</htmlj