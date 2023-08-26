<!-- Waleed Khan (August 12, 2023) -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Inventory</title>
        <style>					
            table {
                border-collapse: collapse;
                width: 40%;
                margin: auto;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            th {
                background-color: #00008B;
                color: white;
            }
			
            h2 {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <center>
        <h1>Waleed's Electronics Shop Phone Inventory</h1>
        
        <a href="index.php">Homepage</a> |
        <a href="insert.php">Add Item</a> | 
        <a href="view.php">View Inventory</a>
        <br>
        <h2>Current Phone Inventory</h2>
        <!-- searchbox form for the user to search for items in the database -->
        <form method="GET" action="view.php">
            <label for="search">Search Item Name:</label>
            <input type="text" id="search" name="search">
            <input type="submit" value="Search">
        </form>
        <br>
            <table id="products">
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                </tr>
            <?php
            //credentials to establish a connection with the database
            $host = 'localhost';
            $username = 'waleed_admin'; //INTENTIONALLY INVALID
            $password = 'wkpassword'; //INTENTIONALLY INVALID
            $dbname = 'waleed_Database'; //INTENTIONALLY INVALID

            //setting the connection command
            $conn = mysqli_connect($host, $username, $password, $dbname);

            //if connection wasn't established
            if (empty($conn)) {
                die('Connection Failed: ' . mysqli_connect_error());
            }

            //handling the search query
            if (isset($_GET['search'])) {
                $search = mysqli_real_escape_string($conn, $_GET['search']);
                $query = "SELECT * FROM tblPhones WHERE productName LIKE '%$search%'";
            } else {
                $query = "SELECT * FROM tblPhones";
            }

            //executing the query
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                //to print the productID of each row
                $i = 1;
                //looping through all rows of the fetched data
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>" . $row['productName'] . "</td>";
                    echo "<td>" . $row['productPrice'] . "</td>";
                    echo "</tr>";
                    $i++;
                }
            } else {
                echo "<tr><td colspan='3'>Sorry! No records available.</td></tr>";
            }
            ?>
        </table>
        </center>
    </body>
</html>
