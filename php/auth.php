<?php
    //mysql login function
    public function login($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($result);
        $data = $row[0];
        if ($data > 1) {
            return $data;
        }
        else {
            return null;
        }
    }
    //mysql register function
    public function register($username, $password)
    {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            return true;
        }
        else {
            return false;
        }
    }
    //mysql check username function
    public function checkUsername($username)
    {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($result);
        $data = $row[0];
        if ($data > 1) {
            return true;
        }
        else {
            return false;
        }
    }
    //mysql check email function
    public function checkEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($result);
        $data = $row[0];
        if ($data > 1) {
            return true;
        }
        else {
            return false;
        }
    }
    //mysql get user function
    public function getUser($username)
    {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($result);
        $data = $row[0];
        if ($data > 1) {
            return $row;
        }
        else {
            return null;
        }
    }
    //mysql forgot password function
    public function forgotPassword($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($result);
        $data = $row[0];
        if ($data > 1) {
            updatePassword($email, $password);
            return $row;
        }
        else {
            return null;
        }
    }
    //mysql update password function
    public function updatePassword($email, $password)
    {
        $sql = "UPDATE users SET password = '$password' WHERE email = '$email'";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            return true;
        }
        else {
            return false;
        }
    }
    
?>