# Collection Inventory Database with PHPUnit, mySQL, Silex and Twig

#### Epicodus PHP Week 3 mySQL lab, 2/20/2017

#### By Benjamin T. Seaver & Dylan Stackhouse

## Description

A website to view and modify a collection of various items.

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Mac.
* See https://getcomposer.org/ for details on installing _composer_.
* See https://mamp.info/ for details on installing _MAMP_.
* Clone project
* From project root, run > `composer install --prefer-source --no-interaction`
* To run PHPUnit tests from root > `vendor/bin/phpunit tests`
* From web folder in project, Start PHP > `php -S localhost:8000`
* In web browser open `localhost:8000`

## Known Bugs
* No known bugs

## Support and contact details
* No support

## Technologies Used
* PHP
* MAMP
* mySQL
* Composer
* PHPUnit
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* Git

## Copyright (c)
* Benjamin T. Seaver & Dylan Stackhouse

## License
* MIT

## Specifications
1. Add PHPUnit dependency (composer.json, composer.lock, .gitignore)

2. Define tables and objects:
    * item_types (id, description)
    * items (id, item_type_id, description)
    * Add empty classes Item, ItemType (src/).

3. Iterate between:
    * Add tests (tests/)
    * Enhance functionality (src/)
    * Refactor as needed

4. Item Types tests:
    * save(): Add two item types, lookup first one, verify first and retrieved are the same.
    * getAll: retrieve two
    * (For later) Allow deletion if not linked in Items

5. Items tests:
    * Add item with item type
    * Delete item: add two delete first
    * (For later) change item type
    * (For later) edit fields in Item

6. Add Silex and Twig dependencies (composer.json, composer.lock)

7. Twig form for viewing adding item types

8. Route(s) for adding viewing item_types

9. Twig form for adding viewing Items

10. Route for items

11. Possible delete and other edit functionality


* End specifications
