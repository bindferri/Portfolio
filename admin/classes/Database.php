<?php

class Database{

    //Declaring variables
    public $connection;
    private $statement;
    private $escapeString;

    //Class constructor (Creating connection with database)
    public function __construct(){
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    }

    //Query method
    public function query($query){
        $this->statement = $this->connection->query($query);
        return $this->statement;
    }

    //Fetching single data row method
    public function fetchSingle(){
        return mysqli_fetch_object($this->statement);
    }

    //Fetching all data method
    public function fetchAll(){
        $array = array();
        while ($row = mysqli_fetch_object($this->statement)){
            $array[] = $row;
        }
        return $array;
    }

    //Clearing strings from malicious code
    public function escapeString($string){
        $this->escapeString = $this->connection->real_escape_string($string);
        return $this->escapeString;
    }


}

