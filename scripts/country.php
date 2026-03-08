<?php
defined('CONTROL') or die('Acesso inválido');

$api = new ApiConsumer();

$country = $_GET['country_name'] ?? null;

if(!$country) {
    header('Location: ?route=home');
}

$country_data = $api->getCountry($country)[0];
?>

<div class="container mt-5">
    <div class="d-flex">
        <div class="card p-2 shadow">
            <img src="<?= $country_data['flags']['png'] ?>">
        </div>
        <div class="ms-5 align-self-center">
            <p class="display-3"><?= $country_data['name']['common'] ?></p>
            <p class="p-0 m-0">Capital:</p>
            <p class="p-0 m-0"><?= $country_data['capital'][0] ?></p>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <p>Região: <strong><?= $country_data['region'] ?></strong></p>
            <p>Sub-região: <strong><?= $country_data['subregion'] ?></strong></p>
            <p>População: <strong><?= $country_data['population'] ?></strong></p>
            <p>Área: <strong><?= $country_data['area'] ?></strong> km<sup>2</sup></p>
        </div>
    </div>

    <div>
        <a href="?route=home" class="btn btn-primary">Voltar</a>
    </div>
</div>