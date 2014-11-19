<?php include 'head.html' ?>
<?php include 'nav.html' ?>

<?php
require_once 'Usermanagement/sqlConfig.php';

$vehicleType = $_POST['question2'];
$region = $_POST['question3'];
$transmission = $_POST['question4'];
$engineCylinder = $_POST['question5'];
$MPG = $_POST['question6'];
$DriveTrain = $_POST['question7'];

//require_once('php-console/src/PhpConsole/__autoload.php');

// Call debug from PhpConsole\Handler
//$handler = PhpConsole\Handler::getInstance();
//$handler->start();


?>

<div class="container" style = "margin-top: 3%;">	
	<div class="row clearfix">		
	<div class ="main" style="height:2000px">
		<h1>Results</h1>
		<a href="Dashboard.php#dashboard"><id="brand">Back To Dashboard</a>
		<hr>
		<div class="col-md-12 table-responsive">
				<table class="table table-bordered table-hover table-sortable" id="table1" name="table1">
					<tbody>
						<tr>
							<th>Manufacture</th>
							<th>Model</th>
							<th>Model</th>
							<th>Cylinders</th>
							<th>Tranmission</th>
							<th>City MPG</th>
							<th>Highway MPG</th>
							<th>Combined MPG</th>
							<th>Annual Fuel Cost</th>
						</tr>
						<?php
						$Query1="call CarQuiz('$vehicleType', '$region', '$transmission', '$engineCylinder', '$DriveTrain', '$MPG')";
						$res = $con->query("$Query1");
						$count=0;
						while($row = mysqli_fetch_array($res))
						{	
							
							  echo "<tr><td>"; 
							  echo $row['make'];
							  echo "</td><td>";   
							  echo $row['model'];
							  echo "</td><td>";    
							  echo $row['engineType'];
							  echo "</td><td>";  
							  echo $row['cylinders'];
							  echo "</td><td>"; 
							  echo $row['transmission'];
							  echo "</td><td>"; 
							  echo $row['cityFE'];
							  echo "</td><td>";
							  echo $row['hwyFE'];
							  echo "</td><td>";
							  echo $row['combinedFE'];
							  echo "</td><td>";   
							  echo $row['AnnualFuelCost'];
							  echo "</td>"; 



							  echo "</tr>";
							  $count++;

						}
						if($count == 0){
							echo "<center>";
							echo "<h4> Sorry, we were not able to generate any results. </h4>";
							echo "</center>";
						}

						?>
					</tbody>					
				</table>
			</div>
		</div>
	</div>
</div>