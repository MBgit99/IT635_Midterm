#!/usr/bin/php
<?php
//$jobID = $argv[1];

$db = new mysqli('localhost','root','SUPERrootTREE!','IronWorks');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}

echo "Enter jobID\r\n";
$jobID =trim(fgets(STDIN));

$checkString = $db->query("SELECT jobName FROM jobSites WHERE jobID='$jobID' limit 1;");
$results2=mysqli_fetch_array($checkString);
echo "\r\n";

$insertString = $db->query("SELECT jobID, material, materials.machineID, equipment, equipment.model FROM jobMaterials INNER JOIN materials ON jobMaterials.materialID=materials.materialID INNER JOIN equipment ON materials.machineID=equipment.machineID WHERE jobID='$jobID'");

echo "\r\n";

if(mysqli_num_rows($insertString)==0){
	exit("There is currently no equipment listed for: ".$results2['jobName']."\r\n");
}

print_r("The equipment required for ".$results2['jobName']." is the following: \r\n");

while($row=mysqli_fetch_array($insertString)) {
		echo $row['jobID']."  ---  ".$row['equipment'].": ".$row['model']." for ".$row['material'];
		
		echo "\r\n";
	}
$db->close();
echo "DB Connection Success".PHP_EOL;
?>
