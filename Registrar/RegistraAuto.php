<?php include("../Components/header.php");?>
<div>
    <form action="../Funciones/EscribeAuto.php" method="POST">
    <div class="form-group">
        <label for="placa">Placa</label>
        <input class="form-control" id="placa" placeholder="LLL-000" name="placa">
    </div>
    <div class="form-group">
        <label for="marca">Marca</label>
        <input class="form-control" id="marca" placeholder="Toyota" name="marca">
    </div>
    <div class="form-group">
        <label for="anio_fab">Año de fabricación</label>
        <input type="number" class="form-control" id="anio_fab" placeholder="2008" name="anio_fab">
    </div>
    <div class="form-group">
        <label for="modelo">Modelo</label>
        <input class="form-control" id="modelo" placeholder="Tsuru" name="modelo">
    </div>
    <div class="form-group">
        <label for="color">Color</label>
        <input class="form-control" id="modelo" placeholder="Rojo" name="color">
    </div>
    
    <button type="submit" class="btn btn-primary" name='registrar'>Submit</button>
    </form>
</div>
<?php include("../Components/footer.php");?>