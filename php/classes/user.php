
<?php
//user classification class
class User {
    //properties
    private $id;
    private $username;
    private $password;
    private $email;
    private $type;
    private $status;
    private $created_at;
    private $updated_at;
    private $deleted_at;
    private $db;
    //constructor
    public function __construct($db) {
        $this->db = $db;
    }
    //methods
    //getters
    public function getId() {
        return $this->id;
    }
    public function getUsername() {
        return $this->username;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getType() {
        return $this->type;
    }
    public function getStatus() {
        return $this->status;
    }
    public function getCreatedAt() {
        return $this->created_at;
    }
    public function getUpdatedAt() {
        return $this->updated_at;
    }
    public function getDeletedAt() {
        return $this->deleted_at;
    }
    //setters
    public function setId($id) {
        $this->id = $id;
    }
    public function setUsername($username) {
        $this->username = $username;
    }
    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setType($type) {
        $this->type = $type;
    }
    public function setStatus($status) {
        $this->status = $status;
    }
    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }
    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }
    public function setDeletedAt($deleted_at) {
        $this->deleted_at = $deleted_at;
    }
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
    
    /*
    

    */



?>