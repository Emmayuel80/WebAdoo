<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-green.min.css" />
    <link rel="stylesheet" href="./CSS/content.css">
    <link rel="stylesheet" href="./CSS/requerimientos.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Documentacion ADOO</title>

</head>

<body>
    <?php require("./PHP/header.php"); ?>
                <div id="page-content">
                    <h1>Requerimientos del Proyecto</h1>
                    <p>A continuacion mostramos una tabla con los requerimientos y restricciones  para llevar a cabo el proyecto:</p>
                    <div id="tablaREQ">
                        <table class="mdl-data-table mdl-js-data-table">
                            <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric mdl-data-table__header--sorted-ascending">ID</th>
                                    <th class="mdl-data-table__cell--non-numeric">Nombre</th>
                                    <th class="mdl-data-table__cell--non-numeric">Descripción</th>
                                    <th class="mdl-data-table__cell--non-numeric">Origen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RF1</td>
                                    <td class="mdl-data-table__cell--non-numeric">Registros</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>El sistema, permitirá acceder a todos los registros de los libros, mostrando, el nombre del libro, autor, editorial y precio.</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RF2</td>
                                    <td class="mdl-data-table__cell--non-numeric">Clientes</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>El sistema permitirá el registro de los datos de los clientes: Nombre, género, dirección, teléfono, correo electrónico.</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RF3</td>
                                    <td class="mdl-data-table__cell--non-numeric">Búsqueda</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>El sistema filtrara los registros de los libros de acuerdo a subconjuntos especificados por el cliente.</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RF4</td>
                                    <td class="mdl-data-table__cell--non-numeric">Pagos</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>El sistema solo aceptara pago con tarjeta, tanto debito como crédito, como método de pago.</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RF5</td>
                                    <td class="mdl-data-table__cell--non-numeric">Administrador</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>El administrador, podrá añadir, modificar y eliminar los registros sobre los libros</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">RF4</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RF6</td>
                                    <td class="mdl-data-table__cell--non-numeric">Carrito</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p> Los clientes agregaran los libros a un “carrito” de compra, en el cual se podrá decidir si comprarlo o eliminarlo.</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RF7</td>
                                    <td class="mdl-data-table__cell--non-numeric">Lista de desos</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p> Los clientes podran agregar libros a su lista de deseos, para agrupar los libros que quiera comprar</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RF8</td>
                                    <td class="mdl-data-table__cell--non-numeric">Mostrar lista</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p> El sistema mostrara la lista de deseos a los clientes, permitiendoles tambien eliminar los elementos de esta</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RNF1</td>
                                    <td class="mdl-data-table__cell--non-numeric">Navegadores</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>El sistema deberá de funcionar correctamente en los navegadores Chrome y Firefox</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RNF2</td>
                                    <td class="mdl-data-table__cell--non-numeric">Codificación</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>El sistema deberá estar escrito en html y JavaScript</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RNF3</td>
                                    <td class="mdl-data-table__cell--non-numeric">Base de Datos</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>Para la base de datos del sistema se empleara el gestor de bases de datos MySQL</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RNF4</td>
                                    <td class="mdl-data-table__cell--non-numeric">Privacidad</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>El sistema no mostrara información personal del usuario, a los empleados de la librería así como a otros usurarios</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Requerimiento Externo</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RNF5</td>
                                    <td class="mdl-data-table__cell--non-numeric">Back-end</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>El back-end debe estar hecho en node.js</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RNF6</td>
                                    <td class="mdl-data-table__cell--non-numeric">Diseño</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>Se utilizara material design como modelo de diseño</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RNF7</td>
                                    <td class="mdl-data-table__cell--non-numeric">Estilo de fuente</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>Se utilizara Roboto como estilo de fuente</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RS1</td>
                                    <td class="mdl-data-table__cell--non-numeric">Precios</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>Dentro del sistema, no puede haber precios negativos</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RS2</td>
                                    <td class="mdl-data-table__cell--non-numeric">Edad</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>La edad ingresada por un cliente no puede ser negativa</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RS3</td>
                                    <td class="mdl-data-table__cell--non-numeric">Sexo</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>El sexo de un cliente solamente puede ser masculino o femenino.</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">RS4</td>
                                    <td class="mdl-data-table__cell--non-numeric">Articulos</td>
                                    <td class="mdl-data-table__cell--non-numeric">
                                        <p>No puede haber una cantidad negativa de articulos</p>
                                    </td>
                                    <td class="mdl-data-table__cell--non-numeric">Propuesto</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <br>                
                <h1>Reglas del Negocio</h1>
                <p>La siguiente tabla muestra las reglas del negocio</p>
                <div id="TablaBR">
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                    <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric mdl-data-table__header--sorted-ascending">ID</th>
                            <th class="mdl-data-table__cell--non-numeric">Nombre</th>
                            <th class="mdl-data-table__cell--non-numeric">Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">BR1</td>
                            <td class="mdl-data-table__cell--non-numeric">Metodo de pago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <p>Existirá la posibilidad de realizar pagos con tarjeta de crédito o débito</p>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
</div>
<?php require("./PHP/footer.php"); ?>

</body>

</html>