<?php

  /**
  *
  */
  use Medoo\Medoo;
  class DbConnect
  {
    function __construct()
    {
    }

    function connect()
    {
      $database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => 'words',
        'server'        => 'localhost',
        'username'      => 'root',
        'password'      => '',
        'charset'       => 'utf8',
      ]);
      return $database;
    }
  }