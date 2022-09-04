<?php

class SignupContr extends Signup{
    private $username;
    private $email;
    private $password;
    private $password_confirm;

    public function __construct($username, $email, $password, $password_confirm)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->password_confirm = $password_confirm;
    }

    public function signupUser(){
        if($this->emptyInput() == false){
            // echo 'Empty input!';
            header('Location: ../index.php?error=emptyinput');
            exit();
        }
        if($this->invalidUsername() == false){
            // echo 'Invalid username !';
            header('Location: ../index.php?error=username');
            exit();
        }
        if($this->invalidEmail() == false){
            // echo 'Invalid email!';
            header('Location: ../index.php?error=email');
            exit();
        }
        if($this->passwordMatch() == false){
            // echo 'Password don't Match!';
            header('Location: ../index.php?error=passwordmatch');
            exit();
        }
        if($this->userExist() == false){
            // echo 'Username already exist';
            header('Location: ../index.php?error=userExist');
            exit();
        }

        $this->setUser($this->username, $this->email, $this->password);
    }

    private function emptyInput() {
        $result = false;
        if(empty($this->username || $this->email || $this->password || $this->password_confirm)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUsername() {
        $result = false;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result = false;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function passwordMatch(){
        $result = false;
        if($this->password !== $this->password_confirm){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function userExist(){
        $result = false;
        if(!$this->checkUser($this->username, $this->email)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}