<?php
require('functions.php');
session_start();
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"pritam");
$name="";
$email="";
$mobile="";
$query="select * from users where email='$_SESSION[email]'";
$query_run=mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $name=$row['name']; 
    $email=$row['email'];
    $mobile=$row['mobile'];
}
function get_user_taken_book()
{
      
// session_start();
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,"pritam");
 $user_taken_book_count=0;
 // echo $password;
 $query="select count(*) as user_taken_book_count from donated_book where student_id=$_SESSION[id]";
 $query_run=mysqli_query($connection,$query);
 while($row = mysqli_fetch_assoc($query_run)){
     $user_taken_book_count=$row['user_taken_book_count'];
 }
 return ($user_taken_book_count);
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
                <a class="navbar-brand" href="index.php">BOOK MANAGEMENT SYSTEM</a>
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
                    <a class="nav-link" href="user_dashboard.php" ><center><h1 style="font-family:cursive"><u>User Section</u></h1></center></a>
                </li>
               
            </ul>
</nav>
    <br>
    <span><marquee>Book management sysytem</marquee></span>
    <br>
    <br>
    
    <br>
    <br>
    <div class="row">
    <div class="col-md-3">
            <div class="card bg-light" style="margin:40px"  style="width:300px">
        <div class="card-header">
            All Books:
        </div>
        <div class="card-body">
            <p class="card-text">No. of avalibale books: <?php echo get_book_count(); ?></p>
            <a href="regbook.php" class="btn btn-primary" targe="_blank">View All Books</a>
        </div>
       </div>
        </div>
    <div class="col-md-3">
            <div class="card bg-light" style="margin:40px"  style="width:300px">
        <div class="card-header">
            Book a Book:
        </div>
        <div class="card-body">
            <p class="card-text">You can book a book</p>
            <a href="book_a_book.php" class="btn btn-danger" targe="_blank">Book A Book</a>
        </div>
       </div>
        </div>
    <div class="col-md-3">
            <div class="card bg-light" style="margin:40px"  style="width:300px">
        <div class="card-header">
            All Taken Books:
        </div>
        <div class="card-body">
            <p class="card-text">No. taken books <?php echo get_user_taken_book(); ?></p>
            <a href="view_taken_book.php" class="btn btn-danger" targe="_blank">View All taken Books</a>
        </div>
       </div>
        </div>
    </div>
</body>
</html>