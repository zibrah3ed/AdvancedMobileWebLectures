<?php
$servername = "AZURE HOST NAME";
$username = "YOUR_USERNAME";
$password = "YOUR_PASSWORD";
$dbname = "YOUR_DBNAME";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql= "SELECT id,fname, lname, email, comments FROM [YOUR_TABLE_NAME]";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. "<br>";
        echo "Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
        echo "Email: " . $row["email"]. "<br>";
        echo "Comments: " . $row["comments"]."<br><hr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>