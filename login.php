
$username = $_POST['username'];
$password = $_POST['password'];

// Check if username and password are valid
if ($username == 'user' && $password == 'password') {
  header('Location: account.php');
  exit();
} else {
  header('Location: index.html');
  exit();
}

?>
