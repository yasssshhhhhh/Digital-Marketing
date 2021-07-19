<?php
    $server = 'localhost';
    $username = "root";
    $pass = "";
    $db_name = 'digitalmarketing';
    $conn = mysqli_connect($server,$username,$pass,$db_name);
    if($conn){
        echo "Connection Successful";
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
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['phone'];
        $website = $_POST['website'];

        $insertQuery = " insert into customer_details(Name,Email,MobileNumber,Website,Status) VALUES ('$name','$email','$mobile','$website','Pending') ";
    
        $res = mysqli_query($conn,$insertQuery);
        if($res){
            ?>
            <script>
                alert("Data Inserted");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Data not Inserted");
            </script>
            <?php
        }
    }

    header('location: index.html');
?>