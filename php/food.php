<?php 
    //mysql add food function
    public function addFood($name, $price, $description, $image, $metadata)
    {
        $sql = "INSERT INTO food (name, price, description, image, metadata) VALUES ('$name', '$price', '$description', '$image', '$metadata')";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            return true;
        }
        else {
            return false;
        }
    }
    //mysql get food function
    public function getFood($name)
    {
        $sql = "SELECT * FROM food WHERE name = '$name'";
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
    //mysql search food function
    public function searchFood($name)
    {
        $sql = "SELECT * FROM food WHERE name = '$name'";
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
    //mysql delete food function
    public function deleteFood($name)
    {
        $sql = "DELETE FROM food WHERE name = '$name'";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            return true;
        }
        else {
            return false;
        }
    }
    //mysql update food function
    public function updateFood($name, $price, $description, $image, $metadata)
    {
        $sql = "UPDATE food SET name = '$name', price = '$price', description = '$description', image = '$image', metadata = '$metadata' WHERE name = '$name'";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            return true;
        }
        else {
            return false;
        }
    }
    //mysql get all food function
    public function getAllFood()
    {
        $sql = "SELECT * FROM food";
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
?>