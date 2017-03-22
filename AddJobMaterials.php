#!/usr/bin/php
<?php
//$jobID = $argv[1];
//$materialID = $argv[2];
//$quantity = $argv[3];
$db = new mysqli('localhost','root','SUPERrootTREE!','IronWorks');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}

echo "Enter jobID\r\n";
$jobID =trim(fgets(STDIN));
echo "Enter materialID\r\n";
$materialID =trim(fgets(STDIN));
echo "Enter quantity\r\n";
$quantity =trim(fgets(STDIN));

$checkString = $db->query("SELECT jobName FROM jobSites WHERE jobID='$jobID' limit 1;");
$results2=mysqli_fetch_array($checkString);
if ($results2==0) {
	exit("No such jobID: ".$jobID."\r\n");
}
echo "\r\n";
print_r("You have selected: ".$results2['jobName']);
echo "\r\n";

//var_dump($materialID);
$checkString2 = $db->query("SELECT material FROM materials WHERE materialID='$materialID' limit 1;");
$results3=mysqli_fetch_array($checkString2);
if ($results3==0) {
	exit("No such materialID: ".$materialID."\r\n");
}
echo "\r\n";
print_r("You have selected: ".$results3['material']);
echo "\r\n";

echo "attempting to insert record: $jobID $materialID $quantity".PHP_EOL;
$insertString = "insert into jobMaterials(jobID, materialID, quantity) values ('$jobID', '$materialID', '$quantity');";
echo "attempting to execute this SQL:".PHP_EOL;
echo $insertString.PHP_EOL;
$results = $db->query($insertString);
$queryString = "select * from jobMaterials;";
$results = $db->query($queryString);

while($row=mysqli_fetch_array($results)) {
		echo $row['jobId']."  ||   ".$row['materialID']."  ||   ".$row['quantity']."\r\n";
		
	}
	echo "\r\n";
$db->close();
echo "DB Connection Success".PHP_EOL;
?>
