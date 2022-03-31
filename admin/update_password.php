<?php
session_start();
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"pritam");
$password="";
$query="select * from admin where email='$_SESSION[email]'";
$query_run=mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run))
{
    $password=$row['password'];
}
if($password == $_POST['old_password'])
{
    // echo "MY";
    $query="update admin set password = '$_POST[new_password]' where email='$_SESSION[email]'";
    $query_run=mysqli_query($connection,$query);
}
?>

<script type="text/javascript">
    alert("Update successfully ....");
    window.location.href="admin_dashboard.php";
</script> 