<?php
	require_once 'config.php';

	if(ISSET($_POST['login_id'])) {
		$is_valid =  ISSET($_POST['firstname'], $_POST['lastname'], $_POST['mobilenumber'], $_POST['degree'], $_POST['age'], $_POST['collegename'], $_POST['location']);

		if($is_valid) {
			$stmt = $mysql->prepare("INSERT INTO users(login_id, firstname, lastname, mobilenumber, degree, age, collegename, location) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		}

		if (!$stmt->bind_param("issssiss",$_POST['login_id'],$_POST['firstname'], $_POST['lastname'], $_POST['mobilenumber'], 
				$_POST['degree'], $_POST['age'], $_POST['collegename'], $_POST['location'])) {
	    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
		}

	  if (!$stmt->execute()) {
	  	echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		} else {
			echo "User details added successfully.";
			// Save data to json
			$jsonFile = "data.json";
			$arr_data = array();
			try {
				$form_data = array(
					'login_id' => $_POST['login_id'],
					'firstname' => $_POST['firstname'],
					'lastname' => $_POST['lastname'],
					'mobilenumber' => $_POST['mobilenumber'],
					'degree' => $_POST['degree'],
					'age' => $_POST['age'],
					'collegename' => $_POST['collegename'],
					'location' => $_POST['location']
				);

				$json_data = file_get_contents($jsonFile);
				$arr_data = json_decode($json_data, true);

				array_push($arr_data, $form_data);
				$json_data = json_encode($arr_data, JSON_PRETTY_PRINT);

				if(file_put_contents($jsonFile, $json_data)) {
					echo 'Data successfully saved';
					header('location: user_display.php?login_id='.$_POST['login_id']);
				} else {
					echo "Error in writing to json file";
				}
			} catch(Exception $e) {
				
			}
		}
	} else {
		echo "User details not mapped with the logged in user.";
	}
?>