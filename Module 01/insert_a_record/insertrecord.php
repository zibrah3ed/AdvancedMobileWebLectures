          <?php

                // Connect to MySQL
 				$mysqli = new mysqli( 'localhost', 'YOUR_USERNAME','YOUR_PASSWORD', 'YOUR_DBNAME' );



               $fname = (isset($_POST['fname'])    ? $_POST['fname']   : '');
               $lname = (isset($_POST['lname'])    ? $_POST['lname']   : '');
               $email = (isset($_POST['address'])    ? $_POST['email']   : '');
               $comments = (isset($_POST['comments'])    ? $_POST['comments']   : '');



			  // Insert our data
			  $sql = "INSERT INTO [YOUR_TABLE_NAME] ( fname, lname, email, comments) 	VALUES ( '{$mysqli->real_escape_string(isset($_POST['fname'])    ? $_POST['fname']   : '')}' , '{$mysqli->real_escape_string(isset($_POST['lname'])    ? $_POST['lname']   : '')}'	, '{$mysqli->real_escape_string(isset($_POST['email'])    ? $_POST['email']   : '')}' 	, '{$mysqli->real_escape_string(isset($_POST['comments'])    ? $_POST['comments']   : '')}'	)";


			  $insert = $mysqli->query($sql);

			  // Print response from MySQL
			  if ( $insert ) {
				echo "Success! Row ID: {$mysqli->insert_id}";
			  } else {
				die("Error: {$mysqli->errno} : {$mysqli->error}");
			  }


            ?>