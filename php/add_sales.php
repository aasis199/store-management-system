<?php
include 'db.php';


// create fields for auto date, id, item, qty, price, payment_method



$item = $_POST['item'];
$qty = $_POST['qty'];
$price = $_POST['payment'];

$sql ="INSERT INTO chat(item, qty, price) VALUES('$item', '$qty', $price')";
$result = mysqli_query($conn, $sql);

 if($result){
    header('Location:index.html');
}

?>