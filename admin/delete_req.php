<?php
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"pritam");
        $query="delete from book_a_book where id=$_GET[rn]";
        // $query_run=mysqli_query($connection,$query);  
        // header("location:manage_book.php");
        if($connection->query($query)==TRUE)
      {
          // echo"New record successfully crested";
          ?>
           <script type="text/javascript">
    alert("Delete Request successfully...");
    window.location.href="manage_requested_book.php";
</script> -->
<?php
      }
      else
      {
          echo"Error".$query."<br>".$connection->error;
      }
?>