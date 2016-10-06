<?php  

require_once __DIR__ . '/../../models/Item_Type.php';

$item_type = new Item_Type();
$item_type->name = 'Bicycle';
$item_type->save();

$item_type = new Item_Type();
$item_type->name = 'Unicycle';
$item_type->save();

$item_type = new Item_Type();
$item_type->name = 'Skateboard';
$item_type->save();