<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Connect to database (replace dbname, username, password with your own details)
  $db = new PDO('mysql:host=localhost;dbname=dbname', 'username', 'password');

  // Prepare and execute SQL statement to check if the username is already taken
  $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->execute([$_POST["username"]]);

  // If the username is already taken, show an error message
  if ($stmt->rowCount() > 0) {
    echo "Username already taken. Please choose a different username.";
  } else {
    // Otherwise, insert the new user into the database
    $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$_POST["username"], $_POST["email"], password_hash($_POST["password"], PASSWORD_DEFAULT)]);

    // Redirect to the login page
    header("Location: login.html");
    exit();
  }
}
?>
