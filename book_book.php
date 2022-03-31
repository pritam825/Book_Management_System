<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"pritam");
$book_name=$_POST['book_name'];
$author_name=$_POST['author_name'];
$student_name=$_POST['student_name'];
$date=$_POST['date'];
$book_id=$_POST['book_id'];
$query="INSERT INTO book_a_book(id,book_name,author_name,student_name,date,book_id) VALUES(null,'$book_name','$author_name','$student_name','$date',$book_id)";
// $query_run=mysqli_query($connection,$query);
if($connection->query($query)==TRUE)
{
    echo"New record successfully crested";
}
else
{
    echo"Error".$query."<br>".$connection->error;
}
?>
<!-- $connection->close(); -->
<script type="text/javascript">
    alert("successfully book");
    window.location.href="user_dashboard.php";
</script> 