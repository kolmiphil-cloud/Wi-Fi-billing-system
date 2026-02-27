<?php include("../includes/header.php"); ?>
<?php include("../config/db.php"); ?>

<div class="container">

<h3>Login</h3>

<?php

if(isset($_POST['login']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE username='$username'");
$user = $result->fetch_assoc();

if(password_verify($password,$user['password']))
{
echo "Login successful ✅";
}
else
{
echo "Invalid login ❌";
}
}

?>

<form method="POST">

<input name="username" placeholder="Username">

<input name="password" type="password" placeholder="Password">

<button name="login">Login</button>

</form>

</div>

<?php include("../includes/footer.php"); ?>