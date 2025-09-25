<?php include 'db.php'; ?>
<?php
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


    $conn->query("INSERT INTO form (name, password, email, phone, dtc, amount,  as1, as2, as3, as4, as5, as6, as7, as8, as9, as10, as11, as12) values('$name', '$password','$email','$phone','$dtc','$amount','$as1','$as2','$as3','$as4','$as5','$as6','$as7','$as8','$as9','$as10','$as11','$as12')");
   header("Location: display_view.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add daitels</title>
    <link rel="stylesheet" href="mst.css">
</head>
<body>
    <center><h1>MST Details</h1></center>
</body>
</html>

<form method="POST" enctype="multipart/form-data" action="">
    <label>Name:</label><input type="text" name="name" placeholder="Enter Your Name"><br>
    <label>Password:</label><input type="text" name="password" placeholder="Enter Your Password"><br>
    <label>Email:</label><input type="text" name="email" placeholder="Enter Your Email"><br>
    <label>Phone:</label><input type="text" name="phone" placeholder="Enter Your Phone"><br>
    <label>Date:</label><input type="text" name="dtc" placeholder="Enter Your Joinning Date"><br>
    <label>Amount:</label><input type="text" name="amount" placeholder="Enter Paid Amount"><br>
    <label>SRP:</label>
    <div class="asd">
            <div class="abc">1.<input type="text" name="as1"></div>
            <div class="abc">2.<input type="text" name="as2"></div>
            <div class="abc">3.<input type="text" name="as3"></div>
            <div class="abc">4.<input type="text" name="as4"></div>
    </div>
    <div class="asd">
            <div class="abc">5.<input type="text" name="as5"></div>
            <div class="abc">6.<input type="text" name="as6"></div>
            <div class="abc">7.<input type="text" name="as7"></div>
            <div class="abc">8.<input type="text" name="as8"></div>
    </div>
    <div class="asd">
            <div class="abc">9.<input type="text" name="as9"></div>
            <div class="abc">10.<input type="text" name="as10"></div>
            <div class="abc">11.<input type="text" name="as11"></div>
            <div class="abc">12.<input type="text" name="as12"></div>
    </div>
    <center><button type="submit"><b>Uplode</button></center>
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
</style>