<?php

require_once __DIR__ . '/Model.php';

class Item extends Model {

    protected static $table = 'items';

    public static function findByUserId ($id)
    {
        return parent::findyby('user_Id', $id);
    }

    public static function searchItems($searchTerm)
    {
        self::dbConnect();

        $query = "SELECT * FROM " . static::$table . " WHERE item_type LIKE '%" . $searchTerm .
        "%' OR headline LIKE '%" . $searchTerm . "%' OR state LIKE '%" . $searchTerm .
        "%' OR county LIKE '%" . $searchTerm . "%' OR description LIKE '%" . $searchTerm . "%';";

        $stmt = self::$dbc->prepare($query);
        $stmt->execute();

          //Store the resultset in a variable named $result
          $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

          $instance = null;

          if ( $results )
          {
              $instance = new static;
              $instance->attributes = $results;
          }
          
          return $instance;
    }

    public static function deleteItem($id) {
        $query = 'DELETE FROM items WHERE id = :id';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }    
}


