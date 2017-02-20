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

        }

        static function getAll()
        {

        }
        static function deleteAll()
        {

        }
    }
?>
