
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pnn = $_POST['numbers'];
    $messages = $_POST['message'];

    $tena = "INSERT INTO messages (numbers, message)
    VALUES ($pnn, '$messages')";

 
    echo "message successfully";
    header('location: precess_message.php');
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Send Message</title>
    <style>
        h2
        {
            color:blue;
            
        }
        form
        {
            border:solid;
            width: 300px;
            background-color:brown;
            
        }
        body
        {
            background-color:black;
        }
    </style>
</head>
<body>
   
    <form action="#" method="POST">
    <h2>Send a Message to Donor</h2>
        Phone Number: <input type="number" name="numbers" required><br>
        Message: <textarea name="message" required></textarea><br>
        <button type="submit">Send Message</button>
    </form>
</body>
</html>