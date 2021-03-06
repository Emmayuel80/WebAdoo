<?php
echo '    <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Sistema Gestor de Libreria</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <a class="mdl-navigation__link" href="index.php">Inicio</a>
                <a class="mdl-navigation__link" href="requerimientos.php">Requerimientos</a>
                <a class="mdl-navigation__link" href="casosu.php">Casos de Uso</a>
                <a class="mdl-navigation__link" href="">Link</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">SGL</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="index.php">Inicio</a>
            <a class="mdl-navigation__link" href="requerimientos.php">Requerimientos</a>
            <a class="mdl-navigation__link" href="casosu.php">Casos de Uso</a>
            <a class="mdl-navigation__link" href="">Link</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content">';
?>