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

        function getItemType(){
            return $this->item_type_id;
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

        }

        static function getAll()
        {

        }
        static function deleteAll()
        {

        }
    }
?>
