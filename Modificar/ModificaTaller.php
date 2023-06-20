<?php include("../Components/header.php");?>
<div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">RFC del taller</th>
        <th scope="col">Nombre</th>
        <th scope="col">Calle</th>
        <th scope="col">No. Domicilio</th>
        <th scope="col">Colonia</th>
        <th scope="col">Localidad</th>
        <th scope="col">Municipio</th>
        <th scope="col">Estado</th>
        <th scope="col">País</th>
        <th scope="col">Tarifa</th>
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
            $sql = "SELECT * FROM TALLER";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<form action='../Funciones/EscribeTaller.php' method = 'POST'>";
                echo "<tr>";
                echo "<input type='hidden' name='id' value='".$row["rfc_taller"]."'>";
                echo "<td><input class='form-control' name='rfc_taller' value='".$row["rfc_taller"]."'></td>";
                echo "<td><input class='form-control' name='nombre' value='".$row["nombre"]."'></td>";
                echo "<td><input class='form-control' name='calle' value='".$row["calle"]."'></td>";
                echo "<td><input type = 'number' class='form-control' name='num_dom' value='".$row["num_dom"]."'></td>";
                echo "<td><input class='form-control' name='colonia' value='".$row["colonia"]."'></td>";
                echo "<td><input class='form-control' name='localidad' value='".$row["localidad"]."'></td>";
                echo "<td><input class='form-control' name='municipio' value='".$row["municipio"]."'></td>";
                echo "<td><input class='form-control' name='estado' value='".$row["estado"]."'></td>";
                echo "<td><input class='form-control' name='pais' value='".$row["pais"]."'></td>";
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