<?php

class connection{
    private $host ="localhost";
    private $user="root";
    private $password="";
    private $database="webPageDB";
    
    function conect(){
    $link = new mysqli($host,$user,$password,$database);
    
    if($link->connect_error){
        die("connection failed ".$link->connect_error);
    }
    else{
        echo "connection success";
    return $link;
    }
    }
}
