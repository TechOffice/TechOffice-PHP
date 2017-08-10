<?php
  class PdoUtil{
    private static $instance = null;
    static function getInstance(){
      if (self::$instance == null){
        self::$instance = new PDO("mysql:host=localhost;port=3306;dbname=world", "root", "password");
      }
      return self::$instance;
    }
  }
?>
