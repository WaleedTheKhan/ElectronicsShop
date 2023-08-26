# ElectronicsShop
Basic website for shop inventory; user interacts with the MySQL database table (connection must already exist) to add phones and view records, including a search feature.
There is a homepage (index.php). The homepageimage.jpg is present here, though the design of this website is overall lacking as far as visual aesthetic goes.
There is a page (insert.php) for the user to enter phone specifics before they push the information for server-side processing; the JavaScript file (script.js) is invoked here for client-side processing before the data is pushed.
The user's submitted data from the insert.php page is processed with insertprocess.php (i.e., server-side processing). If everything goes right, it is added to the MySQL database table as a new entry.
The view.php page shows a table that displays, in a very similar format, the data that is currently stored within the MySQL database table. Users can narrow down the records by searching for records by a common name.
This code is 100% functional and has undergone extensive testing with FileZilla SFTP, and it will not be possible to test given the lack of a database connection (as the original is defunct).
