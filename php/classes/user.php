<?php
//user classification class
class User
{
    //properties
    private $id;
    private $username;
    private $password;
    private $email;
    private $number;
    private $type;
    private $img;
    private $status;
    private $created_at;
    private $updated_at;
    private $deleted_at;
    private $db;
    //constructor
    public function __construct($db, $username)
    {
        $this->db = $db;
        if ($username) {
            $this->setUser($username);
        }
    }
    //methods
    //getters
    public function getId()
    {
        return $this->id;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getNumber()
    {
        return $this->number;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }
    //setters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function setImg($img)
    {
        $this->img = $img;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }
    public function setDeletedAt($deleted_at)
    {
        $this->deleted_at = $deleted_at;
    }

    /*
    //sql code create this user table
    //CREATE TABLE `user` (
    // `id` int(11) NOT NULL AUTO_INCREMENT,
    // `username` varchar(255) NOT NULL,
    // `password` varchar(255) NOT NULL,
    // `email` varchar(255) NOT NULL,
    // `type` varchar(255) NOT NULL,
    // `status` varchar(255) NOT NULL,
    // `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    // `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    // `deleted_at` timestamp NULL DEFAULT NULL,
    // PRIMARY KEY (`id`)
    //) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
    */

    //methods

    public function login($username, $password)
    {
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_array($result);
        // $data = $row[0];
        if ($row > 1) {
            $this->authSession($username);
            return true;
        } else {
            return false;
        }
    }
    //mysql register function
    public function register($username, $password, $email, $number)
    {
        $sql = "INSERT INTO user (username, password, email, number, type, status) VALUES ('$username', '$password', '$email', '$number', 'user', 'active' )";
        $result = mysqli_query($this->db, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //mysql check username function
    public function checkUsername($username)
    {
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_array($result);
        $data = $row[0];
        if ($data > 1) {
            return true;
        } else {
            return false;
        }
    }
    //mysql check email function
    public function checkEmail($email)
    {
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_array($result);
        $data = $row[0];
        if ($data > 1) {
            return true;
        } else {
            return false;
        }
    }
    //mysql get user function
    public function setUser($username)
    {

        $sql = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_assoc($result);
        // $data = $row[0];
        if ($row > 0) {
            $id = $row["id"];

            echo "<script>console.log('$id');</script>";

            $this->setId($row["id"]);
            $this->setUsername($row["username"]);
            $this->setEmail($row["email"]);
            $this->setNumber($row["number"]);
            $this->setStatus($row["status"]);
            $this->setType($row["type"]);
            $this->setImg($row["image"]);
            return $row;
        } else {
            return null;
        }
    }
    //mysql forgot password function
    //mysql update password function
    public function updatePassword($email, $password)
    {
        $sql = "UPDATE user SET password = '$password' WHERE email = '$email'";
        $result = mysqli_query($this->db, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function forgotPassword($email, $password)
    {
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_array($result);
        $data = $row[0];
        if ($data > 1) {
            updatePassword($email, $password);
            return $row;
        } else {
            return null;
        }
    }

    //auth session 
    public function authSession($username)
    {
        $_SESSION['username'] = $username;
        $_SESSION['login'] = true;
    }
    //logout session
    public function logoutSession()
    {
        session_destroy();
    }
    //check session
    public function checkSession()
    {
        if (isset($_SESSION['login'])) {
            return true;
        } else {
            return false;
        }
    }
}
?>