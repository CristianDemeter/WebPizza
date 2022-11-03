
<?php

$name = $_GET['name'];
$id = $_GET['id'];
$email = $_GET['email'];
$hashpassword = $_GET['hashpassword'];

$name = array("Michele", "Antonio", "Cristian", "Ciro");
$id = array("a01", "b02", "c03", "d04");

//a01 b02 c03 d04

echo $_GET['name'] . $_GET['email'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restful</title>
</head>
<body>
        <?php
        echo $name[0] . $id[3]
        ?>
</body>
</html>