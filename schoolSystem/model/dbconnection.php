<?php 
    //function for set connection with database
    function setConnection(){
        $servername = "localhost";//127.0.0.1
        $username = "root";
        $password = "";
        $dbname = "db_school";//db name
    
        //create connection
        $conn = new mysqli($servername,$username,$password,$dbname);
        //check connection
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //print if it ok
        //echo "Connected successfully";
        return $conn;
    
    }
    //function for execute mysql query
    function runMySqlQuery($mySqlCommand){
        $connection = setConnection();

        try{
            if(mysqli_query($connection,$mySqlCommand)) {
                echo "<script>alert('Done!')</script>";
               
            }
            else
            {
                echo "Error: " . mysqli_error($connection);
            }
        }
        catch(Exception $e)
        {
            echo 'Caught exception : ', $e->getMessage(), "\n";

        }
        finally{
            mysqli_close($connection);
        }
    }

?>