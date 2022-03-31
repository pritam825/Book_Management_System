<?php

function get_user_count(){
    
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,"pritam");
 
 // echo $password;
 $query="select count(*) as user_count from users";
 $query_run=mysqli_query($connection,$query);
 // echo "hiiooo";
 while($row = mysqli_fetch_assoc($query_run)){
     $user_count=$row['user_count'];
 }
 return($user_count);
}
function get_book_count(){
    
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,"pritam");
 
 // echo $password;
 $query="select count(*) as book_count from book";
 $query_run=mysqli_query($connection,$query);
 // echo "hiiooo";
 while($row = mysqli_fetch_assoc($query_run)){
     $book_count=$row['book_count'];
 }
 return($book_count);
}

function get_category_count(){
    
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,"pritam");
 
 // echo $password;
 $query="select count(*) as cat_count from category";
 $query_run=mysqli_query($connection,$query);
 // echo "hiiooo";
 while($row = mysqli_fetch_assoc($query_run)){
     $cat_count=$row['cat_count'];
 }
 return($cat_count);
}

function get_author_count(){
    
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,"pritam");
 
 // echo $password;
 $query="select count(*) as author_count from author";
 $query_run=mysqli_query($connection,$query);
 // echo "hiiooo";
 while($row = mysqli_fetch_assoc($query_run)){
     $author_count=$row['author_count'];
 }
 return($author_count);
}

function get_donated_count(){
    
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,"pritam");
 
 // echo $password;
 $query="select count(*) as donated_book_count from donated_book";
 $query_run=mysqli_query($connection,$query);
 // echo "hiiooo";
 while($row = mysqli_fetch_assoc($query_run)){
     $donated_book_count=$row['donated_book_count'];
 }
 return($donated_book_count);
}
// function get_user_taken_book()
// {
      
// // session_start();
//  $connection=mysqli_connect("localhost","root","");
//  $db=mysqli_select_db($connection,"pritam");
//  $user_taken_book_count=0;
//  // echo $password;
//  $query="select count(*) as user_taken_book_count from donated_book where student_id=$_SESSION[id]";
//  $query_run=mysqli_query($connection,$query);
//  while($row = mysqli_fetch_assco($query_run)){
//      $user_taken_book_count=$row['user_taken_book_count'];
//  }
//  return ($user_taken_book_count);
// }
?>