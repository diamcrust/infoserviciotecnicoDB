<?php include("../Components/header.php");?>
<div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Marca</th>
        <th scope="col">Color</th>
        <th scope="col">Fecha</th>
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
            $sql = "Select nombre, marca, color, fecha AS Accidente_Reciente from auto NATURAL JOIN cliente NATURAL JOIN accidente ORDER BY accidente.fecha;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["nombre"]."</td>";
                echo "<td>".$row["marca"]."</td>";
                echo "<td>".$row["color"]."</td>";
                echo "<td>".$row["Accidente_Reciente"]."</td>";
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