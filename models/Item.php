<?php

require_once __DIR__ . '/Model.php';

class Item extends Model {

    protected static $table = 'items';

    public static function findByUserId ($id)
    {
        return parent::findyby('user_Id', $id);
    }

    public function getItemType ()
    {
        
    }
}

//display all the add
//search for specific by id
//be able to search through all the collums for keyword
