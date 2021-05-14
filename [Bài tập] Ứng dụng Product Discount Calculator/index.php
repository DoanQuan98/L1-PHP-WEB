<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
</head>
<body>
<form action="display_discount.php" method="post">
    <table>
        <tr>
            <th>
                Product Description:
            </th>
            <th>
                <input type="text" name="product-description" placeholder="Product description">
            </th>
        </tr>
        <tr>
            <th>
                List Price:
            </th>
            <th>
                <input type="number" name="list-price" placeholder="List price">
            </th>
        </tr>
        <tr>
            <th>
                Discount Percent:
            </th>
            <th>
                <input type="number" name="discount-percent" placeholder="Discount percent">
            </th>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <button type="submit">Calculate Discount</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
