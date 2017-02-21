<?php
    class ItemType
    {
        private $id;
        private $description;

        function __construct($new_description, $new_id = null)
        {
            $this->setDescription($new_description);
            $this->setId($new_id);
        }

        function getId(){
            return $this->id;
        }

        function getDescription(){
            return $this->description;
        }

        function setId($new_id){
            $this->id = $new_id;
        }

        function setDescription($new_description){
            $this->description = $new_description;
        }

        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO item_types (description) VALUES ('{$this->getDescription()}');");
            $this->setId($GLOBALS['DB']->lastInsertId());
        }

        static function retrieveById($id)
        {
            $retrieved = null;
            $returned_item_types = $GLOBALS['DB']->query("SELECT * FROM item_types WHERE id = $id;");
            if ($returned_item_types) {
                foreach($returned_item_types as $item_type)
                {
                    $retrieved = new ItemType (
                        $item_type['description'],
                        $item_type['id']
                    );
                }
            }
            return $retrieved;
        }

        static function getAll()
        {
            $output = array();
            $returned_item_types = $GLOBALS['DB']->query("SELECT * FROM item_types;");
            if ($returned_item_types) {
                foreach ($returned_item_types as $item_type) {
                    array_push(
                        $output,
                        new ItemType(
                            $item_type['description'],
                            $item_type['id']
                        )
                    );
                }
            }
            return $output;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec('DELETE FROM item_types;');
        }
    }
?>
