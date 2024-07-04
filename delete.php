<?php
include 'connect.php';
if(isset($_GET['delete'])){// checking if data is set in url
    $delete=$_GET['delete'];
    echo $delete;
    $delete_query="delete from phpcrud where id='$delete'";
    echo "<script>conform("Do you really want to delete this data");</script>"
    $result=mysqli_query($connect,$delete_query);
    if($result){
        echo"<script>alert('Data Deleted Successfully');</script>";
        header("location:display.php");
    }
}
?>