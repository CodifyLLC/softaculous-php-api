<?php

include('config.php');
include('../loader.php');

$softaculous = new \CodifyLLC\softaculous\softaculous();
$softaculous->setDomain(HOSTNAME);
$softaculous->setUser(USERNAME);
$softaculous->setPassword(PASSWORD);

$softaculous->setAct('software');
$softaculous->setSoft(26); // wordpress

$softaculousPost = new \CodifyLLC\softaculous\softaculousPost();
$softaculousPost->setAdminEmail('luke.hoezee@gmail.com');
$softaculousPost->setAdminUsername('tmpadmin');
$softaculousPost->setAdminPass('testing123');
$softaculousPost->setDbusername('dbusername');
$softaculousPost->setDbuserpass('test');
$softaculousPost->setSoftdb(1);
$softaculousPost->setSoftsubmit(1);
$softaculousPost->setSoftdomain('testingdomain.com');
$softaculousPost->setSoftdirectory('wp');
$softaculousPost->setSoftdb('testing');
$softaculousPost->setLanguage('en');
$softaculousPost->setSiteName('Testing site name');
$softaculousPost->setSiteDesc('Just testing Wordpress Install');
$softaculousPost->setNoemail(1);

$softaculous->setPost($softaculousPost);

$response = $softaculous->send();

print_r($response);