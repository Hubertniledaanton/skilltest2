<?php

class Database{
    
     private $host = "localhost";
     private $username = "root";
     private $password = "";
     private $dbname = "employee";

     public $connection;
    
     // excutes the connection
     public function connect(){
     $this->connection =new mysqli($this->host,$this->username,$this->password,$this->dbname); //creates the connections
       if($this->connection->connect_error){ 
        die("Connect Error". $this->connection->connect_error); //print the error of connection
    }
    return $this->connection; //return the connection
    }

}


?>