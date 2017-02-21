<?php
    class Item
    {
        private $id;
        private $item_type_id;
        private $description;

        function __construct($new_description, $new_item_type_id, $new_id = null)
        {
            $this->setDescription($new_description);
            $this->setItemType($new_item_type_id);
            $this->setId($new_id);
        }

        function getId(){
            return $this->id;
        }

        function getItemTypeID(){
            return $this->item_type_id;
        }

        function getItemType(){
        }

        function getDescription(){
            return $this->description;
        }

        function setId($new_id){
            $this->id = $new_id;
        }

        function setItemType($new_item_type_id){
            $this->item_type_id = $new_item_type_id;
        }

        function setDescription($new_description){
            $this->description = $new_description;
        }

        function save()
        {
            $GLOBALS['DB']->exec(
                "INSERT INTO items (description, item_type_id) VALUES " .
                "('{$this->getDescription()}', '{$this->getItemTypeID()}');"
            );
            $this->setId($GLOBALS['DB']->lastInsertId());
        }

        static function retrieveById($id)
        {
            $retreived_item = null;
            $returned_object = $GLOBALS['DB']->query("SELECT * FROM items WHERE id = $id;");
            if ($returned_object) {
                foreach ($returned_object as $returned_item) {
                    $retreived_item = new Item(
                        $returned_item['description'],
                        $returned_item['item_type_id'],
                        $returned_item['id']
                    );
                }
            }
            return $retreived_item;
        }

        static function getAll()
        {

        }

        static function deleteAll()
        {

        }
    }
?>
