<?php 
    $con =  mysqli_connect('localhost','root','','mydb') or die("Connection Failed:" .mysqli_connect_error());

    $sql = "SELECT * FROM student";

    $result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/44bfad2249.js" crossorigin="anonymous"></script>
    <title>Read</title>
</head>
<body>
    <div class="container">
        <a href="./add.php" class="btn btn-primary">Add</a>
        <h2>User</h2>
        <table>
            <head>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone</th>
                </tr>
            </head>
            <?php
                if($result -> num_rows>0){
                    while($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td class="p-3"><?php echo $row['id']?></td>
                <td class="p-3"><?php echo $row['firstname']?></td>
                <td class="p-3"><?php echo $row['lastname']?></td>
                <td class="p-3"><?php echo $row['email']?></td>
                <td class="p-3"><?php echo $row['gender']?></td>
                <td class="p-3"><?php echo $row['phone']?></td>
                <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
            <?php } }?>
        </table>
    </div>
</body>
</html>
