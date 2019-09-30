<?php

use App\Calk;
require '../vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Calculator</title>
    <link rel="stylesheet" href="public/css/style.css">


</head>
<body>
    <div class="calc">
        <form method="post" action="#" autocomplete="off">
            <div class="number">
                <label class="number" for="numberA">Введите первое число:</label>
                <input type="text" name="numberA" id="numberA">
                <label class="number" for="numberB">Введите второе число (при необходимости):</label>
                <input type="text" name="numberB" id="numberB">
            </div>

        <div class="row">
            <label><input class="button-calc" type="submit" name="action" value="*"></label>
            <label><input class="button-calc" type="submit" name="action" value="/"></label>
            <label><input class="button-calc" type="submit" name="action" value="+"></label>
        </div>


        <div class="row">
            <label><input class="button-calc" type="submit" name="action" value="-"></label>
            <label><input class="button-calc" type="submit" name="action" value="log"></label>
            <label><input class="button-calc" type="submit" name="action" value="pow"></label>
        </div>
        <div class="row">
            <label><input class="button-calc" type="submit" name="action" value="&#8730"></label>
            <label><input class="button-calc" type="submit" name="action" value="sin"></label>
            <label><input class="button-calc" type="submit" name="action" value="cos"></label>
        </div>
        <div class="row">
            <label><input class="button-calc" type="submit" name="action" value="hypot"></label>
        </div>

        </form>

        <div class="result">
            <p>Результат:
                <?php
                // print_r($_POST);
                $obj = new Calk ($_POST);
                echo $obj->calculate();   
                ?>

            </p>
        </div>
    </div>

</body>
</html>