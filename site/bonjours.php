<?php
// Check if user is logged in
if (!isset($_SESSION["LOGGED_USER"])) {
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bonjour!</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Bonjour, <?php echo $_SESSION["LOGGED_USER"]["nom"]; ?>!</h1>
  </div>
</body>
</html>