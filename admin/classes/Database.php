<?php

class Database{

    public $connection;
    private $statement;
    private $escapeString;

    public function __construct(){
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    }

    public function query($query){
        $this->statement = $this->connection->query($query);
        return $this->statement;
    }

    public function fetchSingle(){
        return mysqli_fetch_object($this->statement);
    }

    public function fetchAll(){
        $array = array();
        while ($row = mysqli_fetch_object($this->statement)){
            $array[] = $row;
        }
        return $array;
    }

    public function escapeString($string){
        $this->escapeString = $this->connection->real_escape_string($string);
        return $this->escapeString;
    }


}

