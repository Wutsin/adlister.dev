<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items');

$query = "CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    item_type ENUM('Bicycle', 'Unicycle', 'Skateboard') NOT NULL,
    headline CHAR(100) NOT NULL,
    price DECIMAL(13,2) NOT NULL,
    date_listed DATE NOT NULL,
    state VARCHAR(255) NOT NULL,
    county VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) DEFAULT '/img/wutsinLogo.png',
    description TEXT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users (id)
)";

$dbc->exec($query);
