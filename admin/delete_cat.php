<?php
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"pritam");
        $query="delete from category where cat_id=$_GET[cid]";
        // $query_run=mysqli_query($connection,$query);  
        // header("location:manage_book.php");
        if($connection->query($query)==TRUE)
      {
          // echo"New record successfully crested";
          ?>
           <script type="text/javascript">
    alert("Delete category successfully...");
    window.location.href="manage_cat.php";
</script> -->
<?php
      }
      else
      {
          echo"Error".$query."<br>".$connection->error;
      }
?>