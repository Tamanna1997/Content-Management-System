<?php  
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';
include_once '../includes/header.php';
$sql = "SELECT * FROM usertb";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  ?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> My Blog</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
				<h1><a href="#"> Live your Dreams </a></h1>

				<nav>
					<ul>
        					<li class="start selected"><a href="../admin/index.php">Home</a></li>
        	    				<li class=""><a href="blog.php">Blog</a></li>
         	   				<li><a href="about.php">About</a></li>
          	  				<li><a href="contact.html">Contact</a></li>
          	 				
        				</ul>
				</nav>
	
				<div class="clear"></div>
			</div>
		</div>
		
		<section id="body" class="width clear">
			<aside id="sidebar" class="column-left" style="margin-left: -150px">
				<ul>
                	<li>
						<h4>Navigate</h4>
                        <ul class="blocklist">
                            <li class="selected-item"><a href="#">Dashboard</a></li>
                            <li><a href="posts.php">Posts</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="user.php">Users</a></li>
                            <li><a href="categories.php">Categories</a></li>
                            <li><a href="../project/edit_profile.php?id=<?php echo $row['id'] ?>">Edit Profile</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>

					</li>	
          
			</aside>
			<section id="content" class="column-right" style="margin: 10px -80px">

  <?php
  if(isset($_GET['category'])){
    $cat_id = $_GET['category'];
    $cat_query = "SELECT * FROM posts WHERE category = '$cat_id' ";
    $cat_run = mysqli_query($conn, $cat_query);
    
    if(mysqli_num_rows($cat_run)>0){
    
  while($cat_row = mysqli_fetch_array($cat_run)){
  
 
    ?>
     <span class="first"><h1><?php echo "<div> " . $cat_row['title'] . "</div>"; ?></h1></span><br>
     <span class="first"><i class="fa fa-folder"></i><?php echo "<div> " . $cat_row['category'] . "</div>";?><br>
     <div class="article-info">Posted on <time><?php echo "<div> " . $cat_row['publish_date'] . "</div>"; ?></time> by <a href="#" rel="author"><?php echo "<div> " . $cat_row['author'] . "</div>"; ?></a></div>
     <div id="going"><p><?php echo "<div> " . $cat_row['post_data'] . "</div>"; ?></p></div>

			<?php
    }}}?>
    
</body>
</html> 