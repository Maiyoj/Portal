<?php include 'config.php'; ?>
<?php
    session_start();
    if (isset($_POST['submit'])) {
        $month = $_POST['month'];
        $sales = $_POST['sales'];

    }
        $sql = "INSERT INTO sales ( month, sales) VALUES ( '$month', '$sales')";
        $rs = mysqli_query($connection, $sql);

        if($rs)
        {
        
            echo "Entries added Succesfully!";
        }
?>