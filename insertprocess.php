<?php
    //Waleed Khan (August 12, 2023)
    //establishing a connection with the database
    $host = 'localhost';
    $username = 'waleed_admin'; //INTENTIONALLY INVALID
    $password = 'wkpassword'; //INTENTIONALLY INVALID
    $dbname = 'waleed_Database'; //INTENTIONALLY INVALID

    //setting the connection command
    $conn = mysqli_connect($host, $username, $password, $dbname);

    //if connection was not established
    if(empty($conn)) {
        die('Connection Failed: ' . mysqli_connect_error());
    }

    //reading the user-entered values from the insert.php form
    $productName = mysqli_real_escape_string($conn, $_POST['productName']);
    $productPrice = mysqli_real_escape_string($conn, $_POST['productPrice']);

    //query variable to insert into the table
    $query = "INSERT INTO tblPhones (productName, productPrice) VALUES ('$productName', '$productPrice')";

    //executing the query
    $result = mysqli_query($conn, $query);

    //checking if the item was added
    if($result > 0) {
        //success: redirecting back to insert.php page with the query string 'result'
        header('location:insert.php?result=success');
    }
    else {
        //failure: redirecting back to insert.php page with the query string 'result'
        header('location:insert.php?result=fail');
    }

    //closing the database connection
    mysqli_close($conn);
?>