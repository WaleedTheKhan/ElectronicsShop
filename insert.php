<!-- Waleed Khan (August 12, 2023) -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="script.js"></script>
        <title>Add An Item</title>
		<style> 						
            table, td, th
			{    
				border: 1px solid #ddd;
				text-align: left;
			}

			table
			{
				border-collapse: collapse;
				width: 40%;
				margin: auto;
			}

			th, td
			{
				padding: 15px;
			}
			
			h2
			{
				text-align: center;
			}
        </style>
    </head>
    <body>
        <center>
    <h1>Waleed's Electronics Shop Phone Inventory</h1>
        
        <a href="index.php">Home</a> |
		<a href="insert.php">Add Item</a> | 
        <a href="view.php">View Inventory</a>
        
        <br>
		
        <h2>Add Product</h2>
        
        <form action="insertprocess.php" method="post">
            <table>
                <tr>
                    <td>Product Name:</td>
                    <td>
                        <input type="text" name="productName" autofocus>
                    </td>
                </tr>
                <tr>
                    <td>Product Price:</td>
                    <td>
                        <input type="text" name="productPrice">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Add Product">
                    </td>
                </tr>
            </table>
        </form>
        </center>
        <?php
            /* informing the user if insertion into inventory was successful or not
            and checking if the 'result' variable exists in the URL */
			if(isset($_REQUEST['result'])) {
                if($_REQUEST['result'] == 'success') {
                    echo "<p style='color: green;'>Successfully added item!</p>";
                }
                else if($_REQUEST['result'] == 'fail') {
                    echo "<p style='color: red;'>Item could not be added. Try again.</p>";
                }
            }
        ?>
    </body>
</html>