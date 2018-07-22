<?php
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';
include_once '../admin/header.php';
include_once 'process_categories.php';
$sql = "SELECT * FROM posts";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  ?>

?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> My Blog</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
	  <link rel="stylesheet" type="text/css" href="bootfol/css/bootstrap.min.css">

<link rel="stylesheet" href="styles.css" type="text/css" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--
afflatus, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

Download: http://zypopwebtemplates.com/

License: Creative Commons Attribution
//-->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>

<body>

		<div id="sitename">
			<div class="width">
				<h1 ><a href="#"> ADD NEW CATEGORY </a></h1>

				
	
				<div class="clear"></div>
			</div>
		</div>
		
		<section id="body" class="width clear">
			
			<section id="content" class="column-right" style="margin: 50px 100px" >


  
  
<form action="add_new_categories.php" method="POST" id = "registrationForm"  >

  
  <p>
    <label for= "category" id="rom" style="font-weight: bold" >Category Name</label>
    <input type="text" name="category"  > 
    
     <?php
    if(isset($categoryError)){
      echo  '<span class="text-danger">' .$categoryError .'</span>';
    }
    ?>
    
  </p><br>
  
 
   
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