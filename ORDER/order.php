<div style="justify-content: center; text-align: center; background-color: gray; height: 100%">
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orders";

$conn = new mysqli($servername, $username, $password, $dbname);
$error = $conn->connect_error;

if ($error) {
  die("Connection failed: " . $error);
} else {
    // echo ("Success connection");
}

$card_name = $_POST['card_name'];

$sql = "select * from clients where name like '$card_name'";

$result = $conn->query($sql);

$count = mysqli_num_rows($result);

$card_number = $_POST['card_number'];
$month = $_POST['month'];
$coffee = $_POST['coffee'];
$address = $_POST['address'];
$year = $_POST['year'];
$cvv = $_POST['cvv'];

$price = 0;
switch ($coffee) {
    case 'Espresso':
        $price = 8;
        break;
    case 'Cappuccino':
        $price = 6;
    break;
    case 'Latte':
        $price = 5;
    break;
    case 'Coretto':
        $price = 6;
    break;
    case 'Mocha':
        $price = 7;
    break;
    default:
        $price = 0;
    break;
}

$sql1 = "INSERT INTO `orders` (`card_name`, `card_number`, `month`, `address`, `coffee`, `year`, `cvv`) 
VALUES ('$card_name', '$card_number', '$month', `$address`, '$coffee', '$year', '$cvv')";
$conn->query($sql1);
echo "User is registered succesfully";
?>
<br>
<a href='http://localhost/login.html'>Log In</a>
<?php
?>
</div>