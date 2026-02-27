<?php
include("../config/db.php");
include("../includes/admin_header.php");

$result = $conn->query("SELECT * FROM users");
?>

<h1>Users</h1>

<div class="cards">

<?php

while($row = $result->fetch_assoc())
{
?>

<div class="card">

<h3><?php echo $row['username']; ?></h3>

<p>Balance: KES <?php echo $row['balance']; ?></p>

<p>Role: <?php echo $row['role']; ?></p>

</div>

<?php
}
?>

</div>

<?php include("../includes/admin_footer.php"); ?>