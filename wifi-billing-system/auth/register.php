<?php include("../includes/header.php"); ?>
<?php include("../config/db.php"); ?>

<div class="container">

<h3>Register</h3>

<?php

if(isset($_POST['register']))
{
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$conn->query("INSERT INTO users (username,password,role,balance)
VALUES ('$username','$password','user',0)");

echo "User registered successfully 🎉";
}

?>

<form method="POST">

<input name="username" placeholder="Username" required>

<input name="password" type="password" placeholder="Password" required>

<button name="register">Register</button>

</form>

<a href="login.php">Login here</a>

</div>

<?php include("../includes/footer.php"); ?>