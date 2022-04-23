<?php

class Product {

  public $id;
  public $name;
  public $price;
  public $description;
  public $image;

  public function __construct($id, $name, $price, $description, $image) {
    $this->id = (int)$id;
    $this->name = $name;
    $this->price = (float)$price;
    $this->description = $description;
    $this->image = $image;
  }
}

class ProductManager extends DBManager {

  public function __construct() {
    parent::__construct();
    $this->columns = array( 'id', 'name', 'price', 'description', 'image');
    $this->tableName = "products";
  }
}

?>