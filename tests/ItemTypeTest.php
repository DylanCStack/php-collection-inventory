<?php
    require_once 'src/ItemType.php';

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    $server = 'mysql:host=localhost:8889;dbname=collection_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);


    class ItemTypeTest extends PHPUnit_Framework_TestCase
    {

        function setUp()
        {
            ItemType::deleteAll();
        }

        function test_save()
        {
            // Arrange
            $description1 = 'My new type';
            $type1 = new ItemType($description1);

            $description2 = 'My other one';
            $type2 = new ItemType($description2);

            // Act
            $type1->save();

            // Arrange
            $id1 = $type1->getId();
            var_dump($id1);
            
            // Act
            $type2->save();

            $type1_retrieved = ItemType::retrieveById($id1);

            //Assert
            $this->assertEquals($type1, $type1_retrieved);
        }
    }
?>
