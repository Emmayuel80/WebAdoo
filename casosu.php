<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-green.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="./CSS/content.css" />
    <link rel="stylesheet" href="./CSS/casosu.css" />
    <title>Documentacion ADOO</title>
</head>

<body>
    <?php require("./PHP/header.php"); ?>
    <div id="page-content">
        <h1>Diagrama de Casos de Uso</h1>
        <div class="mdl-grid">
            <div>
                <a href="./src/img/sistema de libreria.png">
                    <img class="mdl-cell mdl-cell--3-offset-desktop mdl-cell--6-col mdl-cell--4-col-phone" src="./src/img/sistema de libreria.png">
                </a>
            </div>
        </div>
        <h6 id="im"><i>Haz click en la imagen para expandirla</i></h6>
        <div id="casos">
            <h2>Documentos de Casos de Uso</h2>
            <p>A continuacion se muestran los enlaces a la documentación de casos de uso:</p>
        </div>
        <div class="mdl-grid">
            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-phone">
                <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">Caso de uso: UC01</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <p>Descripción: Iniciar sesión de un cliente existente para que pueda comprar un libro.</p>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./src/pdf/UC01.pdf">
                                    Ver Documento
                                </a>
                </div>
            </div>
            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-phone">
                <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">Caso de uso: UC02</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <p>Descripción: Enviar la contraseña al correo electrónico de un cliente existente en caso de que haya olvidado para que vuelva a entrar al sistema.</p>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./src/pdf/UC02.pdf">
                                    Ver Documento
                                </a>
                </div>
            </div>
            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-phone">
                <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">Caso de uso: UC03</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <p>Descripción: El cliente podrá darse de alta en el sistema colocando sus datos para poder realizar compras dentro del sistema.</p>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./src/pdf/UC03.pdf">
                                    Ver Documento
                                </a>
                </div>
            </div>
            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-phone">
                <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">Caso de uso: UC04</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <p>Descripción:El cliente podrá visualizar los libros que tiene el sistema.</p>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="./src/pdf/UC04.pdf">
                                    Ver Documento
                                </a>
                </div>
            </div>
        </div>
        <?php require("./PHP/footer.php"); ?>
</body>

</html>