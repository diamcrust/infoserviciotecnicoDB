<?php include("../Components/header.php");?>
<div>
    <form action="../Funciones/EscribeCliente.php" method="POST">
    <div class="form-group">
        <label for="cve_cliente">Clave del cliente</label>
        <input class="form-control" id="cve_cliente" placeholder="000000" name="cve_cliente">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input class="form-control" id="nombre" placeholder="Juan Pérez" name="nombre">
    </div>
    <div class="form-group">
        <label for="calle">Calle</label>
        <input class="form-control" id="calle" placeholder="Mariano Abasolo" name="calle">
    </div>
    <div class="form-group">
        <label for="num_dom">No. Domicilio</label>
        <input type = "number" class="form-control" id="num_dom" placeholder="5" name="num_dom">
    </div>
    <div class="form-group">
        <label for="colonia">Colonia</label>
        <input class="form-control" id="colonia" placeholder="Santa Martha" name="colonia">
    </div>
    <div class="form-group">
        <label for="localidad">Localidad</label>
        <input class="form-control" id="colonia" placeholder="Metepec" name="localidad">
    </div>
    <div class="form-group">
        <label for="municipio">Municipio</label>
        <input class="form-control" id="colonia" placeholder="Metepec" name="municipio">
    </div>
    <div class="form-group">
        <label for="estado">Estado</label>
        <input class="form-control" id="estado" placeholder="Edo. Mex" name="estado">
    </div>
    <div class="form-group">
        <label for="pais">País</label>
        <input class="form-control" id="pais" placeholder="México" name="pais">
    </div>
    <div class="form-group">
        <label for="tarifa">Tarifa</label>
        <input class="form-control" id="tarifa" placeholder="19.90" name="tarifa">
    </div>
    
    <button type="submit" class="btn btn-primary" name='registrar'>Submit</button>
    </form>
</div>
<?php include("../Components/footer.php");?>