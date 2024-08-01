<?php
include 'connect.php';
if(isset($_GET['delete'])){// checking if data is set in url
    $delete=$_GET['delete'];
    echo $delete;
    $delete_query="delete from phpcrud where id='$delete'";
    $result=mysqli_query($connect,$delete_query);
    if($result){
        header("location:display.php");
    }
}
?>
