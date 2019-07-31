<?php
	require_once 'config.php';

	if(ISSET($_POST['email'])){

		$email = $_POST['email'];

		$stmt = $mysql->prepare("SELECT * from login where email = ? ");

		if(!$stmt) {
			echo "Prepare failed: (" . $mysql->errno . ") " . $mysql->error;
		}

		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($col1, $col2);

		$res = $stmt->fetch();
		if($res == 1) {
			while($res){
				session_start();
				$_SESSION["login_val"] = $col2;
				$stmt = $mysql->prepare("SELECT * from users where login_id = ?");

				if(!$stmt) {
					echo "Prepare failed: (" . $mysql->errno . ") " . $mysql->error;
				}

				$_SESSION["login_id"] = $col1;
				header('location: user_display.php?login_id='.$col1);
			}
		} else {
			header('location: index.php');
		}
	}
?>