<?php include("../Components/header.php");?>
<div>
    <form action="../Funciones/EscribeClienteAuto.php" method="POST">
        <div class="form-group">
            <label for="activo">Cliente</label>
            <select name="cve_cliente" class="form-control" id="cve_cliente">
                <option value="NULL">Seleccione</option>
                <?php
                    $host = "localhost";
                    $username = "root";
                    $password = "1781324";
                    $db = "taller_mecanico";
    
                    $conn = new mysqli($host, $username, $password, $db);
                    $sql = "SELECT cve_cliente, nombre FROM CLIENTE";
                    $result = $conn->query($sql);
    
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<option value=".$row["cve_cliente"].">".$row["cve_cliente"]." - ".$row["nombre"]."</option>";
                    }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="activo">Placa</label>
            <select name="placa" class="form-control" id="placa">
                <option value="NULL">Seleccione</option>
                <?php
                    $host = "localhost";
                    $username = "root";
                    $password = "1781324";
                    $db = "taller_mecanico";
    
                    $conn = new mysqli($host, $username, $password, $db);
                    $sql = "SELECT placa FROM auto";
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
        
        <button type="submit" class="btn btn-primary" name='registrar'>Submit</button>
    </form>
</div>
<?php include("../Components/footer.php");?>