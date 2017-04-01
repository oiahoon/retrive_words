<?php
  require 'vendor/autoload.php';

  require 'core/db_connect.php';

  $db = new DbConnect();
  $database = $db->connect();

  // $database->insert("account", [
  //   "user_name" => "foo",
  //   "email"     => "foo@bar.com"
  // ]);

  use snoopy\snoopy;
  $snoopy = new Snoopy;
  $snoopy->fetchtext("http://www.php.net/");
  print $snoopy->results;