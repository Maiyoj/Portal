<?php include 'config.php'; ?>
<?php
    session_start();
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql_u = "SELECT * FROM users WHERE username='$username'";
        $sql_e = "SELECT * FROM users WHERE password='$password'";
        $res_u = mysqli_query($connection, $sql_u);
        $res_e = mysqli_query($connection, $sql_e);
  
        if (mysqli_num_rows($res_u) > 0) {
          //$results = mysqli_query($connection, $query);
          echo 'Loginn!';
          header('Location:Dashboard.html'); 
          exit();
    }
}
    
?>