<?php

spl_autoload_register();


use App\Database\JsonDatabase;
use App\Database\TextDatabase;

$textdb = new TextDatabase("text_data");

// сохраняем в .txt
$arr = [1, 2, 3, "string"];
$textdb->save($arr);

print_r($textdb->get());

// сохраняем в JSON
$jsondb = new JsonDatabase("json_data");
$savedFilename = $jsondb->save($arr);

var_dump($jsondb->get());


echo "\n";
// JsonDatabase поддерживает кэш через трейт
echo $jsondb->getCash($savedFilename);
