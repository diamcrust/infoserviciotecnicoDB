<?php
    $host = "localhost";
    $username = "root";
    $password = "1781324";
    $db = "taller_mecanico";

    $conn = new mysqli($host, $username, $password, $db);

    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    else echo "Connected successfully <br>";

    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $anio_fab = $_POST['anio_fab'];
    $modelo = $_POST['modelo'];
    $color = $_POST['color'];


    if(isset($_POST['registrar'])){
        $sql = "insert into auto (placa, marca, anio_fab, modelo, color) values ('".$placa."', '".$marca."', ".$anio_fab.", '".$modelo."', '".$color."')";
        echo($sql);
        mysqli_query($conn, $sql);
        header("Location: ../Registrar/RegistraAuto.php");
    }else if(isset($_POST['modificar'])){
        $id = $_POST['id'];
        echo "Modificando<br>";
        $sql = "UPDATE auto SET placa = '".$placa."', marca = '".$marca."', anio_fab = ".$anio_fab.", modelo='".$modelo."' , color = '".$color."' WHERE placa = '".$id."';";
        mysqli_query($conn, $sql);
        header("Location: ../Modificar/ModificaAuto.php");
    }else if(isset($_POST['eliminar'])){
        $id = $_POST['id'];
        echo "Eliminando";
        $sql = "DELETE FROM auto WHERE placa = '".$id."';";
        mysqli_query($conn, $sql);
        header("Location: ../Modificar/ModificaAuto.php");
    }
    
    exit();
?>
