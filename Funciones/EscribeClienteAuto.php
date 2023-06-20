<?php
     $host = "localhost";
     $username = "root";
     $password = "1781324";
     $db = "taller_mecanico";
 
     $conn = new mysqli($host, $username, $password, $db);
 
     if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
     else echo "Connected successfully <br>";

     $cve_cliente = $_POST['cve_cliente'];
     $placa = $_POST['placa'];

     if(isset($_POST['registrar'])){
          $sql = "insert into cliente_auto (cve_cliente, placa) values (".$cve_cliente.", '".$placa."')";
          echo($sql);
          mysqli_query($conn, $sql);
          header("Location: ../Registrar/RegistraClienteAuto.php");
     }else if(isset($_POST['modificar'])){
          $id = $_POST['id'];
          $id2 = $_POST['id2'];
          echo $id." ".$id2;
          echo "Modificando<br>";
          $sql = "UPDATE cliente_auto SET cve_cliente = ".$cve_cliente.", placa = '".$placa."' where cve_cliente = ".$id." and placa = '".$id2."';";
          echo $sql;
          mysqli_query($conn, $sql);
          header("Location: ../Modificar/ModificaClienteAuto.php");
     }else if(isset($_POST['eliminar'])){
          $id = $_POST['id'];
          $id2 = $_POST['id2'];
          echo "Eliminando";
          $sql = "delete from cliente_auto where cve_cliente = ".$id." and placa = '".$id2."';";
          mysqli_query($conn, $sql);
          //header("Location: ../Modificar/ModificaClienteAuto.php");
     }
     exit();
?>