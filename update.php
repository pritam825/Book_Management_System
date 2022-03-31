<?php
session_start();
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"pritam");
$query="update users set name='$_POST[name]',email='$_SESSION[email]',mobile=$_POST[mobile] where email='$_SESSION[email]'";
$query_run=mysqli_query($connection,$query);
?>

<script type="text/javascript">
    alert("Update successfully ....");
    window.location.href="user_dashboard.php";
</script> 