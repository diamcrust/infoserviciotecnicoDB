<?php include("../Components/header.php");?>
<div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Clave del puesto</th>
        <th scope="col">Nombre del puesto</th>
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
            $sql = "SELECT * FROM puesto";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<form action='../Funciones/EscribePuesto.php' method = 'POST'>";
                echo "<tr>";
                echo "<input type='hidden' placeholder='LLL-000' name='id' value='".$row["cve_puesto"]."'>";
                echo "<td><input class='form-control' name='cve_puesto' value='".$row["cve_puesto"]."'></td>";
                echo "<td><input class='form-control' name='nombre' value='".$row["nombre"]."'></td>";
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