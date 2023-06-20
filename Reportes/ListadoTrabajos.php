<?php include("../Components/header.php");?>
<div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID del trabajo</th>
        <th scope="col">Encargado</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $host = "localhost";
            $username = "root";
            $password = "1781324";
            $db = "taller_mecanico";

            $conn = new mysqli($host, $username, $password, $db);
            $sql = "Select ID, nombre As Trabajos_Mecanicos From trabajos NATURAL JOIN mecanico ORDER BY mecanico.nombre;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["ID"]."</td>";
                echo "<td>".$row["Trabajos_Mecanicos"]."</td>";
                echo "</tr>";
            }
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
    </tbody>
    </table>
</div>
<?php include("../Components/footer.php");?>