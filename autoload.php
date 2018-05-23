<?php

require __DIR__.'/src/Autoload.php';

$autoload = new ErikFig\Autoload;
$autoload->register();

$autoload->addNamespace('ErikFig', 'src');
