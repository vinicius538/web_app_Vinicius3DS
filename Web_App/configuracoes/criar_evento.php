<?php
    include('config.php');

    session_start();

    if(isset($_POST['submit1'])){
        $name_event = $_POST['name_event'];
        $capability_event = $_POST['capability_event'];
        $date_event = $_POST['date_event'];
        $hour_event = $_POST['hour_event'];

        $_SESSION['name_event'] = $name_event;
        $_SESSION['capability_event'] = $capability_event;
        $_SESSION['date_event'] = $date_event;
        $_SESSION['hour_event'] = $hour_event;
    }
    if(isset($_POST['submit2'])){
        $desc = $_POST['desc'];
        $image = $_POST['image'];   

        $_SESSION['image'] = $image;
        $_SESSION['description'] = $desc;

        $result = mysqli_query($conn,"INSERT INTO eventos(nome_evento,capacidade,data,hora,descricao,imagem) VALUES('$name_event','$capability_event','$date_event','$hour_event','$desc','$image')");

    }
?>