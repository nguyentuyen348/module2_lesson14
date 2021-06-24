<?php
include 'User.php';

class Validate
{
    public static function checkEmpty($user)
    {
        if (empty($user->$username)||empty($user->$email)||empty($user->$password)){
           session_start();
           $_SESSION['user']='plz enter username, email, password';
            return ;
        }
        elseif (!$user->$password=$importPassword){
            echo 'Please enter password!';
            return ;
        }
        else
            $user= new  User($username,$email,$password);
    }

    public static function checkUsername($username)
    {
        $pattern = "/^[A-Za-z]{6,}$/";
        if (!preg_match($pattern, $username)) {
            session_start();
            $_SESSION['username'] = "Username sai roi";

        }
    }

    public static function checkEmail($email)
    {
        $pattern1 = "/^[a-z]$/";
        if (!preg_match($pattern1, $email)) {
            session_start();
            $_SESSION['email'] = "Email sai roi";
        }
    }

    public static function checkPassword($password)
    {
        $pattern2 = "/^[A-Z]$/";
        if (!preg_match($pattern2, $password)) {
            session_start();
            $_SESSION['password'] = "Password sai roi";
        }

    }
}