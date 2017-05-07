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

echo "Please select '1' to enter an nextMaintenance \r\n";
echo "Select '2' to correct lastMaintenance\r\n";
$choice =trim(fgets(STDIN));

echo "\r\n";

$queryString1 = "select * from equipment;";
$results2 = $db->query($queryString1);

while($row=mysqli_fetch_array($results2)) {
		echo $row['machineID'].":".$row['equipment']."---".$row['model'];
		echo "\r\n";
	}
echo "\r\n";
echo "Please select a machine by entering its ID \r\n";

switch($choice) {

		case '1':



			echo "Enter machineID\r\n";
			$machineID =trim(fgets(STDIN));
			echo "Enter nextMaintenance\r\n";
			$nextMaintenance =trim(fgets(STDIN));
			
			$getDate = $db->query("SELECT nextMaintenance FROM equipment WHERE machineID ='$machineID';");
			$array = mysqli_fetch_array($getDate);
			$value = $array['nextMaintenance'];
			$setDate = $db->query("UPDATE equipment SET nextMaintenance = '$nextMaintenance' WHERE machineID ='$machineID';");
			$updateLast = $db->query("UPDATE equipment SET lastMaintenance = '$value' WHERE machineID ='$machineID';");
			break;

		case '2': 

			echo "Enter machineID\r\n";
			$machineID =trim(fgets(STDIN));
			echo "Enter lastMaintenance\r\n";
			$lastMaintenance =trim(fgets(STDIN));

			$setLast = $db->query("UPDATE equipment SET lastMaintenance = '$lastMaintenance' WHERE machineID ='$machineID';");
			
}

$queryString =$db->query("select * from equipment;");

while($row=mysqli_fetch_array($queryString)) {
		echo $row['machineID'].". ".$row['equipment'].": ".$row['model']."  |||  "."Last Maintenance: ".$row['lastMaintenance']."  |||  "."Next Maintenance: ".$row['nextMaintenance']."\r\n";
		
		echo "\r\n";
	}
$db->close();
echo "DB Connection Success".PHP_EOL;
?>
