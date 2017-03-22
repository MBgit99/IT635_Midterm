#!/usr/bin/php
<?php
//$jobID = $argv[1];

$db = new mysqli('localhost','root','SUPERrootTREE!','IronWorks');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}
echo "Please select a job to generate a report for: \r\n";
$queryString = "select * from jobSites;";
$results2 = $db->query($queryString);

while($row=mysqli_fetch_array($results2)) {
		echo $row['jobID'].":".$row['jobName'];
		echo "\r\n";
	}
$jobID =trim(fgets(STDIN));


$checkString = $db->query("SELECT jobName FROM jobSites WHERE jobID='$jobID' limit 1;");
$results2=mysqli_fetch_array($checkString);
if ($results2==0) {
	exit("No such job");
}
echo "\r\n";
print_r("Generating Status Report for: ".$results2['jobName']);
echo "\r\n";

$isComplete = $db->query("SELECT * FROM jobSites WHERE jobID='$jobID' limit 1;");
$results3=mysqli_fetch_array($isComplete);

if(($results3['endDate']!=NULL)) {
	print_r("Job was started on: ".$results3['startDate']."\r\n");
	print_r("Job was completed on: ".$results3['endDate']."\r\n");
	print_r("Total tonnage: ".$results3['tonnage']."\r\n");
}
else {
	print_r("Job was started on: ".$results3['startDate']."\r\n");
	echo "Job is still currently in progress\r\n";
	echo "Tonnage to date is: ".$results3['tonnage']."\r\n";
	echo "\r\n";
	echo "The equipment required is: \r\n";
	$insertString = $db->query("SELECT jobID, material, materials.machineID, equipment, equipment.model FROM jobMaterials INNER JOIN materials ON jobMaterials.materialID=materials.materialID INNER JOIN equipment ON materials.machineID=equipment.machineID WHERE jobID='$jobID';");
	//var_dump($insertString);

	
	$totalMachines=mysqli_num_rows($insertString);


	while($row=mysqli_fetch_array($insertString)) {
		echo $row['equipment'].": ".$row['model'];
		
		echo "\r\n";
	}
	echo "\r\n";
	echo "Total number of machines needed: ".$totalMachines."\r\n";
	
}
echo "\r\n";

$db->close();
echo "DB Connection Success".PHP_EOL;
?>
