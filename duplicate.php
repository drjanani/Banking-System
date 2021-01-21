<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intern";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

            $name=$_POST['sender'];
            $mail=$_POST['receiver'];
            $pass=$_POST['amount'];
$sql = "INSERT INTO transfer (sender, receiver, amount) VALUES ('$name', '$mail', '$pass')";
            if ($conn->query($sql) === TRUE) {
				echo '<script>alert("Transaction is Successfull");
window.location.href="user.html";
</script>';
               
            } 
			else {
                echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 	   