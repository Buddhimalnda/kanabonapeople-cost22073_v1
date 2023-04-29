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
    
//mysql add restaurant function
public function addRestaurant($name, $address, $description, $image, $metadata)
{
    $sql = "INSERT INTO restaurant (name, address, description, image, metadata) VALUES ('$name', '$address', '$description', '$image', '$metadata')";
    $result = mysqli_query($this->con, $sql);
    if ($result) {
        return true;
    }
    else {
        return false;
    }
}
//mysql get restaurant function
public function getRestaurant($name)
{
    $sql = "SELECT * FROM restaurant WHERE name = '$name'";
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
//mysql search restaurant function
public function searchRestaurant($name)
{
    $sql = "SELECT * FROM restaurant WHERE name = '$name'";
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
//mysql delete restaurant function
public function deleteRestaurant($name)
{
    $sql = "DELETE FROM restaurant WHERE name = '$name'";
    $result = mysqli_query($this->con, $sql);
    if ($result) {
        return true;
    }
    else {
        return false;
    }
}
//mysql update restaurant function
public function updateRestaurant($name, $address, $description, $image, $metadata)
{
    $sql = "UPDATE restaurant SET name = '$name', address = '$address', description = '$description', image = '$image', metadata = '$metadata' WHERE name = '$name'";
    $result = mysqli_query($this->con, $sql);
    if ($result) {
        return true;
    }
    else {
        return false;
    }
}
//mysql get all restaurant function
public function getAllRestaurant()
{
    $sql = "SELECT * FROM restaurant";
    $result = mysqli_query($this->con, $sql);
    return $result;
}


}
    
    ?>
