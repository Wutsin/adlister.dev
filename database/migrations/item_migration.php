<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items');

$query = 'CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    item_type INT UNSIGNED NOT NULL,
    headline CHAR(100) NOT NULL,
    price DECIMAL(13,2) NOT NULL,
    date_listed DATE NOT NULL,
    state VARCHAR(255) NOT NULL,
    county VARCHAR(255) NOT NULL,
    image_url TEXT NOT NULL,
    description TEXT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users (id),
    FOREIGN KEY (item_type) REFERENCES item_types (id)
)';

$dbc->exec($query);
