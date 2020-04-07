<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>App Find Max in 2 Dimensional Array</title>
</head>
<body>
<h2>Matrix</h2>
<form action="" method="post">
    <table border="1">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $firstLength = (int)$_REQUEST["firstLength"];
            $secondLength = (int)$_REQUEST["secondLength"];
            echo '<tr><td>First Array</td>';
            for ($i = 0; $i < $firstLength; $i++) {
                echo '<td><input type="text" name="array1[]"> </td>';
            }
            echo '</tr> <br>';
            echo '<tr><td>Second Array</td>';
            for ($j = 0; $j < $secondLength; $j++) {
                echo '<td><input type="text" name="array2[]"> </td>';
            }
            echo '</tr> <br>';
        }
        ?>
    </table>
    <button type="submit">Merge</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array1 = $_REQUEST["array1"];
    $array2 = $_REQUEST["array2"];

    $newArray = [];
    foreach ($array1 as $value) {
        array_push($newArray, $value);
    }
    foreach ($array2 as $value) {
        array_push($newArray, $value);
    }

    echo "New array is: ";
    foreach ($newArray as $value) {
        echo $value . " ";
    }

}
?>
</body>
</html>


