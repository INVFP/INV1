<!DOCTYPE html>
<html>
  <head>
    <title>Investment Website - My Account</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h1>Welcome to your account, <?php echo $_POST['username']; ?></h1>
      <p>Here is some information about your investments:</p>
      <ul>
        <li>Investment 1: $1000</li>
        <li>Investment 2: $500</li>
        <li>Investment 3: $250</li>
      </ul>
      <a href="logout.php">Log Out</a>
    </div>
  </body>
</html>
