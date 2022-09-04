<?php

class Signup extends Dbh{
    protected function setUser($username, $email, $password){
        $sql = 'INSERT INTO writings.users(user_name, user_email, user_password) VALUES (?, ?, ?);';
        $stmt = $this->connect()->prepare($sql);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute([$username, $email, $hashedPassword])){
            $stmt = null;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        }

        $stmt == null;
    }

    protected function checkUser($username, $email){
        $sql = 'SELECT user_name FROM writings.users WHERE user_name = ? OR user_email = ?;';
        $stmt = $this->connect()->prepare($sql);
        
        if(!$stmt->execute([$username, $email])) {
            $stmt = null;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        }

        $resultCheck = false;
        if($stmt->rowCount() > 0 ){
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}