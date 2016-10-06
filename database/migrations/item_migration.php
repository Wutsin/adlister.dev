<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items');

$query = 'CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(13,2) NOT NULL,
    -- item_type ENUM (bicyle, unicycle, skateboard) UNSIGNED NOT NULL,
    date_listed DATE NOT NULL,
    state VARCHAR(255) NOT NULL,
    county VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    description TEXT(500) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users (id),
    PRIMARY KEY (id)
)';

$dbc->exec($query);