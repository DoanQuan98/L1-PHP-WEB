<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>
</head>
<style>
    fieldset {
        width: 400px;
        height: 150px;
    }
</style>
<body>
<form method="post">
    <fieldset>
        <table>
            <legend>
                Calculator:
            </legend>
            <tr>
                <td>
                    First operand:
                </td>
                <td>
                    <input type="number" name="num1" placeholder="Enter number">
                </td>
            </tr>
            <tr>
                <td>
                    Operator:
                </td>
                <td>
                    <select name="operator">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">x</option>
                        <option value="/">:</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Second operand:
                </td>
                <td>
                    <input type="number" name="num2" placeholder="Enter number">
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <button>Calculate</button>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
<?php
function calculate($num1, $operator, $num2)
{
    switch ($operator) {
        case "+" :
            return $num1 + $num2;
        case "-" :
            return $num1 - $num2;
        case "*" :
            return $num1 * $num2;
        case "/" :
            return $num1 / $num2;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $operator = $_POST['operator'];
    $num2 = $_POST['num2'];

    $result = calculate($num1, $operator, $num2);
    echo "Result: " . $result;
}
