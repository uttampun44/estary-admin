<?php
require_once('database.php');

$database = new Database();
$database->connection();

class Adminform{

    private $database;


    public function __construct($db)
    {
       $this->database = $db->connection;
    }

    public function singupForm($firstname, $lastname, $hashed_password, $confirm_password, $email, $nubmer, $agent_category, $address){

        $check_user = "SELECT *FROM `estary_agent` WHERE first_name = ?";
        $stmt_check_user = $this->database->prepare($check_user);
        $stmt_check_user->bind_param('s', $firstname);
        $stmt_check_user->execute();
        $stmt_check_user->store_result();

        if(mysqli_num_rows($stmt_check_user) > 0){
          echo "<div class='px-2 py-2'> <p class='fs-5'> Already Exists </p> </div>";
        }else{
            $insert_query = "INSERT INTO `estary_agent`(`first_name`, `last_name`, `password`, `confirm_password`, `email`, `phone_number`, `agent_category`, `address`)VALUES(?,?,?,?,?,?,?,?)";
            $stmt_insert_user = $this->database->prepare($insert_query);
            $stmt_insert_user->bind_param('ssssssss', $firstname, $lastname, $hashed_password, $confirm_password, $email, $nubmer, $agent_category, $address);

            if($stmt_insert_user->execute()):
                  echo "<div class='px-2 py-3'> <p class= 'text-success'>Register Sucessfully</p> </div>";
            endif;
        }
    }

}
