<?php
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';


 




include_once '../includes/header.php';
$sql = "SELECT * FROM usertb";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  ?>
  
  







  <div>
    <?php
   $sql = "SELECT * FROM posts";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  ?>
    
  </div>
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
				<h1><a href="#"> DASHBOARD </a></h1>

				
	
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
                            <li><a href="edit_profile.php?id=<?php echo $row['id'] ?>">Edit Profile</a></li>
                            
                            <li><a href="logout.php">Logout</a></li>
                        </ul>

					</li>	
         
					
			</aside>
			<section id="content" class="column-right" style="margin: 100px -70px">
				<article>
					<p>
						Dashboards often provide at-a-glance views of KPIs (key performance indicators) relevant to a particular objective or business process. In the other, "dashboard" has another name for "progress report" or "report."

The "dashboard" is often displayed on a web page which is linked to a database that allows the report to be constantly updated. For example, a manufacturing dashboard may show numbers related to productivity such as number of parts manufactured, or number of failed quality inspections per hour. Similarly, a human resources dashboard may show numbers related to staff recruitment, retention and composition, for example number of open positions, or average days or cost per recruitment</p>
				</article>
				<body>
					</html>
