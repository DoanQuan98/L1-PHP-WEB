<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <th>
                Inventment Amount:
            </th>
            <th>
                <input type="text" name="investment-amount" placeholder="Investment amount">
            </th>
        </tr>
        <tr>
            <th>
                Yearly Interest Rate:
            </th>
            <th>
                <input type="text" name="yearly-interest-rate" placeholder="Yearly interest rate">
            </th>
        </tr>
        <tr>
            <th>
                Number of Years:
            </th>
            <th>
                <input type="text" name="number-of-years" placeholder="Number of years">
            </th>
        </tr>
        <tr>
            <th></th>
            <th>
                <button type="submit">Calculate</button>
            </th>
        </tr>
    </table>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $investmentAmount = $_POST['investment-amount'];
    $yearlyInterestRate = $_POST['yearly-interest-rate'];
    $numberOfYears = $_POST['number-of-years'];
    for ($i = 0; $i < $numberOfYears; $i++) {
        $result = $investmentAmount + ($investmentAmount * $yearlyInterestRate / 100);
        $investmentAmount = $result;
    }
    echo $result;
}