<?php
defined('CONTROL') or die('Acesso inválido');

//get all contries data
$api = new ApiConsumer();
$countries = $api->getAllContries();
//$country = $api->getCountry('brazil');
?>
<div class="containder mt-5">
    <div class="col text-center">
        <h3>Países do Mundo</h3>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-4">
        <p>Lista de países</p>
        <select id="selet_country" class="form-select">
            <option>Seleione um país</option>
            <?php foreach($countries as $country): ?>
            <option value="<?= $country ?>"><?= $country ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', ()=>{
        const selet_country = document.querySelector("#selet_country");
        selet_country.addEventListener('change', ()=>{
            country = selet_country.value;
            window.location.href = `?route=country&country_name=${country}`;
        })
    })
</script>