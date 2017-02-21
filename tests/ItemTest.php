<?php
    require_once 'src/Item.php';

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    $server = 'mysql:host=localhost:8889;dbname=collection_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);


    class ItemTest extends PHPUnit_Framework_TestCase
    {

        function setUp()
        {
            Item::deleteAll();
        }

        function test_save()
        {
            // Arrange
            $description1 = 'My new type';
            $item_type_id1 = 1;
            $item1 = new Item($description1, $item_type_id1);

            $description2 = 'My other one';
            $item_type_id2 = 1;
            $item2 = new Item($description2, $item_type_id2);

            // Act
            $item1->save();

            // Arrange
            $id1 = $item1->getId();
            var_dump($id1);

            // Act
            $item2->save();

            $item1_retrieved = Item::retrieveById($id1);

            //Assert
            $this->assertEquals($item1, $item1_retrieved);
        }

        // function test_getAll()
        // {
        //     // Arrange
        //     $description1 = 'My new type';
        //     $item_type_id1 = 1;
        //     $item1 = new Item($description1, $item_type_id1);
        //
        //     $description2 = 'My other one';
        //     $item_type_id2 = 1;
        //     $item2 = new Item($description2, $item_type_id2);
        //
        //     // Act
        //     $item1->save();
        //     $item2->save();
        //
        //     $items_retrieved = Item::getAll();
        //
        //     //Assert
        //     $this->assertEquals([$item1,$item2], $items_retrieved);
        // }
    }
?>
