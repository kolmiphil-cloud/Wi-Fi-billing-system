<?php
include("../config/db.php");
include("../includes/admin_header.php");

function code(){
return substr(str_shuffle("ABCDEFG123456"),0,6);
}

if(isset($_POST['generate']))
{

$c = code();

$a = $_POST['amount'];

$conn->query("INSERT INTO vouchers(code,amount,status)
VALUES('$c','$a','unused')");

echo "<div class='card'>Voucher: $c</div>";

}
?>

<h1>Generate Voucher</h1>

<div class="card">

<form method="POST">

<input name="amount" placeholder="Amount">

<button name="generate">Generate</button>

</form>

</div>

<?php include("../includes/admin_footer.php"); ?>