<?php
  require("Php-actions/llenarCB/llenarCBCategorias.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>index.php</title>
        <script src="javascript/jquery-3.4.1.min.js"></script>
        <script src="javascript/llenarSubcategorias.js"></script>
    </head>
    <body>
        <div id="buscador">
            <div>
                <p>
                <input type="text" name="buscadorTitulo">
                <input type="submit" name="botonBuscar" value="Buscar">
                </p>
            </div>
            <div>
                <label>Categoria: </label>
                <select name="categorias" id="categorias">
                    <?php llenarCategorias($categorias)?>
                </select>

                <label>Subcategoria: </label>
                <select name="subcategorias" id="subcategorias">
                </select>

                <label for="busEmpresa">Empresa: </label><input type="text" name="buscadorEmpresa" id="busEmpresa">
            </div>
        </div>
        <div id="anuncios">
            <div class="anuncio">
                <h3>Anuncio 1</h3>
            </div>
            <div class="anuncio">
                <h3>Anuncio 2</h3>
            </div>
            <div class="anuncio">
                <h3>Anuncio 3</h3>
            </div>
            <div class="anuncio">
                <h3>Anuncio 4</h3>
            </div>
            <div class="anuncio">
                <h3>Anuncio 5</h3>
            </div>
            <div class="anuncio">
                <h3>Anuncio 6</h3>
            </div>
        </div>
    </body>
</html>
