<?php
    include_once('config.php');
    session_start();

    if(isset($_POST['submit'])){

        $confirm_password = $_POST['confirm_password'];
        $password = $_POST['password'];
        
        if($password == $confirm_password && $password == $_SESSION['password']){
            $result = 'DELETE FROM sign_up WHERE id_user = "'.$_SESSION['id_user'].'"';
            $res = mysqli_query($conn, $sql);

        }
    }
?>