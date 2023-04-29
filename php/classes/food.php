
<?php
//food classification class $name, $price, $description, $image, $metadata
class Food {
    //properties
    private $id;
    private $name;
    private $price;
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
    public function getPrice() {
        return $this->price;
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
    public function setPrice($price) {
        $this->price = filter_var($price, FILTER_SANITIZE_STRING);
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
     //sql code create this user table
     /*
        CREATE TABLE `food` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `price` varchar(255) NOT NULL,
        `description` varchar(255) NOT NULL,
        `image` varchar(255) NOT NULL,
        `metadata` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        
     */

    ?>
