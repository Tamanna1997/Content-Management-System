<?php
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';
include_once '../includes/header.php';

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
				<h1><a href="#"> POSTS </a></h1>

				
	
				<div class="clear"></div>
			</div>
		</div>
		
		<section id="body" class="width clear">
			<aside id="sidebar" class="column-left" style="margin-left: -150px">
				<ul>
                	<li>
						<h4>Navigate</h4>
                        <ul class="blocklist">
                            <li ><a href="dashboard.php">Dashboard</a></li>
                            <li class="selected-item"><a href="#">Posts</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="user.php">Users</a></li>
                            <li><a href="categories.php">Categories</a></li>
                            
                            <li><a href="#">Logout</a></li>
                        </ul>

					</li>	
          <a class="button" href="add_new_posts.php">Add New Post</a>
					
			</aside>
			<section id="content" class="column-right" style="margin: 100px -200px">

				<?php
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 1;
  }
  $number_of_posts = 1 ;
  $start = ($page-1) * $number_of_posts;
  $totalSql = "SELECT COUNT(id) AS total FROM posts";
  $totalResult = mysqli_query($conn, $totalSql);
  $totalRow = mysqli_fetch_assoc($totalResult);
  $total = $totalRow['total'];
  $lastPageNumber = ceil($total/$number_of_posts);

  $sql = "SELECT * FROM posts LIMIT " . $start . ", " . $number_of_posts;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo "Page: " . $page;
    ?>
    
    <table width="600" border="1" cellpadding=0 style="margin-left: -150px">
      <thead>
        <tr>
          <th>Title</th>
          <th>Author</th>
          <th>Category</th>
           <th>Publish_date</th>
      
          <th></th>
        </tr>    
      </thead>
      <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><?php echo $row['title'];  ?></td>
             <td><?php echo $row['author'];  ?></td>
              <td><?php echo $row['category'];  ?></td>
       
       <td><?php echo date('d/m/Y', strtotime($row['publish_date'])) ?></td>
       

            <td>
              <a href="view_posts.php?id=<?php echo $row['id'] ?>">View</a>
              <a href="edit_posts.php?id=<?php echo $row['id'] ?>">Edit</a>
              <a href="delete_posts.php?id=<?php echo $row['id'] ?>" onclick="return confirmDelete()">Delete</a>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table><br><br>
    <ul class="pagination">
      <?php 
      if ($page != 1) { 
        ?>
        <li class="page-item"><a href="posts.php?page=<?php echo $page - 1 ?>" class="page-link">Prev</a></li>
        <?php
      }

      for ($i=1; $i <= $lastPageNumber; $i++) { 
        ?>
        <li class="page-item ">
          <a href="posts.php?page=<?php echo $i ?>" class="page-link"><?php echo $i ?></a>
        </li>
        <?php
      }
      if ($page != $lastPageNumber) {
        ?>
        <li class="page-item"><a href="posts.php?page=<?php echo $page + 1 ?>" class="page-link">Next</a></li>
        <?php
      }
      ?>
    </ul>
    <?php
  } else {
    echo "No users found!";
  }
  mysqli_close($conn);
  ?>
  <script type="text/javascript">
    function confirmDelete() {
      return confirm('Are you sure to delete?');
    }
  </script>
</body>
</html>
                		