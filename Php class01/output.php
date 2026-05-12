<?php
session_start();
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // var_dump($_POST);
    $btn = $_POST['submit'];
    $name = user_input($_POST['name']);
    $email = $_POST['email'];
    if(isset( $btn)){
        if(empty( $name)){
            $_SESSION['name_err'] ='Name is required'."<br>";
            header('Location:./index.php');
        }else{
            include('env.php');
            $querry = "INSERT INTO login_cre(name, email) VALUES ('$name','$email')";
            $insert = mysqli_query($con, $querry);
        }   
    }
    else{
        echo 'Not clicked';
    }

    //Data Sanitization
    function user_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
    }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>email</th>
        </tr>
        <tr>
            <td><?=  $name ?></td>
            <td><?=  $email ?></td>
        </tr>
    </table>
</body>
</html> -->