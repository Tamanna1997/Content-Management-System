<?php  
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';

   $sql = "SELECT * FROM usertb";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  


$number_of_posts = 1 ;
if(isset($_GET['page'])){

	$page_id = $_GET['page'];
}
else{
	$page_id =1;
}
$all_posts_query = "SELECT * FROM posts WHERE status = 'publish'";
$all_posts_run = mysqli_query($conn , $all_posts_query);
$all_posts = mysqli_num_rows($all_posts_run);
$total_pages = ceil($all_posts/$number_of_posts);
$posts_start_from = ($page_id -1) * $number_of_posts;
?>



<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> My Blog</title>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script > 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});

</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<style>
	.hidden{
		display: none;
	}
</style>
</head>

<body>

		<div id="sitename">
			<div class="width">
				<h1><a href="#"> Live your Dreams </a></h1>

				<nav>
					<ul>
        					<li class="start selected"><a href="../admin/index.php">Home</a></li>
        	    				<li class=""><a href="#">Blog</a></li>
         	   				<li><a href="about.php">About</a></li>
          	  				<li><a href="contact.html">Contact</a></li>
          	 				
        				</ul>
				</nav>
	
				<div class="clear"></div>
			</div>
		</div>
		
		<section id="body" class="width clear">
			
			<?php

            $query = " SELECT * FROM posts WHERE status = 'publish' ORDER BY id DESC LIMIT $posts_start_from, $number_of_posts ";
            $run = mysqli_query($conn , $query);
            if(mysqli_num_rows($run) > 0){
            	
            	while($row = mysqli_fetch_array($run)){

            		$id = $row['id'];
            		$publish_date = $row['publish_date'];
            		$title = $row['title'];
            		$author = $row['author'];
            		$category = $row['category'];
            		$post_data = $row['post_data'];
            		$status = $row['status'];
?>


			<section id="content" class="column-right" style="margin: 20px 180px">
                		
	    <article>
				
			
			<a href="post.php?post_id=<?php echo $id; ?>"><h3 id="about"><?php echo $title; ?> </h3></a><br>
			<span class="first"><i class="fa fa-folder"></i><?php echo $category;
?></span><br><br>

			<div class="article-info">Posted on <time><?php echo $publish_date; ?></time> by <a href="#" rel="author"><?php echo $author; ?></a></div>
			
    <div id="go"><p><?php echo substr($post_data,0,300)."........."; ?></p></div>
    <div id="panel" class="hidden"><p><?php echo substr($post_data,300); ?></p></div>
    
<button type="button" id="flip"  class="btn btn-danger ">VIEW MORE</button><br>

          


		
		</article>
		<?php
            	}

            }
            else{
            	echo "<h1>No posts available</h1>";
            }
			?>
			
				<ul class="pagination">
					<?php
					for ($i= 1 ; $i <= $total_pages ; $i++) { 
						?>
						<li class="page-item "  ><a class="page-link" href='blog.php?page=<?php echo $i?>'><?php echo $i?></a></li>
						<?php
					}
					?>


					
				</ul>
			

				

					

		
		
</body>
</html>
