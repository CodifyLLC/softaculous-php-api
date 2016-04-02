<?php

include('config.php');
include('../loader.php');

$softaculous = new \CodifyLLC\softaculous\softaculous();
$softaculous->setDomain(HOSTNAME);
$softaculous->setUser(USERNAME);
$softaculous->setPassword(PASSWORD);

$response = $softaculous->send();

print_r($response);
