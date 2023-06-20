<?php
    $host = "localhost";
    $username = "root";
    $password = "1781324";
    $db = "taller_mecanico";

    $conn = new mysqli($host, $username, $password, $db);

    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    else echo "Connected successfully <br>";

    $cve_cliente = $_POST['cve_cliente'];
    $nombre = $_POST['nombre'];
    $calle = $_POST['calle'];
    $num_dom = $_POST['num_dom'];
    $colonia = $_POST['colonia'];
    $localidad = $_POST['localidad'];
    $municipio = $_POST['municipio'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];
    $tarifa = $_POST['tarifa'];


    if(isset($_POST['registrar'])){
        $sql = "insert into cliente (cve_cliente, nombre, calle, num_dom, colonia, localidad, municipio, estado, pais, tarifa) 
        values (".$cve_cliente.", '".$nombre."', '".$calle."', ".$num_dom.", '".$colonia."', '".$localidad."', '".$municipio."', '".$estado."', '".$pais."', ".$tarifa.")";
        echo($sql);
        mysqli_query($conn, $sql);
        header("Location: ../Registrar/RegistraCliente.php");
    }else if(isset($_POST['modificar'])){
        $id = $_POST['id'];
        echo "Modificando<br>";
        $sql = "UPDATE cliente SET cve_cliente = ".$cve_cliente.", nombre = '".$nombre."', calle = '".$calle."', num_dom=".$num_dom.",
        colonia = '".$colonia."', localidad = '".$localidad."', municipio = '".$municipio."', estado = '".$estado."', pais = '".$pais."', tarifa = ".$tarifa." 
        WHERE cve_cliente = '".$id."';";
        mysqli_query($conn, $sql);
        header("Location: ../Modificar/ModificaCliente.php");
    }else if(isset($_POST['eliminar'])){
        $id = $_POST['id'];
        echo "Eliminando";
        $sql = "DELETE FROM cliente WHERE cve_cliente = '".$id."';";
        mysqli_query($conn, $sql);
        header("Location: ../Modificar/ModificaCliente.php");
    }
    
    exit();
?>
