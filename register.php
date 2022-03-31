<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"pritam");
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$query="INSERT INTO users(id,name,email,mobile,password) VALUES(null,'$name','$email',$mobile,'$password')";
$query_run=mysqli_query($connection,$query);
// if($connection->query($query)==TRUE)
// {
//     echo"New record successfully crested";
// }
// else
// {
//     echo"Error".$query."<br>".$connection->error;
// }
?>
<!-- $connection->close(); -->
<script type="text/javascript">
    alert("Restration successfully...You may login now.");
    window.location.href="index.php";
</script> 