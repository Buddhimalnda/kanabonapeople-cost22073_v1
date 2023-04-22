<?php 
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

?>