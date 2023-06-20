<?php include("../Components/header.php");?>
<div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Número de accidente</th>
        <th scope="col">Cliente</th>
        <th scope="col">Placa</th>
        <th scope="col">Taller</th>
        <th scope="col">Fecha</th>
        <th scope="col">Costo</th>
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
            $sql = "SELECT * FROM ACCIDENTE";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<form action='../Funciones/EscribeAccidente.php' method = 'POST'>";
                echo "<tr>";
                echo "<input type='hidden' name='id' value='".$row["num_accidente"]."'>";

                echo "<td><input type='number' name='num_accidente' class='form-control' value='".$row["num_accidente"]."'></td>";

                echo "<td><select name='cve_cliente' class='form-control' id='cve_cliente'>";
                $result2 = $conn->query("SELECT cve_cliente, nombre FROM cliente");
                while($row2 = $result2->fetch_assoc()) {
                    if($row["cve_cliente"] == $row2["cve_cliente"]) $selected = "selected"; else $selected = "";
                    echo "<option ".$selected." value='".$row2["cve_cliente"]."'>".$row2["cve_cliente"]." - ".$row2["nombre"]."</option>";
                }
                echo "</select></td>";

                echo "<td><select name='placa' class='form-control' id='placa'>";
                $result2 = $conn->query("SELECT placa FROM auto");
                while($row2 = $result2->fetch_assoc()) {
                    if($row["placa"] == $row2["placa"]) $selected = "selected"; else $selected = "";
                    echo "<option ".$selected." value='".$row2["placa"]."'>".$row2["placa"]."</option>";
                }
                echo "</select></td>";

                echo "<td><select name='rfc_taller' class='form-control' id='rfc_taller'>";
                $result2 = $conn->query("SELECT rfc_taller FROM taller");
                while($row2 = $result2->fetch_assoc()) {
                    if($row["rfc_taller"] == $row2["rfc_taller"]) $selected = "selected"; else $selected = "";
                    echo "<option ".$selected." value='".$row2["rfc_taller"]."'>".$row2["rfc_taller"]."</option>";
                }
                echo "</select></td>";

                echo "<td><input type='date' name='fecha' class='form-control' value='".$row["fecha"]."'></td>";

                echo "<td><input name='costo' class='form-control' value='".$row["costo"]."'></td>";

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