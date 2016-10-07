<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items');
$dbc->exec('DROP TABLE IF EXISTS users');

require_once __DIR__ . '/user_migration.php';
require_once __DIR__ . '/item_migration.php';
