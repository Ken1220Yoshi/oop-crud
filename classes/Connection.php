<?php

        class Connection{
            private $servername = "localhost";
            private $username = "root";
            private $password = "root";
            private $database_name = "library";
            public $conn;
        

            public function __construct(){
                $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database_name);

                if($this->conn->connect_error){
                    return die('Could not connect to database: '. $this->conn->error);
                }
            }
        }



?>