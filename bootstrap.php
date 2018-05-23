<?php

require __DIR__.'/autoload.php';

// $person = new ErikFig\People\Person;
// $person->setName('Erik');
// $person->setAge(32);
// $person->setWeight(65);
//
// var_dump($person);

// var_dump((new ErikFig\DB\Postgres)->connect());
// var_dump((new ErikFig\DB\MySql)->connect());

// try {
//     (new ErikFig\DB\ORM)->select(false);
// } catch (ErikFig\MyException $e) {
//     echo $e->getMessage();
// } catch (\Exception $e) {
//     echo 'ERRO: ' . $e->getMessage();
// }

$people = new ErikFig\People\Person;
$people->name = 'erik';
$people->age = 1;
$people->weight = 60.6;

var_dump($people->name);
var_dump($people->age);

echo $people;
