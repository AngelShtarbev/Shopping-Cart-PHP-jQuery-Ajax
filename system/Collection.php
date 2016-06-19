<?php

abstract class Collection
{

 protected $entity = 'entity';
 protected $table  = 'table';
 protected $db = null;

 public function __construct() {

     $this->db = DB::getInstance();
 }

}