#!/usr/bin/php
<?php
//$jobID = $argv[1];
//$machineID = $argv[2];
//$startDate = $argv[3];
//$endDate = $argv[4];
//$status = $argv[5];

$db = new mysqli('localhost','root','SUPERrootTREE!','IronWorks');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}
echo "Enter jobID\r\n";
$jobID =trim(fgets(STDIN));
echo "Enter machineID\r\n";
$machineID =trim(fgets(STDIN));
echo "Enter startDate\r\n";
$startDate =trim(fgets(STDIN));
echo "Enter endDate\r\n";
$endDate =trim(fgets(STDIN));
echo "Enter status\r\n";
$status =trim(fgets(STDIN));


echo "\r\n";
echo "checking if machine in use: $machineID".PHP_EOL;
$machineName = $db->query("SELECT * FROM equipment WHERE machineID=$machineID limit 1;");
$results2 = mysqli_fetch_array($machineName);
echo "You have selected: ".$results2['equipment'].":".$results2['model']."\r\n";
echo "\r\n";

$checkMachine = $db->query("select * from equipmentStatus WHERE status IN ('in use', 'IN USE', 'In Use') AND machineID = $machineID;");
//$result1 = mysqli_fetch_array($checkMachine);

if (mysqli_num_rows($checkMachine) > 0) {
		exit("Machine in use!\r\n");
}
else {
	echo "Machine is Free!\r\n";
	echo "\r\n";
}




echo "checking if machine is functional: $machineID".PHP_EOL;

$machineStatus = $db->query("select * from equipmentStatus WHERE status IN ('broken','BROKEN','Broken') AND machineID = $machineID;");

if (mysqli_num_rows($machineStatus) > 0) {
		exit("Machine is Broken!!!\r\n");
}
else {
	echo "Machine is Operational!!\r\n";
}




echo "\r\n";
//echo "attempting to insert record: $jobID, $machineID, $startDate, $endDate".PHP_EOL;
if($endDate == 'none' || 'NONE') {
	$insertString = "insert into equipmentStatus(jobID, machineID, startDate, status) values ('$jobID', '$machineID', '$startDate', '$status');";
}
elseif($jobID == 'none' || 'NONE'){
$insertString = "insert into equipmentStatus(machineID, startDate, endDate, status) values ('$machineID', '$startDate', 'endDate', '$status');";
}
elseif(($jobID == 'none' || 'NONE') && ($endDate == 'none' || 'NONE')){
$insertString = "insert into equipmentStatus(machineID, startDate, status) values ('$machineID', '$startDate', '$status');";
}
else {
	$insertString = "insert into equipmentStatus(jobID, machineID, startDate, endDate, status) values ('$jobID','$machineID', '$startDate', 'endDate', '$status');";
}
//echo "attempting to execute this SQL:".PHP_EOL;
//echo $insertString.PHP_EOL;
$results = $db->query($insertString);
$queryString =$db->query("select * from equipmentStatus;");

while($row=mysqli_fetch_array($queryString)) {
		echo $row['jobID']."  |||  ".$row['machineID'].": ".$row['startDate']."  |||  ".$row['endDate']."  |||  ".$row['status'];
		
		echo "\r\n";
	}
$db->close();
echo "DB Connection Success".PHP_EOL;
?>
