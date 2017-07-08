<?php
class Connection{
    private $host ="localhost";
    private $user="root";
    private $password="";
    private $database="webPageDB";
    
  function conect() {
            $link = new mysqli($this->host, $this->user, $this->password);
            $link->select_db($this->database);
            $link->set_charset('utf8');
            return $link;
        }
}