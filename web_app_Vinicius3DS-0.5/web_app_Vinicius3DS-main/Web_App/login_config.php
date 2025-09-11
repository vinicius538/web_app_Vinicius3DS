<?php
    if(isset($_POST['submit'])){

        include_once('config.php');

        $email = $_POST['email'];
        $password = $_POST['password'];

        $_SESSION['email'] = $password;
        $_SESSION['password'] = $email;

        $result = mysqli_query($conn, 'SELECT * FROM users WHERE email="'.$email.'" AND senha="'.$password.'"');
        if(mysqli_num_rows($result) > 0){
            header('Location: homepage.php');
        } else {
            echo "<script>alert('Invalid email or password');</script>";
        }

    }
?>