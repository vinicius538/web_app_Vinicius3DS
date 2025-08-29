<?php
    if(isset($_POST['submit'])){

        include_once('config.php');

        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $number = $_POST['number'];

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM sign_up WHERE email='$email'")) > 0) {
            echo "<script>alert('Email already registered. Please use a different email.');</script>";
        } else {
            $result = mysqli_query($conn, "INSERT INTO sign_up(email, senha, nome, numero) VALUES('$email', '$password', '$name', '$number')");
        }
        
    }
?>