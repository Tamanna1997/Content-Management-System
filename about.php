<?php

require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';
   $sql = "SELECT * FROM usertb";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
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
				<h1><a href="#"> Live your Dreams </a></h1>

				<nav>
					<ul>
        					<li class="start selected"><a href="../admin/index.php">Home</a></li>
        	    				<li class=""><a href="blog.php">Blog</a></li>
         	   				<li><a href="#">About</a></li>
          	  				<li><a href="contact.html">Contact</a></li>
          	 				
        				</ul>
				</nav>
	
				<div class="clear"></div>
			</div>
		</div>
		
		<section id="body" class="width clear">
			
			<section id="content" class="column-right">
                		
	    <article>
				
			
			<h1 id="about">About</h1><br>
			<p>Live your Dreams is a microblogging  website founded by Tamanna Nayak in 2018, and owned by Oath Inc. The service allows users to post multimedia and other content to a short-form blog. Users can follow other users' blogs. Bloggers can also make their blogs private. For bloggers many of the website's features are accessed from a "dashboard" interface.

As of July 15, 2018, Live Your Dreams hosts over 417.1 million blogs. As of January 2016, the website had 555 million monthly visitors.</p><br>
<h2>Features</h2><br>
<h3>Blog management</h3>
Dashboard: The dashboard is the primary tool for the typical Live your Dreams user. It is a live feed of recent posts from blogs that they follow. Through the dashboard, users are able to comment, reblog, and like posts from other blogs that appear on their dashboard. The dashboard allows the user to upload text posts, images, video, quotes, or links to their blog with a click of a button displayed at the top of the dashboard. Users are also able to connect their blogs to their Twitter and Facebook accounts; so whenever they make a post, it will also be sent as a tweet and a status update.<br>
Queue: Users are able to set up a schedule to delay posts that they make. They can spread their posts over several hours or even days.
Tags: Users can help their audience find posts about certain topics by adding tags. If someone were to upload a picture to their blog and wanted their viewers to find pictures, they would add the tag #picture, and their viewers could use that word to search for posts with the tag #picture.
HTML editing: Tumblr allows users to edit their blog's theme HTML coding to control the appearance of their blog. Users are also able to use a custom domain name for their blog.
			
    


		
		</article>
		
		
</body>
</html>
