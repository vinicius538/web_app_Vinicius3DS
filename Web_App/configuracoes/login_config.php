<?php
    if(isset($_POST['submit'])){

        include_once('config.php');

        $email = $_POST['email'];
        $password = $_POST['password'];

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        if (!isset($_SESSION['attempts'])) {
            $_SESSION['attempts'] = 0;
        }

        $result = mysqli_query($conn, 'SELECT * FROM users WHERE email="'.$email.'" AND senha="'.$password.'"');
        if(mysqli_num_rows($result) > 0){
            header('Location: home.php');

            $_SESSION['attempts'] = 0;

        } else {
            echo "<script>alert('Invalid email or password');</script>";

            $_SESSION['attempts'] += 1;
            if($_SESSION['attempts'] >= 3){
                echo "<script>alert('Too many failed login attempts. Please try again later.');</script>";
                echo $_SESSION['attempts'];
                
            }
        }

    }
?>