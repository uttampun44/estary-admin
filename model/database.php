<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', "root");
define('DB_PASSWORD', '');
define('DB_DATABASE', 'estary_real_state');

class Database{


    public function connection()
      {


        $mysqli  = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        if($mysqli->connect_error){

            echo "Connection Error";
        }
    }

     public function Agentinsertdata(){

     }

}

$connection = new Database();
$connection->connection();

