<?php
declare(strict_types=1);

$app = new \Slim\App;
$app->get('/hello/{name}', 'Sample');
$app->run();