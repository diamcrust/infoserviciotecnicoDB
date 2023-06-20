<?php include("../Components/header.php");?>
<div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Placa</th>
        <th scope="col">Marca</th>
        <th scope="col">Año de fabricación</th>
        <th scope="col">Modelo</th>
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
            $sql = "SELECT * FROM AUTO";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<form action='../Funciones/EscribeAuto.php' method = 'POST'>";
                echo "<tr>";
                echo "<input type='hidden' placeholder='LLL-000' name='id' value='".$row["placa"]."'>";
                echo "<td><input class='form-control' name='placa' value='".$row["placa"]."'></td>";
                echo "<td><input class='form-control' name='marca' value='".$row["marca"]."'></td>";
                echo "<td><input class='form-control' name='anio_fab' value='".$row["anio_fab"]."'></td>";
                echo "<td><input class='form-control' name='modelo' value='".$row["modelo"]."'></td>";
                echo "<td><input class='form-control' name='color' value='".$row["color"]."'></td>";
                echo "<td> <button type='submit' class='btn btn-primary' name = 'modificar'>Modificar</button> </td>";
                echo "<td> <button type='submit' class='btn btn-danger' name = 'eliminar'>Eliminar</button> </td>";
                echo "</tr>";
                echo "</form>";
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