<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$product = $conn->query("SELECT * FROM form WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = $_POST['name'];
    $password = $_POST['password'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $aadhar   = $_POST['aadhar'];
    $pan      = $_POST['pan'];
    $wallet   = $_POST['wallet'];
    $dtc      = $_POST['dtc'];
    $massage  = $_POST['massage'];
    $amount   = $_POST['amount'];

    $as1   = $_POST['as1'];
    $as2   = $_POST['as2'];
    $as3   = $_POST['as3'];
    $as4   = $_POST['as4'];
    $as5   = $_POST['as5'];
    $as6   = $_POST['as6'];
    $as7   = $_POST['as7'];
    $as8   = $_POST['as8'];
    $as9   = $_POST['as9'];
    $as10   = $_POST['as10'];
    $as11   = $_POST['as11'];
    $as12   = $_POST['as12'];



    $conn->query("UPDATE form SET name='$name', password='$password', email='$email', phone='$phone', dtc='$dtc', amount='$amount', as1='$as1', as2='$as2', as3='$as3', as4='$as4', as5='$as5', as6='$as6', as7='$as7', as8='$as8', as9='$as9', as10='$as10', as11='$as11', as12='$as12' WHERE id=$id");
      {
        $conn->query("UPDATE form SET name='$name', password='$password', email='$email', phone='$phone', dtc='$dtc', amount='$amount', as1='$as1', as2='$as2', as3='$as3', as4='$as4', as5='$as5', as6='$as6', as7='$as7', as8='$as8', as9='$as9', as10='$as10', as11='$as11', as12='$as12'  WHERE id=$id");
    }
    header("Location: display_view.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Jewellery Store</title>
    <link rel="stylesheet" href="mst.css">
</head>
<body>
    <h1>Edit Details <span><?= $product['name'] ?></span></h1>
</body>
</html>
<form method="POST" enctype="multipart/form-data">
    <label>Name:</label><input type="text" name="name" value="<?= $product['name'] ?>"><br>
    <label>Password:</label><input type="text" name="password" value="<?= $product['password'] ?>"><br>
    <label>Email:</label><input type="text" name="email" value="<?= $product['email'] ?>"><br>
    <label>Phone:</label><input type="text" name="phone" value="<?= $product['phone'] ?>"><br>
    <label>Date:</label><input type="text" name="dtc" value="<?= $product['dtc'] ?>"><br>
    <label>Amount:</label><input type="text" name="amount" value="<?= $product['amount'] ?>"><br>

    <label>SRP:</label>
    <div class="asd">
        <div class="abc">1.<input type="text" name="as1" value="<?= $product['as1'] ?>"></div>
        <div class="abc">2.<input type="text" name="as2" value="<?= $product['as2'] ?>"></div>
        <div class="abc">3.<input type="text" name="as3" value="<?= $product['as3'] ?>"></div>
        <div class="abc">4.<input type="text" name="as4" value="<?= $product['as4'] ?>"></div>
    </div>

    <div class="asd">
        <div class="abc">5.<input type="text" name="as5" value="<?= $product['as5'] ?>"></div>
        <div class="abc">6.<input type="text" name="as6" value="<?= $product['as6'] ?>"></div>
        <div class="abc">7.<input type="text" name="as7" value="<?= $product['as7'] ?>"></div>
        <div class="abc">8.<input type="text" name="as8" value="<?= $product['as8'] ?>"></div>
    </div>

    <div class="asd">
        <div class="abc">9.<input type="text" name="as9" value="<?= $product['as9'] ?>"></div>
        <div class="abc">10.<input type="text" name="as10" value="<?= $product['as10'] ?>"></div>
        <div class="abc">11.<input type="text" name="as11" value="<?= $product['as11'] ?>"></div>
        <div class="abc">12.<input type="text" name="as12" value="<?= $product['as12'] ?>"></div>
    </div>
    <center><button type="submit">SAVE</button></center>
</form>
<style>
    .asd{
        display: flex;
        margin-left: -17px;
    }
    .abc
    {
        width: 110px;
        display: flex;
        margin-left: 10px;
    }
    span{
        color: green;
    }
</style>