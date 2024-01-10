<?php

class Database{

  private $server = "localhost";
  private $username = "root";
  private $password = "";
  private $databse = "estary_real_state";

  private $connection;

    public function connection()
      {


        $this->connection  = new mysqli($this->server, $this->username, $this->password, $this->databse);

        if(mysqli_error($this->connection)):

            echo "Connection Error";

        endif;
    }

}


