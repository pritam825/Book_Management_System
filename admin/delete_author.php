<?php
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"pritam");
        $query="delete from author where author_id=$_GET[aid]";
        // $query_run=mysqli_query($connection,$query);  
        // header("location:manage_book.php");
        if($connection->query($query)==TRUE)
      {
          // echo"New record successfully crested";
          ?>
           <script type="text/javascript">
    alert("Delete author successfully...");
    window.location.href="manage_author.php";
</script> -->
<?php
      }
      else
      {
          echo"Error".$query."<br>".$connection->error;
      }
?>