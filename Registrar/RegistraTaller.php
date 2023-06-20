<?php include("../Components/header.php");?>
<div>
    <form action="../Funciones/EscribeTaller.php" method="POST">
    <div class="form-group">
        <label for="rfc_taller">RFC del taller</label>
        <input class="form-control" id="rfc_taller" placeholder="XXXX000000XXX" name="rfc_taller">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input class="form-control" id="nombre" placeholder="Taller Relámpago" name="nombre">
    </div>
    <div class="form-group">
        <label for="calle">Calle</label>
        <input class="form-control" id="calle" placeholder="Escobedo" name="calle">
    </div>
    <div class="form-group">
        <label for="num_dom">No. Domicilio</label>
        <input type = "number" class="form-control" id="num_dom" placeholder="5" name="num_dom">
    </div>
    <div class="form-group">
        <label for="colonia">Colonia</label>
        <input class="form-control" id="colonia" placeholder="Juárez" name="colonia">
    </div>
    <div class="form-group">
        <label for="localidad">Localidad</label>
        <input class="form-control" id="colonia" placeholder="Acolman" name="localidad">
    </div>
    <div class="form-group">
        <label for="municipio">Municipio</label>
        <input class="form-control" id="colonia" placeholder="Parácuaro" name="municipio">
    </div>
    <div class="form-group">
        <label for="estado">Estado</label>
        <input class="form-control" id="estado" placeholder="Michoacán" name="estado">
    </div>
    <div class="form-group">
        <label for="pais">País</label>
        <input class="form-control" id="pais" placeholder="México" name="pais">
    </div>
    
    <button type="submit" class="btn btn-primary" name='registrar'>Submit</button>
    </form>
</div>
<?php include("../Components/footer.php");?>