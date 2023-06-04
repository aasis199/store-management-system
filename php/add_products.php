<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

  $name= $_POST['image'];
  $phone = $_POST['name'];
  $email = $_POST['category'];
  $address = $_POST['price'];
  $d_joined = $_POST['discount_price'];
  $salary = $_POST['stock'];
  $department = $_POST['is_active'];
	
				$sql = "INSERT INTO inventory (image, name,category, price, discount_price, stock, is_active) 
				VALUES ('$image', '$name' , '$category', '$price', '$discount_price', '$stock', '$is_active')";
				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding employee";
				}

				// /else	
		
	} // if in_array 		

	$connect->close();
