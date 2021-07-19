<?php
$user = "root";
$pass = "";
$server = "localhost";
$db = "digitalmarketing";

$conn = mysqli_connect($server, $user, $pass, $db);

if($conn){
    ?>
    <script>
        alert("Connection Successful");
    </script>
    <?php
}
else{
    echo "Connection Not Successful";
    die("no connection" . mysqli_connect_error());
}
?>
