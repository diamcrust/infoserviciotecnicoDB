<?php
    $host = "localhost";
    $username = "root";
    $password = "1781324";
    $db = "taller_mecanico";

    $conn = new mysqli($host, $username, $password, $db);

    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    else echo "Connected successfully <br>";

    $RFC = $_POST['RFC'];
    $nombre = $_POST['nombre'];
    $cve_puesto = $_POST['cve_puesto'];
    $activo = $_POST['activo'];

    if(isset($_POST['registrar'])){
        $sql = "insert into mecanico (RFC, nombre, cve_puesto, activo) values ('".$RFC."', '".$nombre."', ".$cve_puesto.", ".$activo.")";
        mysqli_query($conn, $sql);
        header("Location: ../Registrar/RegistraMecanico.php");
    }else if(isset($_POST['modificar'])){
        $id = $_POST['id'];
        echo "Modificando<br>";
        $sql = "UPDATE mecanico SET RFC = '".$RFC."', nombre = '".$nombre."', cve_puesto = ".$cve_puesto.", activo='".$activo."' WHERE RFC = '".$RFC."';";
        mysqli_query($conn, $sql);
        header("Location: ../Modificar/ModificaMecanico.php");
    }else if(isset($_POST['eliminar'])){
        $id = $_POST['id'];
        echo "Eliminando";
        $sql = "DELETE FROM mecanico WHERE RFC = '".$id."';";
        mysqli_query($conn, $sql);
        header("Location: ../Modificar/ModificaMecanico.php");
    }
    exit();
?>
