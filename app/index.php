<?php

require_once __DIR__ . '/vendor/autoload.php';

use MongoDB\Client;

$mongo = new Client('mongodb://root:root@mongo:27017');

$collection_users = $mongo->testdb->users;

/*
 * Insert
 * */
//$insert = $collection->insertOne([
//    'username' => 'usertest-' . $id = rand(1, 100),
//    'email' => 'usertest-' . $id . '@test.com',
//    'name' => 'User Test - ' . $id,
//]);

$users = $collection_users->find()->toArray();

foreach ($users as $user) {
    var_dump($user);
}
