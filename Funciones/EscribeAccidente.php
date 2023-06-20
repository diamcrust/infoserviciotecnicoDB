<?php
    $host = "localhost";
    $username = "root";
    $password = "1781324";
    $db = "taller_mecanico";

    $conn = new mysqli($host, $username, $password, $db);

    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    else echo "Connected successfully <br>";

    $num_accidente = $_POST['num_accidente'];
    $cve_cliente = $_POST['cve_cliente'];
    $placa = $_POST['placa'];
    $rfc_taller = $_POST['rfc_taller'];
    $fecha = $_POST['fecha'];
    $costo = $_POST['costo'];

    if(isset($_POST['registrar'])){
        $sql = "INSERT INTO accidente (num_accidente, cve_cliente, placa, rfc_taller, fecha, costo) VALUES($num_accidente, $cve_cliente, '$placa','$rfc_taller','$fecha',$costo);";
        echo($sql);
        mysqli_query($conn, $sql);
        header("Location: ../Registrar/RegistraAccidente.php");
    }else if(isset($_POST['modificar'])){
        $id = $_POST['id'];
        echo "Modificando<br>";
        $sql = "UPDATE accidente SET num_accidente = ".$num_accidente.", cve_cliente = ".$cve_cliente.", placa = '".$placa."', rfc_taller = '".$rfc_taller."', fecha = '".$fecha."', costo = ".$costo." where num_accidente = ".$id.";";
        echo $sql;
        mysqli_query($conn, $sql);
        header("Location: ../Modificar/ModificaAccidente.php");
    }else if(isset($_POST['eliminar'])){
        $id = $_POST['id'];
        echo "Eliminando";
        $sql = "DELETE FROM accidente WHERE num_accidente = '".$id."';";
        mysqli_query($conn, $sql);
        header("Location: ../Modificar/ModificaAccidente.php");
    }
    
    exit();
?>
