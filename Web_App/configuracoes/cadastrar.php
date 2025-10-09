<?php
    if(isset($_POST['submit'])){

        include_once('configuracoes/config.php');

        $email = $_POST['email'];
        $password = $_POST['password'];
        $surname = $_POST['surname'];
        $name = $_POST['name'];
        $number = $_POST['number'];

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM sign_up WHERE email='$email'")) > 0) {
            echo "<div class='alert alert-danger' role='alert'>Your account already exists</div>";
        } else {
            $result = mysqli_query($conn, "INSERT INTO sign_up(email, senha, sobrenome, nome, numero) VALUES('$email', '$password', '$surname' , '$name', '$number')");
            echo "<div class='alert alert-success' role='alert'>Your account has been created!</div>";
        }
    }
?>