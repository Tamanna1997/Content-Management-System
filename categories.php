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
        <h1><a href="#"> CATEGORIES </a></h1>

        
  
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
                            <li><a href="posts.php">Posts</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="user.php">Users</a></li>
                            <li class="selected-item"><a href="#">Categories</a></li>
                            
                            <li><a href="logout.php">Logout</a></li>
                        </ul>

          </li> 

          <a class="button" href="add_new_categories.php">Add New Category</a>
          
      </aside>
      <section id="content" class="column-right" style="margin: 100px -50px">

<?php


$sql = "SELECT DISTINCT category, COUNT(title) AS count FROM posts GROUP BY category";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    ?> 
    <table style="border: 1px solid black;">
      <thead>
        <tr>
          <th> Category Name</th>
          <th>Number of Posts</th>
          
          <th></th>
        </tr>    
      </thead>
      <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><?php echo $row['category'] ;  ?></td>
            
            <td><?php echo $row['count']; ?></td>
            <td>
              <a href="view_categories.php?category=<?php echo $row['category'] ?>">Details</a>
              <a href="edit_categories.php?category=<?php echo $row['category'] ?>">Edit</a>
              <a href="delete_categories.php?category=<?php echo $row['category'] ?>" onclick="return confirmDelete()">Delete</a>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
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