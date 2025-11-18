<?php include "inc/header.php"; ?>

	<!--wrapper-->
	<div class="wrapper">

		<?php include "inc/leftmenu.php"; ?>
		<?php include "inc/topbar.php"; ?>

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 ">

					<div class="col">
						<div class="card radius-10 bg-danger">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Total Customers</p>
										<h4 class="my-1 text-white">
											<?php  
												$tcusSql = "SELECT * FROM role WHERE role IN (3, 4) ORDER BY name ASC";
												$tcusQuery = mysqli_query($db, $tcusSql);
												$count = mysqli_num_rows($tcusQuery);

												echo $count;
											?>
										</h4>
									</div>
									<div class="widgets-icons bg-light-transparent text-white ms-auto"><i class="bx bxs-group"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10 bg-warning">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<p class="mb-0 text-white">Verified Rent Properties</p>
										<h4 class="my-1 text-white">
											<?php  
												$vrp_sql = "SELECT * FROM rent_subcategory WHERE status IN (3,4)";
												$vrpQuery = mysqli_query($db, $vrp_sql);
												$vrpCount = mysqli_num_rows($vrpQuery);

												echo $vrpCount;
											?>
										</h4>
									</div>
									<div class="widgets-icons bg-light-transparent text-white"><i class="fadeIn animated bx bx-shield-quarter"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10 bg-warning">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<p class="mb-0 text-white">Verified Buy Properties</p>
										<h4 class="my-1 text-white">
											<?php  
												$vbp_sql = "SELECT * FROM buy_subcategory WHERE status IN (3,4)";
												$vbpQuery = mysqli_query($db, $vbp_sql);
												$vbpCount = mysqli_num_rows($vbpQuery);

												echo $vbpCount;
											?>
										</h4>
									</div>
									<div class="widgets-icons bg-light-transparent text-white"><i class="fadeIn animated bx bx-shield-quarter"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10 bg-info">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<p class="mb-0 text-white">Pending Transactions</p>
										<h4 class="my-1 text-white">
											<?php  
												$pt_sql = "SELECT * FROM transactions WHERE status=0";
												$ptQuery = mysqli_query($db, $pt_sql);
												$ptCount = mysqli_num_rows($ptQuery);

												echo $ptCount;
											?>
										</h4>
									</div>
									<div class="widgets-icons bg-light-transparent text-white"><i class="fadeIn animated bx bx-loader-alt"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10 bg-primary">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<p class="mb-0 text-white">Active Packages</p>
										<h4 class="my-1 text-white">
											<?php  
												$pt_sql = "SELECT * FROM transactions WHERE status=1";
												$ptQuery = mysqli_query($db, $pt_sql);
												$ptCount = mysqli_num_rows($ptQuery);

												echo $ptCount;
											?>
										</h4>
									</div>
									<div class="widgets-icons bg-light-transparent text-white"><i class="fadeIn animated bx bx-check-shield"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10 bg-warning">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<p class="mb-0 text-white">Expiring Packages</p>
										<h4 class="my-1 text-white">
											<?php  
												$pt_sql = "SELECT * FROM transactions WHERE renewal_date < CURDATE()";
												$ptQuery = mysqli_query($db, $pt_sql);
												$ptCount = mysqli_num_rows($ptQuery);

												echo $ptCount;
											?>
										</h4>
									</div>
									<div class="widgets-icons bg-light-transparent text-white"><i class="fadeIn animated bx bx-trash-alt"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10 bg-warning">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<p class="mb-0 text-white">Pending Hotel Booking</p>
										<h4 class="my-1 text-white">
											<?php  
												$roleSql = "SELECT * FROM booking WHERE status=0 ORDER BY id DESC";
										  		$roleQuery = mysqli_query( $db, $roleSql );
										  		$Count = mysqli_num_rows($roleQuery);

												echo $Count;
											?>
										</h4>
									</div>
									<div class="widgets-icons bg-light-transparent text-white"><i class="fadeIn animated bx bx-loader-alt"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10 bg-success">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Website Visitors</p>
										<h4 class="my-1 text-white">
											<?php
												$show = mysqli_query($db, "SELECT total FROM total_visits");
												$number = mysqli_fetch_array($show)[0];
												echo $number;
											?>
										</h4>
									</div>
									<div class="widgets-icons bg-light-transparent text-white ms-auto"><i class="bx bxs-binoculars"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10 bg-primary">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Total Revenue</p>
										<h4 class="my-1 text-white">
											<?php
												// মোট ইনকাম (শুধু Active/Paid ইউজারদের)
												$result = mysqli_query($db, "SELECT SUM(price) AS total_income FROM transactions WHERE status = 1");
												$row = mysqli_fetch_assoc($result);
												$total_income = $row['total_income'] ?? 0;

												echo "৳ " . number_format($total_income)  ;
											?>
										</h4>
									</div>
									<div class="widgets-icons bg-light-transparent text-white ms-auto"><i class="bx bxs-wallet"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->

				<div class="card radius-10 w-100">
    <div class="card-header">
        <h5 class="mb-0">Last 30 Days Income (Paid)</h5>
    </div>
    <div class="card-body">
        <canvas id="weeklyIncomeChart" height="380"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
<?php
$db = mysqli_connect("localhost", "root", "", "property_rental");

// লাস্ট ৩০ দিনের ডাটা নিব (তোর ডাটা দেখানোর জন্য)
$labels = [];
$data   = [];

for($i = 29; $i >= 0; $i--) {
    $date = date("Y-m-d", strtotime("-$i days"));
    $labels[] = date("d M", strtotime($date)); // 01 Nov, 02 Nov...

    $sql = "SELECT COALESCE(SUM(price), 0) AS income 
            FROM transactions 
            WHERE status = 1 
              AND DATE(transaction_date) = '$date'";
    
    $res = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($res);
    $data[] = (float)$row['income'];
}
?>

const ctx = document.getElementById('weeklyIncomeChart').getContext('2d');
const gradient = ctx.createLinearGradient(0, 0, 0, 380);
gradient.addColorStop(0, 'rgba(78, 115, 223, 0.5)');
gradient.addColorStop(1, 'rgba(78, 115, 223, 0.05)');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?= json_encode($labels) ?>,
        datasets: [{
            label: 'ইনকাম (৳)',
            data: <?= json_encode($data) ?>,
            backgroundColor: gradient,
            borderColor: '#4e73df',
            borderWidth: 4,
            pointRadius: 5,
            pointHoverRadius: 10,
            fill: true,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: { 
                beginAtZero: true,
                ticks: { callback: v => '৳' + v.toLocaleString() }
            }
        },
        plugins: {
            tooltip: {
                callbacks: {
                    label: ctx => 'ইনকাম: ৳' + ctx.parsed.y.toLocaleString()
                }
            }
        }
    }
});
</script>


			</div>
		</div>
		<!--end page wrapper -->

		

<?php include "inc/footer.php"; ?>