<?php include("../Components/header.php");?>
<div>
    <form action="../Funciones/EscribePuesto.php" method="POST">
    <div class="form-group">
        <label for="placa">Clave del puesto</label>
        <input class="form-control" id="cve_puesto" placeholder="123456" name="cve_puesto">
    </div>
    <div class="form-group">
        <label for="marca">Nombre</label>
        <input class="form-control" id="nombre" placeholder="Gerente" name="nombre">
    </div>
    
    <button type="submit" class="btn btn-primary" name="registrar">Submit</button>
    </form>
</div>
<?php include("../Components/footer.php");?>