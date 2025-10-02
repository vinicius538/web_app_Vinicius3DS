<?php
if(isset($_POST['submit'])){

        include_once('configuracoes/config.php');

        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $number = $_POST['number'];
        $surname = $_POST['surname'];

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM sign_up WHERE email='$email'")) > 0) {
            echo "<div class='alert alert-danger' role='alert'>A simple danger alert—check it out!</div>";
        } else {
            $result = mysqli_query($conn, "INSERT INTO sign_up(email, senha, nome, numero) VALUES('$email', '$password', '$name', '$number')");
            echo "<div class='alert alert-success' role='alert'>Your account has been!</div>";
        }
        
    }
?>