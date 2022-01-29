<?php


class User extends ParentClass{

    //Declaring variables
    protected static $db;
    protected static $db_tableName = "user";
    protected static $db_tableFields = ['user_username','user_name','user_surname','user_password','user_email','user_created'];

    //Class constructor
    public function __construct(){
        static::$db = new Database();
    }

    //Creating new user method
    public function createUser($param,$param2,$param3,$param4,$param5){
        $createUser = self::$db->query("INSERT INTO user (user_username,user_name,user_surname,user_password,user_email,user_created) VALUES 
                            ('$param','$param2','$param3','$param4','$param5',now())");
    }

    //Updating existing user method
    public function updateUser($param,$param2,$param3,$param4,$param5,$id){
        $updateUser = self::$db->query("UPDATE user SET user_username = '$param',user_name = '$param2',user_surname = '$param3',user_password = '$param4'
                                        ,user_email = '$param5' WHERE user_id = $id");
    }

    public function usernameExists($username){
        $allUsers = self::$db->query("SELECT * FROM user WHERE user_username = '$username'");
        return mysqli_num_rows($allUsers) > 0;
    }

    public function emailExists($email){
        $allUsers = self::$db->query("SELECT * FROM user WHERE user_email = '$email'");
        return mysqli_num_rows($allUsers) > 0;
    }

    public function verifyLogIn($username,$password){
       $verifyLogIn = self::$db->query("SELECT * FROM user WHERE user_username = '$username' AND user_password = '$password'");
       return mysqli_num_rows($verifyLogIn) > 0;
    }

}