<?php


//Create connection with database & initialize methods to perform operations over database data
class DB
{

 private static $instance = null;
 private $connection = null;

 const DB_HOST = 'localhost';
 const DB_USERNAME = 'root';
 const DB_PASSWORD = '';
 const DB_DATABASE = 'products_list';

 //Create constructor to connect to the database
 private function __construct() {

   $connection = mysqli_connect(self::DB_HOST,self::DB_USERNAME,self::DB_PASSWORD,self::DB_DATABASE);

   $this->connection = $connection;
 }

 //Create one instance of DB class for the entire app using Singleton pattern
 public static function getInstance() {

    if(self::$instance === null) {
        self::$instance = new DB();
    }
    return self::$instance;
 }

 //Execute sql query
 public function query($sql) {

    return mysqli_query($this->connection,$sql);
 }

 //Return result row as an object
 public function translate($result) {

     return mysqli_fetch_assoc($result);
 }

 //Return the last id
 public function lastId() {

     mysqli_insert_id($this->connection);
 }

 //Throw an error
 public function error() {

     die(mysqli_error($this->connection));
 }

}