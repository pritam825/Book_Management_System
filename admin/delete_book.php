<?php
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"pritam");
        $query="delete from book where book_no=$_GET[bn]";
        // $query_run=mysqli_query($connection,$query);  
        // header("location:manage_book.php");
        if($connection->query($query)==TRUE)
      {
          // echo"New record successfully crested";
          ?>
           <script type="text/javascript">
    alert("Delete Book successfully...");
    window.location.href="manage_book.php";
</script> -->
<?php
      }
      else
      {
          echo"Error".$query."<br>".$connection->error;
      }
?>