<?php

ini_set('max_execution_time', 6000);

require_once 'passwordHash.php';

$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from member";

if ($res = $conn->query($sql)) {

    while ($row = $res->fetch_assoc()) {
		
		$member_uid = $row['uid'];

		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$name = $first_name." ".$last_name;
		$email = $row['email'];
		$password = passwordHash::decrypt($row['password']);

		// others
		$address1 = $row['address1'];
		$address2 = $row['address2'];
		$city = $row['city'];
		$state = $row['state'];
		$zip = $row['zip'];
		$country = $row['country'];
		$form_of_payment = $row['form_of_payment'];
		$paypal_subscription_id = $row['paypal_subscription_id'];
		$sentry_member_id = $row['sentry_member_id'];
		$expire = $row['expire'];

		$old_id = $row['uid'];


		$status = strtolower($row['status']);
		$role = strtolower($row['role']);


		$pwd = password_hash($password, PASSWORD_BCRYPT);

		$sql = "insert users set 
			name = '$name',
			email='$email',
			password='$pwd',
			verified='1',
			payment_type='0',
			paypal_email='',
			paypal_id='',
			stripe_id='',
			card_brand='',
			card_last_four='',
			status='$status',
			role='$role',
			address1='$address1',
			address2='$address2',
			city='$city',
			state='$state',
			zip='$zip',
			country='$country',
			form_of_payment='$form_of_payment',
			paypal_subscription_id='$paypal_subscription_id',
			sentry_member_id='$sentry_member_id',
			expire='$expire',
			old_id='$old_id'
		";

// 		$sql = "insert into users(name, email, password, verified) values('$name', '$email', '$pwd', '1')";

		if ($conn->query($sql) === TRUE) {

			$new_id = $conn->insert_id;

			$conn->query("update android_login_history set user_id = '$new_id' where user_id ='$member_uid'");
			$conn->query("update android_login_status set user_id = '$new_id' where user_id ='$member_uid'");

			echo $new_id."New record created successfully</br>";
		} else {
			
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

    }
    $result->free();
}



$conn->close();


?>