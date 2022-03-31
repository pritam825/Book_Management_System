<?php
 require('functions.php');
 session_start();
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
                    <a class="nav-link" href="user_dashboard.php" ><center><h1 style="font-family:cursive"><u>User Section</u></h1></center></a>
                </li>
            </ul>
</nav>

    <span><marquee>Book management system</marquee></span>
    <br>
    <br>
    <center><h1 style="font-family:cursive"><u>Book A Book</u></h1></center>
    <br>
    <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
           <form action="book_book.php" method="post">
              <div class="form-group">
               <label for="">Book Name:</label>
               <input type="text" name="book_name" class="form-control" required="">
               </div>
              <div class="form-group">
               <label for="">Book Author:</label>
               <select name="author_name" id="" class="form-control">
                   <option value="">--Select author--</option>
                   <?php
                   $connection=mysqli_connect("localhost","root","");
                   $db=mysqli_select_db($connection,"pritam");
                   $query="select author_name from author";
                   $query_run=mysqli_query($connection,$query);
                   while($row = mysqli_fetch_assoc($query_run)){
                       ?>   
                       <option><?php echo$row['author_name'] ?></option>
                       <?php
                }
                   ?>
               </select> 
            </div>
            <div class="form-group">
               <label for="">Book Id:</label>
               <input type="text" name="book_id" class="form-control" required>
               </div>
              <div class="form-group">
               <label for="">Student Name:</label>
               <input type="text" name="student_name" class="form-control" required>
               </div>
              <div class="form-group">
               <!-- <label for="">:</label> -->
               <label for="">Date:</label>
               <input type="text" name="date" class="form-control" value="<?php echo date("yy-m-d"); ?>" required>
               </div>
               <br> 
               <br>
               <center>
               <button class="btn btn-primary" name="book_a_book">Book</button>
               </center>
        </form>
            </div>
            <div class="col-md-4"></div>
    </div>
</body>
</html>