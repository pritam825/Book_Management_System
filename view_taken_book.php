<?php
 session_start();
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"pritam");
        $book_name="";
        $book_author="";
        $book_no="";
        $student_id="";
        $date="";
        $query="select book_name,book_author,book_no,donated_date from donated_book where student_id=$_SESSION[id]";
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
<br>
    <span><marquee>Book management system</marquee></span>
    <br>
    <br>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <center><h1 style="font-family:cursive" style="font-size:80px" ><u>Taken Books</u></h1></center>
            <br>
            <br>
            <table class="table-bordered" width="900px" style="text-align:center">
               <tr>
                   <th>Book Name:</th>
                   <th>Author:</th>
                   <th>Number:</th>
                   <th>date:</th>               
               </tr>
               <?php
                $query_run=mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    $book_name=$row['book_name'];
                    $author=$row['book_author'];
                    $book_no=$row['book_no'];
                    $date=$row['donated_date'];
                    
                    ?>
                    <tr>
                        <td><?php echo $book_name; ?></td>
                        <td><?php echo $author; ?></td>
                        <td><?php echo $book_no; ?></td>
                        <td><?php echo $date; ?></td>
                    </tr>
                    <?php                    
                 }
               ?>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>
</html>