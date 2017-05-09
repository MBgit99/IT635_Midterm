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



echo "Please select a machine by entering its ID \r\n";



		echo "Enter machineID\r\n";
		$machineID =trim(fgets(STDIN));
		echo "Enter lastMaintenance\r\n";
		$lastMaintenance =trim(fgets(STDIN));

		$setLast = $db->query("UPDATE equipment SET lastMaintenance = '$lastMaintenance' WHERE machineID ='$machineID';");
			


$queryString =$db->query("SELECT * FROM equipment;");

while($row=mysqli_fetch_array($queryString)) {
		echo $row['machineID'].". ".$row['equipment'].": ".$row['model']."  |||  "."Last Maintenance: ".$row['lastMaintenance']."  |||  "."Next Maintenance: ".$row['nextMaintenance']."\r\n";
		echo "It is recommended this machine undergo maintenance approximately every: ".$row['schedule']."\r\n";
		
		echo "\r\n";
	}
$db->close();
echo "DB Connection Success".PHP_EOL;
?>
