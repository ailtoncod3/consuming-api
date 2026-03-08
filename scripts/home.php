<?php
defined('CONTROL') or die('Acesso inválido');

//get all contries data
$api = new ApiConsumer();
$coutries = $api->getAllContries();
echo  '<pre>';
print_r($coutries);
echo '</pre>';
?>
<div class="containder mt-5">
    <div class="col text-center">
        <h3>Vamos consumir uma API com PHP puro.</h3>
    </div>
</div>