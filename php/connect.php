<?php 

//mysql conntect function using class
class DB_CONNECT
{
    //constructor
    function __construct()
    {
        $this->connect();
    }
    //destructor
    // function __destruct()
    // {
    //     $this->close();
    // }
    //connect function
    function connect()
    {
        //import database connection variables
        require_once __DIR__ . '/db_config.php';
        //connecting to mysql database
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysqli_error());
        //selecting database
        $db = mysqli_select_db($con, DB_DATABASE) or die(mysqli_error());
        //returning connection cursor
        return $con;
    }
    //close function
    function close()
    {
        //closing database connection
        mysqli_close();
    }
}
   
    
?>