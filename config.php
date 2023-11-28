<?php
// Config database params
return [
  'db' => [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'db_crudphp',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];
