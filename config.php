
<?php
// database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phptuts";

    // creating a connection
    $connection = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$connection)
    {
        die("Connection failed!" . mysqli_connect_error());

    }
?>