<?php
// ----------------------------------------------------------------
// resturant classification class $name, $address, $description, $image, $metadata
class Restaurant {
    //properties
    private $id;
    private $name;
    private $address;
    private $description;
    private $image;
    private $metadata;
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
    public function getName() {
        return $this->name;
    }
    public function getAddress() {
        return $this->address;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getImage() {
        return $this->image;
    }
    public function getMetadata() {
        return $this->metadata;
    }
    //setters
    public function setId($id) {
        $this->id = $id;
    }
    public function setName($name) {
        $this->name = filter_var($name, FILTER_SANITIZE_STRING);
    }
    public function setAddress($address) {
        $this->address = filter_var($address, FILTER_SANITIZE_STRING);
    }
    public function setDescription($description) {
        $this->description = filter_var($description, FILTER_SANITIZE_STRING);
    }
    public function setImage($image) {
        $this->image = filter_var($image, FILTER_SANITIZE_STRING);
    }
    public function setMetadata($metadata) {
        $this->metadata = filter_var($metadata, FILTER_SANITIZE_STRING);
    }
    /*
    //sql code create this table
    CREATE TABLE `restaurant` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `address` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , `image` VARCHAR(255) NOT NULL , `metadata` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
    */

    
    ?>
