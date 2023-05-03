<?php
//food classification class $name, $price, $description, $image, $metadata
class Food
{
    //properties
    private $id;
    private $name;
    private $price;
    private $description;
    private $image;
    private $metadata;
    private $db;
    //constructor
    public function __construct($db, $foodId)
    {
        $this->db = $db;
        if ($foodId) {
            $this->getFood($foodId);
        }
    }
    //methods
    //getters
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getMetadata()
    {
        return $this->metadata;
    }
    //setters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setName($name)
    {
        $this->name = filter_var($name, FILTER_SANITIZE_STRING);
    }
    public function setPrice($price)
    {
        $this->price = filter_var($price, FILTER_SANITIZE_STRING);
    }
    public function setDescription($description)
    {
        $this->description = filter_var($description, FILTER_SANITIZE_STRING);
    }
    public function setImage($image)
    {
        $this->image = filter_var($image, FILTER_SANITIZE_STRING);
    }
    public function setMetadata($metadata)
    {
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

    //method 
    //mysql add food function
    public function addFood($name, $price, $description, $image, $metadata)
    {
        $sql = "INSERT INTO food (name, price, description, image, metadata) VALUES ('$name', '$price', '$description', '$image', '$metadata')";
        $result = mysqli_query($this->db, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function addFoodWithThis()
    {
        $name = $this->getName();
        $price = $this->getPrice();
        $description = $this->getDescription();
        $image = $this->getImage();
        $metadata = $this->getMetadata();
        
        $sql = "INSERT INTO food (name, price, description, image, metadata) VALUES ('$name', '$price', '$description', '$image', '$metadata')";
        $result = mysqli_query($this->db, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function setFood($name, $price, $description, $image, $metadata)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setDescription($description);
        $this->setImage($image);
        $this->setMetadata($metadata);
    }
    //mysql get food function
    public function getFood($id)
    {
        $sql = "SELECT * FROM food WHERE id = '$id'";
        $result = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_assoc($result);
        // $data = $row[0];
        if ($row > 0) {
            $id = $row["id"];

            echo "<script>console.log('$id');</script>";

            $this->setId($row["id"]);
            $this->setName($row["name"]);
            $this->setPrice($row["price"]);
            $this->setDescription($row["description"]);
            $this->setImage($row["image"]);
            $this->setMetadata($row["metadata"]);
            return $row;
        } else {
            return null;
        }
    }
    //mysql search food function
    public function searchFood($name)
    {
        $sql = "SELECT * FROM food WHERE name = '$name'";
        $result = mysqli_query($this->db, $sql);
        $row = mysqli_fetch_array($result);
        $data = $row[0];
        if ($data > 1) {
            return true;
        } else {
            return false;
        }
    }
    //mysql delete food function
    public function deleteFood($name)
    {
        $sql = "DELETE FROM food WHERE name = '$name'";
        $result = mysqli_query($this->db, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //mysql update food function
    public function updateFood($name, $price, $description, $image, $metadata)
    {
        $sql = "UPDATE food SET name = '$name', price = '$price', description = '$description', image = '$image', metadata = '$metadata' WHERE name = '$name'";
        $result = mysqli_query($this->db, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //mysql get all food function
    public function getAllFood()
    {
        $foods = array();
        $sql = "SELECT * FROM food";
        $result = mysqli_query($this->db, $sql);
        // $row = mysqli_fetch_array($result);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $i=0;
            while ($row = mysqli_fetch_assoc($result)) {
                $foods[$i++] = new Food($this->db, $row["id"]);
            }
            return $foods;
        } else {
            print("error");
            return $foods;
        }
    }

}
?>