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

echo "Please select '1' to enter an endDate \r\n";
echo "Select '2' to update a broken machine\r\n";
$choice =trim(fgets(STDIN));

switch($choice) {

		case '1':



			echo "Enter machineID\r\n";
			$machineID =trim(fgets(STDIN));
			echo "Enter endDate\r\n";
			$endDate =trim(fgets(STDIN));
			echo "Enter 'complete'\r\n";
			$complete=trim(fgets(STDIN));

			$setDate = $db->query("UPDATE equipmentStatus SET endDate = '$endDate' WHERE machineID ='$machineID';");
			$setComplete = $db->query("UPDATE equipmentStatus SET status = '$complete' WHERE machineID ='$machineID';");
			break;

		case '2': 

			echo "Enter machineID\r\n";
			$machineID =trim(fgets(STDIN));
			echo "Is the machine fixed?\r\n";
			$fixed=trim(fgets(STDIN));
			echo "On what date?\r\n";
			$fixDate=trim(fgets(STDIN));

			$setFixed = $db->query("UPDATE equipmentStatus SET status = '$fixed' WHERE machineID ='$machineID';");
			$newDate = $db->query("UPDATE equipmentStatus SET endDate = '$fixDate' WHERE machineID ='$machineID';");
}

$queryString =$db->query("select * from equipmentStatus;");

while($row=mysqli_fetch_array($queryString)) {
		echo $row['jobID']."  |||  ".$row['machineID'].": ".$row['startDate']."  |||  ".$row['endDate']."  |||  ".$row['status'];
		
		echo "\r\n";
	}
$db->close();
echo "DB Connection Success".PHP_EOL;
?>
