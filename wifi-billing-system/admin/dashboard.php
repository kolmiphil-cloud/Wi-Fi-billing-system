<?php
include("../config/db.php");
include("../includes/admin_header.php");

$userCount = $conn->query("SELECT COUNT(*) as total FROM users")->fetch_assoc()['total'];

$voucherCount = $conn->query("SELECT COUNT(*) as total FROM vouchers")->fetch_assoc()['total'];
?>

<h1>Dashboard</h1>

<div class="cards">

<div class="card">
<h3>Total Users</h3>
<p><?php echo $userCount; ?></p>
</div>

<div class="card">
<h3>Total Vouchers</h3>
<p><?php echo $voucherCount; ?></p>
</div>

<div class="card">
<h3>Revenue</h3>
<p>KES 0</p>
</div>

</div>

<div class="chart-container">

<canvas id="myChart"></canvas>

</div>

<script>

const ctx = document.getElementById('myChart');

new Chart(ctx, {

type: 'bar',

data: {

labels: ['Users', 'Vouchers'],

datasets: [{

label: 'System Stats',

data: [<?php echo $userCount ?>, <?php echo $voucherCount ?>],

}]

}

});

</script>

<?php include("../includes/admin_footer.php"); ?>