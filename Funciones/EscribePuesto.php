<?php
     $host = "localhost";
     $username = "root";
     $password = "1781324";
     $db = "taller_mecanico";
 
     $conn = new mysqli($host, $username, $password, $db);
 
     if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
     else echo "Connected successfully <br>";

     $cve_puesto = $_POST['cve_puesto'];
     $nombre = $_POST['nombre'];

     if(isset($_POST['registrar'])){
          $sql = "insert into puesto (cve_puesto, nombre) values (".$cve_puesto.", '".$nombre."')";
          echo($sql);
          mysqli_query($conn, $sql);
          header("Location: ../Registrar/RegistraPuesto.php");
     }else if(isset($_POST['modificar'])){
          $id = $_POST['id'];
          echo "Modificando<br>";
          $sql = "UPDATE puesto SET cve_puesto = ".$cve_puesto.", nombre = '".$nombre."' WHERE cve_puesto = '".$id."';";
          mysqli_query($conn, $sql);
          header("Location: ../Modificar/ModificaPuesto.php");
     }else if(isset($_POST['eliminar'])){
          $id = $_POST['id'];
          echo "Eliminando";
          $sql = "DELETE FROM puesto WHERE cve_puesto = '".$id."';";
          mysqli_query($conn, $sql);
          header("Location: ../Modificar/ModificaPuesto.php");
     }
     exit();
?>