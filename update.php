<?php 
     $con =  mysqli_connect('localhost','root','','mydb') or die("Connection Failed:" .mysqli_connect_error());
     if(isset($_POST['update'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];

         $sql = "UPDATE `student` SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email', `gender` = '$gender', `phone` = '$phone'";
         $result = $con->query($sql);

         if($result == TRUE){
            echo "Record updated succesfully";
        header("location:index.php");
         }
         else{
            echo "Error Occured";
         }
     }
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/44bfad2249.js" crossorigin="anonymous"></script>
</head>


<body>
    <div id="container">
    <form class="p-5 form m-3 shadow" action="update.php" method="POST">
        <h3 class="text-center heading mt-5">Update the Record</h3>
        
            <div>
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                
            </div>
            <div>
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email">
                
            </div>
            <div class="mt-3 mb-3">
                <label for="gender">Gender: </label>&nbsp;&nbsp;
                <input type="radio" name="gender" value="male">Male&nbsp;&nbsp;
                <input type="radio" name="gender" value="female">Female
                
            </div>
            <div>
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone">
                
            </div>
            <div class="mt-3 text-center">
                <button type="submit" name="update" class="btn btn-primary">Submit</button>
                <button type="reset" name="cancel" class="btn btn-danger">Cancel</button>
            </div>
        </form>
    </div>
</body>


</html>

