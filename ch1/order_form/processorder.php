<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="refresh" content="5"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php
        $tireqty = $_POST['tireqty'];
        $oilqty = (string)$_POST['oilqty'];
        $sparkqty = (double)$_POST['sparkqty'];

        echo "Order processed at ".date('H:i jS F Y');
        
        echo '<p>Your order is as follows: </p>';
        echo htmlspecialchars($tireqty). ' tires<br/>';
        echo htmlspecialchars($oilqty). ' bottles of oil<br/>';
        echo htmlspecialchars($sparkqty). ' tires<br/>';

    ?>
</body>
</html>
