<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data-Project</title>
    <link rel="stylesheet" href="style.css">
    <style>
body{
    background-color: aliceblue;
    border: 0px solid;
    max-width: 60%;
    margin:0 auto;
    
}
input{
    display: block;
    margin: 10px;
    padding: 10px;
    width: 90%;
    border: none;
    outline: none;
}
.btn{
    width:95%;
    background-color: green;
    cursor: pointer;
}
th,td{
    border:1px solid;
    padding: 5px;
    font-size: 15px;
 }
a{
    text-decoration:none;
}
@media (max-width:950px){
    table{
        font-size:6px;
    }
   
}

    </style>
</head>
<body>
    <h1 align="center">Display Data</h1>
    <a href="./CrudOperation.php">Back</a>
    <?php 
    include 'connect.php';
    $display_data=mysqli_query($connect,"select * from phpcrud");
    $num=1;
    $number_rows=mysqli_num_rows($display_data);
    //echo $number_rows;
    if($number_rows>0){
        echo "
        <table>
            <thead>
                <tr>
                <th>Serial Number</th>
                <th>Username</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Address</th>
                <th>Operations</th>
                </tr>
            </thead>
            <tbody>";
        while($number_rows>0){
            $row=mysqli_fetch_assoc($display_data)
            ?>
        <tr>
            <td><?php echo $num;?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><a href="delete.php?delete=<?php echo $row['id'];?>" onclick="return confirm('Are you sure do you want to delete this data');">DELETE</a>
            &nbsp<a href="update.php?edit=<?php echo $row['id'];?>">EDIT</a></td>
        </tr>
        <?php
        $number_rows=$number_rows-1;
        $num+=1;
        }
    }else{
        echo "<div>No data</div>";
    }
   /* session_start();
    $_SESSION['userdata']=$row;*/
    ?>
    
        
        </tbody>
    </table>

</body>
</html>