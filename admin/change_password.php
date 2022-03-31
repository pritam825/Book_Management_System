<?php
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Admin Dashboard</title>
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
    <br>
    <span><marquee>Book management system</marquee></span>
    <br>
    <br>
    <div class="row">
        <center><h1><u>Change Password</u></h1></center>
        <br>
        <br>
        <br>
        <div class="col-md-4">       
        </div>
        <div class="col-md-4">    
            <form action="update_password.php" method="post">
                <div class="form-group">
                    <label>Enter Current Password:</label>
                    <input type="password" name="old_password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Enter New Password:</label>
                    <input type="password" name="new_password" class="form-control">
                </div>
                <br>
                <br>
                <center><button type="submit" name="update" class="btn btn-primary">Update Password</button></center>
            </form>   
        </div>
        <div class="col-md-4">       
        </div>
    </div>
</body>
</html>