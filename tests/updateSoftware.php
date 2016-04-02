<?php

include('config.php');
include('../loader.php');

$softaculous = new \CodifyLLC\softaculous\softaculous();
$softaculous->setDomain(HOSTNAME);
$softaculous->setUser(USERNAME);
$softaculous->setPassword(PASSWORD);

$softaculous->setInsid('26_76622');

$softaculous->setAct('upgrade');

$softaculousPost = new \CodifyLLC\softaculous\softaculousPost();
$softaculousPost->setSoftsubmit(1);

$softaculous->setPost($softaculousPost);

$response = $softaculous->send();

print_r($response);