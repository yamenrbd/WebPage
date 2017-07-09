<?php 
require 'Connection.php';

class dbFunctionClass{
    
    private $link;
    function __construct() {
        //when using database create connection with database
        $connection= new Connection;
        $this->link = $connection->conect();
    }
    
    

 function logIn($table,$userName,$password){
        // check login information if it correct return true if not return false
        $sql= "SELECT * FROM `$table` WHERE `user_name`='$userName' AND `password`='$password';";
        $result = $this->link->query($sql);
        $isIn= $result->num_rows;
        if($isIn>=1){
            
            return $result->fetch_assoc(); 
            
        }
        else {
           
            return false;
            
        }
    }
    
    
    function numRow($table){
        $sql= "SELECT * FROM `$table`;";
        $result = $this->link->query($sql);
        $numRows= $result->num_rows;
        return $numRows;
        
    }
    
    function customerTable(){
        $sql= "SELECT * FROM `customer`;";
        $customer = $this->link->query($sql);
        return $customer;
    }
    

    



}