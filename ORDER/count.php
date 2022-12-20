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

$card_number = $_POST['card_number'];

$sql = "select * from orders where card_number like '$card_number'";

$result = $conn->query($sql);

$count = mysqli_num_rows($result);
$count = $count + 1;

$card_name = $_POST['card_name'];
$month = $_POST['month'];
$coffee = $_POST['coffee'];
$address = $_POST['address'];
$year = $_POST['year'];
$cvv = $_POST['cvv'];
$date = date("d-m-Y");
$time = date("H:i:s");
$status = "in process";

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

$sql1 = "INSERT INTO `orders` (`card_name`, `card_number`, `month`, `address`, `coffee`, `price`, `year`, `cvv`, `date`, `time`, `status`) 
VALUES ('$card_name', '$card_number', '$month', '$address', '$coffee', '$price', '$year', '$cvv', '$date', '$time', '$status')";
$conn->query($sql1);
// echo "User is registered succesfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script>
        const sub2 = document.getElementById("submitting");
        sub2.onclick = function() {
    swal({
        title: "YOU LOGGED", icon: "success", button: "OK"
    });
};
    </script>
</head>
<body>
<div class="container">
    <div class="like_form">
    <div class="row">
        <div class="like_col">
            <h3 class="title">Submited successfully!</h3>
            <span>Your order is taken</span><br>
            <span>Number of your orders is: <?php echo $count ?> </span><br>
            <?php
            if ($count > 1) {
                $sql2 = "select * from orders where card_number like '$card_number' and status like 'in process'";
                $result2 = $conn->query($sql2);
                $count2 = mysqli_num_rows($result2);
                if ($count > $count2){?>
                    <span>Where <?php echo $count2 ?> of them in process</span><br><?php
                } else {?>
                    <span>All orders are in process</span><br><?php
                }
            } else {?>
                <span>Congratulations, it is your first order!</span><br><?php
            }
            $sql3 = "select * from orders where card_number like '$card_number' and coffee like 'Espresso'";
            $result3 = $conn->query($sql3);
            $count3 = mysqli_num_rows($result3);
            if ($count3 > 0) {?>
                <span>Espresso: <?php echo $count3 ?></span><br><?php                
            }
            $sql4 = "select * from orders where card_number like '$card_number' and coffee like 'Cappuccino'";
            $result4 = $conn->query($sql4);
            $count4 = mysqli_num_rows($result4);
            if ($count4 > 0) {?>
                <span>Cappuccino: <?php echo $count4 ?></span><br><?php                
            }
            $sql5 = "select * from orders where card_number like '$card_number' and coffee like 'Latte'";
            $result5 = $conn->query($sql5);
            $count5 = mysqli_num_rows($result5);
            if ($count5 > 0) {?>
                <span>Latte: <?php echo $count5 ?></span><br><?php                
            }
            $sql6 = "select * from orders where card_number like '$card_number' and coffee like 'Coretto'";
            $result6 = $conn->query($sql6);
            $count6 = mysqli_num_rows($result6);
            if ($count6 > 0) {?>
                <span>Coretto: <?php echo $count6 ?></span><br><?php                
            }
            $sql7 = "select * from orders where card_number like '$card_number' and coffee like 'Mocha'";
            $result7 = $conn->query($sql7);
            $count7 = mysqli_num_rows($result7);
            if ($count7 > 0) {?>
                <span>Mocha: <?php echo $count7 ?></span><br><?php                
            }
            ?>
            <a href="/HOME_PAGE/home_page.html"><button>OK, return to the main page</button></a>
        </div>
    </div>
    </div>
</div>    
</body>
</html>