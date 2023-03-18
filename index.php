<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$myDb = 'hossien';

try {
    $connection = new PDO("mysql:host=$serverName;dbname=$myDb;", $userName, $password);
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Add Product</title>
    </head>
    <body>
        <h1>Hello world!</h1>
    </body>
</html>
<?php
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
      
$connection = null;

?>