<?php
    include_once('config.php');
    session_start();

    if(isset($_POST['submit'])){

        $confirm_password = $_POST['confirm_password'];
        $password = $_POST['password'];
        $new_password = $_POST['new_password'];

        if($password==$confirm_password && $password == $_SESSION['password']){
            $result = 'UPDATE sign_up SET senha="'.$new_password.'" WHERE email="'.$_SESSION['email'].'"';
            if(mysqli_query($conn, $result)){
                echo "<script>alert('Password updated successfully');</script>";
                $_SESSION['password'] = $new_password;
            } else {
                echo "<script>alert('Error updating password');</script>";
            }
        }
        else{
            echo "<script>alert('Passwords do not match');</script>";
        }
    }
?>