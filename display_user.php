<?php  
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\config.php';
require_once 'C:\Users\hp\Desktop\xampp\htdocs\includes\database.php';
include_once '../includes/header.php';
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
      <aside id="sidebar" class="column-left">
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
                            <li><a href="#">Logout</a></li>
                        </ul>

          </li> 
          
      </aside>
      <section id="content" class="column-right" style="margin: 0px -200px">
                    
  <?php
  $sql = "SELECT * FROM usertb WHERE id = " .  $_GET['id'];
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    echo 'Firstname :' . $user['first_name'];?><br><br>
    <?php echo 'Lastname : '. $user['last_name'];?><br><br>
    <?php echo 'Email : '. $user['email'];?><br><br>
    <?php echo 'Username : '. $user['username'];?><br><br>
    <?php echo 'Date of Birth : '. $user['date_of_birth'];?><br><br>
    <?php echo 'Gender : '. $user['gender'];?><br><br>
    <?php echo 'Address Line 1 : '. $user['address_line_1'];?><br><br>
    <?php echo 'Address Line 2 : '. $user['address_line_2'];?><br><br>
    <?php echo 'City : '. $user['city'];?><br><br>
    <?php echo 'State : '. $user['state'];?><br><br>
    <?php echo 'Country : '. $user['country'];?><br><br>
    <?php echo 'Zip : '. $user['zip'];?><br><br>
    <?php echo 'Created At : '. $user['created_at'];?><br><br>
    <?php echo 'Updated At : '. $user['updated_at'];?>

















<?php
  } else {
    echo "No user found!";
  }
  ?>
</body>
</html>