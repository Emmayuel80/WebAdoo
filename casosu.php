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
         <?php $titulo='Caso de uso: UC01'; 
               $descripcion='Iniciar sesión de un cliente existente para que pueda comprar un libro.';
               $url='./src/pdf/UC01.pdf';
                include "./PHP/card.php"; ?>
         <?php $titulo='Caso de uso: UC02'; 
               $descripcion='Enviar la contraseña al correo electrónico de un cliente existente en caso de que haya olvidado para que vuelva a entrar al sistema.';
               $url='./src/pdf/UC02.pdf';
                include "./PHP/card.php"; ?>
         <?php $titulo='Caso de uso: UC03'; 
               $descripcion='El cliente podrá darse de alta en el sistema colocando sus datos para poder realizar compras dentro del sistema.';
               $url='./src/pdf/UC03.pdf';
                include "./PHP/card.php"; ?>
         <?php $titulo='Caso de uso: UC04'; 
               $descripcion='El cliente podrá visualizar los libros que tiene el sistema.';
               $url='./src/pdf/UC04.pdf';
                include "./PHP/card.php"; ?>
         <?php $titulo='Caso de uso: UC08'; 
               $descripcion='El cliente verifica/modifica sus datos de pago en la sección de Cuenta. ';
               $url='./src/pdf/UC08.pdf';
                include "./PHP/card.php"; ?>
         <?php $titulo='Caso de uso: UC09'; 
               $descripcion='El cliente verifica los artículos que va a comprar en el carrito. ';
               $url='./src/pdf/UC09.pdf';
                include "./PHP/card.php"; ?>
         <?php $titulo='Caso de uso: UC10'; 
               $descripcion='El cliente paga por los libros que están en su carrito.';
               $url='./src/pdf/UC10.pdf';
                include "./PHP/card.php"; ?>
         <?php $titulo='Caso de uso: UC11'; 
               $descripcion='El Administrador añade un libro al catálogo.';
               $url='./src/pdf/UC11.pdf';
                include "./PHP/card.php"; ?>
         <?php $titulo='Caso de uso: UC12'; 
               $descripcion='El Administrador modifica los datos de un libro.';
               $url='./src/pdf/UC12.pdf';
                include "./PHP/card.php"; ?>
         <?php $titulo='Caso de uso: UC13'; 
               $descripcion='El Administrador elimina un libro del catalogo.';
               $url='./src/pdf/UC13.pdf';
                include "./PHP/card.php"; ?>
         <?php $titulo='Caso de uso: UC14'; 
               $descripcion='Se le muestran los pedidos pendientes al administrador.';
               $url='./src/pdf/UC14.pdf';
                include "./PHP/card.php"; ?>              
        </div>
</div>
        <?php require("./PHP/footer.php"); ?>
</body>

</html>