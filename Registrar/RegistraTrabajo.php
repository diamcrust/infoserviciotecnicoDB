<?php include("../Components/header.php");?>
<div>
    <form action="../Funciones/EscribeTrabajos.php" method="POST">
    <div class="form-group">
        <label for="ID">ID</label>
        <input class="form-control" id="ID" placeholder="12586" name="ID">
    </div>
    <div class="form-group">
        <label for="placa">Placa</label>
        <select name="placa" class="form-control" id="placa">
            <?php
                $host = "localhost";
                $username = "root";
                $password = "1781324";
                $db = "taller_mecanico";

                $conn = new mysqli($host, $username, $password, $db);
                $sql = "SELECT * FROM auto";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<option value=".$row["placa"].">".$row["placa"]."</option>";
                }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="modelo">RFC</label>
        <select name="RFC" class="form-control" id="RFC">
            <?php
                $host = "localhost";
                $username = "root";
                $password = "1781324";
                $db = "taller_mecanico";

                $conn = new mysqli($host, $username, $password, $db);
                $sql = "SELECT RFC FROM mecanico";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<option value=".$row["RFC"].">".$row["RFC"]."</option>";
                }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="horas_rep">Horas de reparación</label>
        <input class="form-control" id="horas_rep" placeholder="12.5" name="horas_rep">
    </div>
    <div class="form-group">
        <label for="fecha_rep">Fecha de reparación</label>
        <input type="date" class="form-control" id="fecha_rep" name="fecha_rep">
    </div>

    <button type="submit" class="btn btn-primary" name="registrar">Submit</button>
    </form>
</div>
<?php include("../Components/footer.php");?>