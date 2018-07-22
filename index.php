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
<title> Live your Dreams</title>
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
        					<li class="start selected"><a href="#">Home</a></li>
        	    				<li class=""><a href="../project/blog.php">Blog</a></li>
         	   				<li><a href="../project/about.php">About</a></li>
          	  				<li><a href="../project/contact.html">Contact</a></li>

          	 				
        				</ul>
				</nav>
	
				<div class="clear"></div>
			</div>
		</div>
		<header>
			<div class="width">
				<h2>Welcome to my website!</h2><br>
				<div class="tagline">
					<p>Hey folks ! I am Tamanna Nayak & this is my first proffessional website . This is perhaps a place where you can turn your ideas into reality. Write your heart out here ! . Hope you enjoy the cool features . Have a great time. </p>
				</div>
			</div>
		</header>
		<section id="body" class="width clear">
			<aside id="sidebar" class="column-left">
				<ul>
                	<li>
						<h4>Navigate</h4>
                        <ul class="blocklist">
                            
                            <li><a href="../project/edit_profile.php?id=<?php echo $row['id'] ?>">Edit Profile</a></li>
                            
                        </ul>

					</li>	
					
			</aside>
			<section id="content" class="column-right">
                		
	    <article>
				
			
			<h3>Welcome to Live your Dreams </h3><br>
			<div class="article-info">Posted on <time datetime="2018-07-14">14 May</time> by <a href="#" rel="author">Tamanna Nayak</a></div>

            <p><br><strong>Your voice, your story,
your idea, your blog.</strong><br>
Create an online presence that is truly yours,
and share it with the world.
Create your blog! LiveYourDreams.com has built-in SEO, social media integration, and sharing features. Plug into our high-traffic network and reach new readers.
Enjoy website design, domain registration, hassle-free automatic software updates, and secure hosting on servers spread across multiple data centers.
</p>	
          


		
		</article>
	
		<article class="expanded">

            		<h2>Help when you want it</h2><br>
			

			
            <p>Our Happiness Engineers work night and day through live chat, email, support pages, videos, and forums to answer any questions you have.</a></p>

<h2>Powerful statistics</h2>

<p>Keep your finger on the pulse of your blog’s activity with website statistics. Colorful charts and graphs help you understand what your readers like and how they found you.</p>


		
</body>
</html>
