<?php
	require_once 'config.php';

	if(ISSET($_POST['email'])){

		$email = $_POST['email'];

		$stmt = $mysql->prepare("INSERT INTO login(email) VALUES (?)");

		if(!$stmt) {
			echo "Prepare failed: (" . $mysql->errno . ") " . $mysql->error;
		}

		if (!$stmt->bind_param("s", $email)) {
    	echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
		}

		if (!$stmt->execute()) {
    	echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		} else {

			echo "Registered successfully";
			$stmt = $mysql->prepare("SELECT * from login where email = ? ");

			if(!$stmt) {
				echo "Prepare failed: (" . $mysql->errno . ") " . $mysql->error;
			}

			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($col1, $col2);

			while($stmt->fetch()) {
				session_start();
				$_SESSION["login_val"] = $col2;
				$_SESSION["login_id"] = $col1;
				header('location: user_details.php?login_id='.$col1);
			}
		}
	}
?>