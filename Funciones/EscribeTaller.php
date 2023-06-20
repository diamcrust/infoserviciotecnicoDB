<?php
    $host = "localhost";
    $username = "root";
    $password = "1781324";
    $db = "taller_mecanico";

    $conn = new mysqli($host, $username, $password, $db);

    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    else echo "Connected successfully <br>";

    $rfc_taller = $_POST['rfc_taller'];
    $nombre = $_POST['nombre'];
    $calle = $_POST['calle'];
    $num_dom = $_POST['num_dom'];
    $colonia = $_POST['colonia'];
    $localidad = $_POST['localidad'];
    $municipio = $_POST['municipio'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];


    if(isset($_POST['registrar'])){
        $sql = "insert into taller (rfc_taller, nombre, calle, num_dom, colonia, localidad, municipio, estado, pais) 
        values ('".$rfc_taller."', '".$nombre."', '".$calle."', ".$num_dom.", '".$colonia."', '".$localidad."', '".$municipio."', '".$estado."', '".$pais."')";
        echo($sql);
        mysqli_query($conn, $sql);
        header("Location: ../Registrar/RegistraCliente.php");
    }else if(isset($_POST['modificar'])){
        $id = $_POST['id'];
        echo "Modificando<br>";
        $sql = "UPDATE taller SET rfc_taller = '".$rfc_taller."', nombre = '".$nombre."', calle = '".$calle."', num_dom=".$num_dom.",
        colonia = '".$colonia."', localidad = '".$localidad."', municipio = '".$municipio."', estado = '".$estado."', pais = '".$pais."'
        WHERE rfc_taller = '".$id."';";
        mysqli_query($conn, $sql);
        header("Location: ../Modificar/ModificaTaller.php");
    }else if(isset($_POST['eliminar'])){
        $id = $_POST['id'];
        echo "Eliminando";
        $sql = "DELETE FROM taller WHERE rfc_taller = '".$id."';";
        mysqli_query($conn, $sql);
        header("Location: ../Modificar/ModificaTaller.php");
    }
    
    exit();
?>
