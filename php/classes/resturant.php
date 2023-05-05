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
    public function __construct($db,$resturentId) {
        $this->db = $db;
        if ($resturentId) {
            $this->getRestaurant($resturentId);
        }
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
        $this->metadata = $metadata;
    }
    /*
    //sql code create this table
    CREATE TABLE `restaurant` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `address` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , `image` VARCHAR(255) NOT NULL , `metadata` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
    */
    
//mysql add restaurant function
public function addRestaurant($name, $address, $description, $image, $metadata)
{
    $sql = "INSERT INTO restaurant (name, address, description, image, metadata) VALUES ('$name', '$address', '$description', '$image', '$metadata')";
    $result = mysqli_query($this->db, $sql);
    if ($result) {
        return true;
    }
    else {
        return false;
    }
}
public function setRestaurant($name, $address, $description, $image, $metadata)
{
    $this->setName($name);
    $this->setAddress($address);
    $this->setDescription($description);
    $this->setImage($image);
    $this->setMetadata($metadata);
    
}
public function addRestaurantWithThis()
    {
        $name = $this->getName();
        $address = $this->getAddress();
        $description = $this->getDescription();
        $image = $this->getImage();
        $metadata = $this->getMetadata();
        
        $sql = "INSERT INTO restaurant (name, address, description, image, metadata) VALUES ('$name', '$address', '$description', '$image', '$metadata')";
        $result = mysqli_query($this->db, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
//mysql get restaurant function
public function getRestaurant($id)
{
    $sql = "SELECT * FROM restaurant WHERE id = '$id'";
        $result = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_assoc($result);
        // $data = $row[0];
        if ($row > 0) {
            $id = $row["id"];

            echo "<script>console.log('$id');</script>";

            $this->setId($row["id"]);
            $this->setName($row["name"]);
            $this->setAddress($row["address"]);
            $this->setDescription($row["description"]);
            $this->setImage($row["image"]);
            $this->setMetadata($row["metadata"]);
            return $row;
        } else {
            return null;
        }

}
//mysql search restaurant function
public function searchRestaurant($name)
{
    $sql = "SELECT * FROM restaurant WHERE name = '$name'";
    $result = mysqli_query($this->db, $sql);
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
    $result = mysqli_query($this->db, $sql);
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
    // $sql = "SELECT * FROM restaurant";
    // $result = mysqli_query($this->con, $sql);
    // return $result;

    $resturents = array();
    $sql = "SELECT * FROM restaurant";
    $result = mysqli_query($this->db, $sql);
    // $row = mysqli_fetch_array($result);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $i=0;
        while ($row = mysqli_fetch_assoc($result)) {
            $resturents[$i++] = new Food($this->db, $row["id"]);
        }
        return $resturents;
    } else {
        print("error");
        return $resturents;
    }
}


}
    
    ?>
