<?php include("../Components/header.php");?>
<div>
    <form action="../Funciones/EscribeMecanico.php" method="POST">
    <div class="form-group">
        <label for="RFC">RFC</label>
        <input class="form-control" id="RFC" placeholder="XXXX000000XXX" name="RFC" maxlength='13'>
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input class="form-control" id="nombre" placeholder="Martín Juárez" name="nombre">
    </div>
    <div class="form-group">
        <label for="cve_puesto">Clave del puesto</label>
        <select name="cve_puesto" class="form-control" id="cve_puesto">
            <?php
                $host = "localhost";
                $username = "root";
                $password = "1781324";
                $db = "taller_mecanico";

                $conn = new mysqli($host, $username, $password, $db);
                $sql = "SELECT * FROM PUESTO";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<option value=".$row["cve_puesto"].">".$row["nombre"]."</option>";
                }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>

        </select>
    </div>

    <div class="form-group">
        <label for="activo">Estatus</label>
        <select name="activo" class="form-control" id="activo">
            <option value="1">Activo</option>
            <option value="0">No activo</option>
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary" name='registrar'>Submit</button>
    </form>
</div>
<?php include("../Components/footer.php");?>