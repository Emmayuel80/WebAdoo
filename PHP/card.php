<?php
echo '<div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-phone">
<div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">'. $titulo .'</h2>
</div>
<div class="mdl-card__supporting-text">
    <p>Descripción: '. $descripcion .'</p>
</div>
<div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="'.$url.'">
                    Ver Documento
                </a>
</div>
</div>';
?>