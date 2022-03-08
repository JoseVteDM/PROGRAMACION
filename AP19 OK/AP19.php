<?php

require_once "autoload.php";

$cartera = new Cartera("data.csv");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <table class = "redTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Company</th>
                <th>Investment</th>
                <th>Date</th>
                <th>Active</th>
                <th colspan="2">Actions</th>
            </tr>   
        <thead>
        <tfoot>
        <tbody>
            <?= $Cartera->drawList() ?>
        </tbody>
    </table>


</body>
</html>