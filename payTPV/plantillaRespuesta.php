<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 01/06/2018
 * Time: 12:07
 */

?>

<!-- BANKSTORE IFRAME RESPONSE TEMPLATE v1.1 WVS-MAM-BEXW -->


<!-- Opción KO dos botones -->

<div style="{PANEL DE CONTROL BACKGROUND_STYLE}">
    <div style="margin-top:15px;">
        <div style="width:99%;margin-top:13px;"><span style="{PANEL DE CONTROL TEXT_STYLE}">No se ha podido realizar correctamente la operación por el siguiente motivo:</span></div>
        <div style="width:99%;margin-top:13px;"><b><span style="{PANEL DE CONTROL TEXT_STYLE}">*-*-*-*-*-MOTIVO-*-*-*-*-*</span></b></div>
    </div>
</div>

<div style="{PANEL DE CONTROL BACKGROUND_STYLE}">
    <div style="margin-top:25px;">
        <div style="padding:10px;"><input type="button" value="Volver" style="{PANEL DE CONTROL SUBMIT_STYLE}" onclick="document.location='.....'" /></div>
        <div style="padding:10px;"><input type="button" value="Finalizar" style="{PANEL DE CONTROL SUBMIT_STYLE}" onclick="parent.location='.....'" /></div>
    </div>
</div>


<!-- Opción OK una línea / un botón (add_user) -->

<div style="{PANEL DE CONTROL BACKGROUND_STYLE}">
    <div style="margin-top:15px;">
        <div style="padding:10px;"><span style="{PANEL DE CONTROL TEXT_STYLE}">La información ha sido actualizada correctamente</span></div>
        <div style="padding:10px;"><input type="button" style="{PANEL DE CONTROL SUBMIT_STYLE}" value="Finalizar" onClick="parent.location='.....'" /></div>
    </div>
</div>

<!-- Opción OK una línea / un botón (authorization - subscription) -->

<div style="{PANEL DE CONTROL BACKGROUND_STYLE}">
    <div style="margin-top:15px;">
        <div style="padding:10px;"><span style="{PANEL DE CONTROL TEXT_STYLE}">El pago del pedido con referencia: <b>*-*-REFERENCIA-*-*</b><br />ha sido realizado con éxito</span></div>
        <div style="padding:10px;"><input type="button" style="{PANEL DE CONTROL SUBMIT_STYLE}" value="Finalizar" onClick="parent.location='.....'" /></div>
    </div>
</div>