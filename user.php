<?php
session_start();
if (! isset($_SESSION['user_logged_in'])) {
  header('Location: login.php');
  exit;
}

if (isset($_SESSION["message"])) {
  $message = $_SESSION["message"];
  unset($_SESSION["message"]);
}
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
        <h1><a href="#"> USERS  </a></h1>

        
        <div class="clear"></div>
      </div>
    </div>
    
    <section id="body" class="width clear">
      <aside id="sidebar" class="column-left" style="margin-left: -295px">
        <ul>
                  <li>
            <h4>Navigate</h4>
                        <ul class="blocklist">
                            <li ><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="posts.php">Posts</a></li>
                            <li><a href="#">Pages</a></li>
                            <li class="selected-item"><a href="user.php">Users</a></li>
                            <li><a href="categories.php">Categories</a></li>
                           
                            <li><a href="logout.php">Logout</a></li>
                        </ul>

          </li> 
          <a class="button" href="add_new_user.php">Add New User</a>
          
      </aside>
      <section id="content" class="column-right" style="margin: 10px 70px">

  <h1 style="margin-left: 200px">EMPLOYEE DATA</h1>
  <?php 
    if (isset($_SESSION['user_logged_in']) AND $_SESSION['user_logged_in'] === true) {
      $sql = "SELECT first_name FROM usertb WHERE id = " . $_SESSION['logged_in_user_id'] . " LIMIT 1";
      $result = mysqli_query($conn, $sql);
      $user = mysqli_fetch_assoc($result);
      echo "<div>Hello " . $user['first_name'] . "</div>";
      ?>
      <div>
        <a href="logout.php">Logout</a>
      </div>

      <?php
    }
  ?>
  <?php if (isset($message)) { ?>
    <div class="alert alert-success">
      <?php echo $message ?>
    </div>
  <?php } ?>
  
  
  <?php
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 1;
  }
  $number_of_posts = 1 ;
  $start = ($page-1) * $number_of_posts;
  $totalSql = "SELECT COUNT(id) AS total FROM usertb";
  $totalResult = mysqli_query($conn, $totalSql);
  $totalRow = mysqli_fetch_assoc($totalResult);
  $total = $totalRow['total'];
  $lastPageNumber = ceil($total/$number_of_posts);

  $sql = "SELECT * FROM usertb LIMIT " . $start . ", " . $number_of_posts;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    echo "Page: " . $page;
    ?>
    <ul class="pagination">
      <?php 
      if ($page != 1) { 
        ?>
        <li class="page-item"><a href="user.php?page=<?php echo $page - 1 ?>" class="page-link">Prev</a></li>
        <?php
      }

      for ($i=1; $i <= $lastPageNumber; $i++) { 
        ?>
        <li class="page-item ">
          <a href="user.php?page=<?php echo $i ?>" class="page-link"><?php echo $i ?></a>
        </li>
        <?php
      }
      if ($page != $lastPageNumber) {
        ?>
        <li class="page-item"><a href="user.php?page=<?php echo $page + 1 ?>" class="page-link">Next</a></li>
        <?php
      }
      ?>
    </ul>
    <table width="600" border="1" cellpadding=0 style="margin-left: -250px">
      <thead>
        <tr>
          <th>Name</th>
          <th>DOB</th>
          <th>Gender</th>
           <th>Email</th>
      <th>Username</th>
      <th>Address Line 1</th>
      
      <th>City</th>
      <th>State</th>
      <th>Country</th>
      <th>Zip</th>
      <th>isAdmin</th>
          <th></th>
        </tr>    
      </thead>
      <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><?php echo $row['first_name'] . ' ' . $row['last_name']  ?></td>
       <td><?php echo date('d/m/Y', strtotime($row['date_of_birth'])) ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['address_line_1']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <td><?php echo $row['country']; ?></td>
            <td><?php echo $row['zip']; ?></td>
            <td><?php echo $row['isAdmin']; ?></td>


            <td>
              <a href="display_user.php?id=<?php echo $row['id'] ?>">Details</a>
              <a href="edit_user.php?id=<?php echo $row['id'] ?>">Edit</a>
              <a href="delete_user.php?id=<?php echo $row['id'] ?>" onclick="return confirmDelete()">Delete</a>
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