<!DOCTYPE html>
<html lang="en">
    
<head>
<title>Summary</title>
</head>

<body>

<div >
<p><?php echo $_POST['name'] ?>, you placed an order with <?= $_POST['credit_card'] ?> for a total of <b>$<?= $_POST['quantity']*$_POST['unit_price'] ?> </b> </p>
<p>Your order for <?= $_POST['product'] ?> will be shipped to </p>
<p><?= $_POST['shipping_address'] ?></p>
</div>
</body>
</html>
