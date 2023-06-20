<?php include("../Components/header.php");?>
<div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Placa</th>
        <th scope="col">Mecánico</th>
        <th scope="col">Horas de reparación</th>
        <th scope="col">Fecha de reparación</th>
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
            $sql = "SELECT * FROM trabajos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<form action='../Funciones/EscribeTrabajos.php' method = 'POST'>";
                echo "<tr>";
                echo "<input type='hidden' placeholder='LLL-000' name='id' value='".$row["ID"]."'>";
                echo "<td><input class='form-control' name='ID' value='".$row["ID"]."'></td>";

                echo "<td><select name='placa' class='form-control' id='placa'>";
                $result2 = $conn->query("SELECT * FROM AUTO");
                while($row2 = $result2->fetch_assoc()) {
                    if($row["placa"] == $row2["placa"]) $selected = "selected"; else $selected = "";
                    echo "<option ".$selected." value='".$row2["placa"]."'>".$row2["placa"]."</option>";
                }
                echo "</select></td>";

                echo "<td><select name='RFC' class='form-control' id='RFC'>";
                $result2 = $conn->query("SELECT * FROM MECANICO");
                while($row2 = $result2->fetch_assoc()) {
                    if($row["RFC"] == $row2["RFC"]) $selected = "selected"; else $selected = "";
                    echo "<option ".$selected." value='".$row2["RFC"]."'>".$row2["nombre"]."</option>";
                }
                echo "</select></td>";


                echo "<td><input class='form-control' name='horas_rep' value='".$row["horas_rep"]."'></td>";
                echo "<td><input type='date' class='form-control' name='fecha_rep' value='".$row["fecha_rep"]."'></td>";
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