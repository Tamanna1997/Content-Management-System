<?php
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';
include_once '../admin/header.php';
include_once 'process_posts.php';
$sql = "SELECT * FROM posts";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_array($result)){
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
				<h1 style="margin-left: 300px"><a href="#"> ADD NEW POST </a></h1>

				
	
				<div class="clear"></div>
			</div>
		</div>
		
		<section id="body" class="width clear">
      
			<section id="content" class="column-right" style="margin: 50px 500px">


  
  
<form action="add_new_posts.php" method="POST" id = "registrationForm" style="margin-left: 500px" >

  
  <p>
    <label for= "title" id="rom" style="font-weight: bold" >Title</label>
    <input type="text" name="title" id="title" > 
    
     <?php
    if(isset($titleError)){
      echo  '<span class="text-danger">' .$titleError .'</span>';
    }
    ?>
    
  </p><br>
  <p>
  	<label for= "content" id="rom" style="font-weight: bold" >Content</label><br>
  	<textarea rows="10" cols="50" name="content">Enter text here...</textarea>
  	<?php
    if(isset($contentError)){
      echo  '<span class="text-danger">' .$contentError .'</span>';
    }
    ?>
  </p><br>
  
  <p>
  	<?php
  	$sql = "SELECT * FROM posts";
  $result = mysqli_query($conn, $sql);
  
  ?>

  	<label for= "category" id="rom" style="font-weight: bold" >Category</label>
  	<select name="category">
  		<?php while($row = mysqli_fetch_array($result)){ ?>
  <option value=""><?php echo $row['category'];
?></option><?php
} ?>
  
  <option value="" selected>Nil</option>
</select>
</p>
  </p><br>
   <p>
  	<label for= "publish_date" id="rom" style="font-weight: bold" >Publish Date</label>
  	<input type="date" name="publish_date"   >
  	<?php
    if(isset($publish_dateError)){
      echo  '<span class="text-danger">' .$publish_dateError .'</span>';
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
<?php
}}
?>
</body>
</htmlj