<?php
 require('functions.php');
 session_start();
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,"pritam");
 $cat_id="";
 $cat_name="";

 $query="select * from category where cat_id='$_GET[cid]'";
 $query_run=mysqli_query($connection,$query);
 while($row=mysqli_fetch_assoc($query_run))
 {
     $cat_name=$row['cat_name'];
     $cat_id=$row['cat_id'];

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <h3>jvnei</h3> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin_dashboard.php">BOOK MANAGEMENT SYSTEM</a>
            </div>
            <font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
            <font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
            <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                    <a class="nav-link" href="view_profile.php" >View Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="edit_profile.php">Edit Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="change_password.php">Change Password</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
               
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light" style=" background-color: #e3f2fd">
    <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                    <a class="nav-link" href="admin_dashboard.php" ><h4><u> Dashboard</u></h4></a>
                </li>
               
            </ul>
    <div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left:1060px">
    Book
  </button>
  <ul class="dropdown-menu dropdown-menu-end" >
    <li><a class="dropdown-item" href="add_book.php">ADD New Book</a></li>
    <li><a class="dropdown-item" href="manage_book.php">Manage Book</a></li>
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style=" margin:10px">
    Category
  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="add_cat.php">Add New Category</a></li>
    <li><a class="dropdown-item" href="manage_cat.php">Manage Category</a></li>
  </ul>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Author
  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="add_author.php">Add Author</a></li>
    <li><a class="dropdown-item" href="manage_author.php">Manage Author</a></li>
  </ul>
</div>
     <!-- <div class="container-fluid">
         <ul class="nav navbar-nav navbar-center">
             <li class="nav-item">
                 <a href="admin_dashboard.php" class="nav-link">Dashboard</a>
             </li>
             <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">ADD New Book</a>
                        <a href="" class="dropdown-item">Manage Book</a>
                         <a href="" class="dropdown-item">A</a> -->
                   <!-- </div>
                </li>
         </ul>
     </div> -->
</nav>

    <span><marquee>Book management system</marquee></span>
    <br>
    <br>
    <center><h1 style="font-family:cursive"><u>Edit Author</u></h1></center>
    <br>
    <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
           <form action="" method="post">
               <div class="form-group">
                   <label for="">Category Id:</label>
                   <input type="text" name="cat_id" class="form-control" value="<?php echo $cat_id;?>" required>
                </div>
                <br>
                <div class="form-group">
                 <label for="">Category Name:</label>
                 <input type="text" name="cat_name" class="form-control" value="<?php echo $cat_name;?>" required>
                 </div>
                 <br>
               <br> 
               <br>
               <center>
               <button class="btn btn-primary" name="update">Update</button>
               </center>
        </form>
            </div>
            <div class="col-md-4"></div>
    </div>
</body>
</html>
<?php
     if(isset($_POST['update']))
     {
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"pritam");
        $query="update category set cat_name='$_POST[cat_name]',cat_id=$_POST[cat_id] where cat_id=$_GET[cid]";
        // $query_run=mysqli_query($connection,$query);  
        // header("location:manage_book.php");
        if($connection->query($query)==TRUE)
      {
          // echo"New record successfully crested";
          ?>
           <script type="text/javascript">
    alert("Update Category successfully...");
    window.location.href="manage_cat.php";
</script> -->
<?php
      }
      else
      {
          echo"Error".$query."<br>".$connection->error;
      }
     }
?>