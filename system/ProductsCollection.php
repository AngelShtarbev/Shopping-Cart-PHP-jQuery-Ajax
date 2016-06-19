<?php

class ProductsCollection extends Collection {

  protected $entity = 'ProductsEntity';
  protected $table = 'products_list';

  public function getProducts() {

        $sql = "SELECT * FROM {$this->table}";

        $result = $this->db->query($sql);

        if ($result  === false) {
            $this->db->error();
        }

        $collection = array();

        while ($row = $this->db->translate($result)) {

            $entity = new $this->entity;
            $entityRow = $entity->init($row);

            $collection[] = $entityRow;
        }

        return $collection;
    }

  public function getProductPriceName($product_code) {

      $sql = " SELECT product_price , product_name FROM {$this->table}  WHERE product_code = '{$product_code}' ";

      $result = $this->db->query($sql);

      if ($result  === false) {
          $this->db->error();
      }

      $collection = array();

      while ($row = $this->db->translate($result)) {
          $entity = new $this->entity;
          $entityRow = $entity->init($row);

          $collection[] = $entityRow;
      }

      return $collection;
  }
}