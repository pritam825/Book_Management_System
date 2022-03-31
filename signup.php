<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <h3>jvnei</h3> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">BOOK MANAGEMENT SYSTEM</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">ADMIN LOGIN</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">USER LOGIN</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">USER REGISTER</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <span><marquee>Book management system</marquee></span>
    <div class="row">
        <div class="col-md-4" id="side_bar">
        <h5>Contributers</h5>
            <ul>
                <li>Pritam Kumar</li>
            </ul>
            <h5>What we provide ?</h5>
            <ul>
                <li>Book for badly off students</li>
            </ul>
            <h5>Contact number</h5>
            <ul>
                <li>7634803822</li>
            </ul>
        </div>
        <div class="col-md-8" id="main_content">
            <br>
            <center><h1> <u>User Registration</u></h1></center>
            <br>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Email ID:</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Modile Number:</label>
                    <input type="text" name="mobile" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</body>
</html>