<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
        <label for="primer num1">num1:</label>
        <input type="number"  id="primer num2" name="num1" required>
        <label for="primer num2">num2:</label>
        <input type="num2"  name="num2" >
        <input type="submit" value="Calcular">
    </form>
    
</body>
</html>

<?php

$num1 =$_POST['num1'];
$num2 =$_POST['num2'];

// Comparar los números
if ($num1 > $num2) {
    echo "$num1 es mayor que $num2";
} elseif ($num1 < $num2) {
    echo "$num2 es mayor que $num1";
} else {
    echo "$num1 y $num2 son iguales";
}
?>
