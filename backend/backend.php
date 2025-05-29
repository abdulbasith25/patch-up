<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// ✅ Create table if it doesn't exist
$createTableSQL = "CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
)";
$conn->query($createTableSQL); // Executes table creation

// 🔽 Now the rest of your code
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$pass_raw = $_POST['password'] ?? '';

if (empty($name) || empty($email) || empty($pass_raw)) {
  echo "All fields are required!";
  exit;
}

$pass = password_hash($pass_raw, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "User registered successfully!";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
