<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

  $name= $_POST['name'];
  $price = $_POST['price'];
  $discount_price = $_POST['discount_price'];
  $stock = $_POST['stock'];
  $is_active = $_POST['is_active'];
	
				$sql = "INSERT INTO inventory (name, price, discount_price, stock, is_active) 
				VALUES ('$name' , '$price', '$discount_price', '$stock', '$is_active')";
				$result = mysqli_query($conn, $sql);

				if($result){
				   header('Location:index.html');
				// if($connect->query($sql) === TRUE) {
				// 	$valid['success'] = true;
				// 	$valid['messages'] = "Successfully Added";	
				// 	header("Location: https://localhost/new-erp/products.html");
				// } else {
				// 	$valid['success'] = false;
				// 	$valid['messages'] = "Error while adding employee";
				// }

				// /else	
		
		} // if in_array 		

	$connect->close();
}
