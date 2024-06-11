<?php
// Initialize session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST["nom"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Register user (you can add more validation and security measures)
  $_SESSION["LOGGED_USER"] = array("nom" => $nom, "email" => $email);
  header("Location: bonjour.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
      <label for="nom">Nom:</label>
      <input type="text" id="nom" name="nom"><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Register">
    </form>
  </div>
</body>
</html>