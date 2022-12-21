<?php
    $con =  mysqli_connect('localhost','root','','mydb') or die("Connection Failed:" .mysqli_connect_error());
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];

        $sql = "DELETE FROM `student` WHERE `id` = '$user_id'";

        $result =$con->query($sql);

        if($result == TRUE){
            echo "Record deleted successfully";
        header("location:index.php");
        }
        else{
            echo "Error Occured";
        }
    }
?>