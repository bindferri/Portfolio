<?php


class Session extends ParentClass{

    //Declaring Variables
    protected static $db;
    public $user_id;
    private $signed_in = false;

    //Class constructor
    public function __construct(){
        self::$db = new Database();
        session_start();
        $this->checkLogIn();
    }

    //Check if is singed in
    public function checkSignIn(){
        return $this->signed_in;
    }

    //Getting user id and making singed_in variable true
    public function login($user){
        if ($user){
            $this->user_id = $_SESSION['id'];
            $this->signed_in = true;
        }
    }

    //Destroying session
    public function logout(){
        unset($_SESSION['id']);
        unset($this->user_id);
        session_destroy();
        $this->signed_in = false;
    }


    public function checkLogIn(){
        if (isset($_SESSION['id'])){
            $this->user_id = $_SESSION['id'];
            $this->signed_in = true;
        }else{
            unset($this->user_id);
            $this->signed_in = false;
        }
    }


}