<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        
        $con =  mysqli_connect('localhost','root','','mydb') or die("Connection Failed:" .mysqli_connect_error());
        if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['phone'])){

            $sql = "INSERT INTO `student` (`firstname`, `lastname`, `email`,`gender`, `phone`) VALUES ('$firstname', '$lastname', '$email', '$gender', '$phone')";
            $query = mysqli_query($con,$sql);
            if($query){
                echo 'Entry Successfull';

            }
            else{
                echo 'Error Occured';
            }
        }
    }

?>
<html>
    <body>
        <a href="index.php">view data</a>
    </body>
</html>