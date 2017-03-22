#!/usr/bin/php
<?php
//$jobName = $argv[1];
//$city = $argv[2];
//$tonnage = $argv[3];
//$startDate = $argv[4];
//$endDate = $argv[5];
$db = new mysqli('localhost','root','SUPERrootTREE!','IronWorks');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}

echo "Enter jobName\r\n";
$jobName =trim(fgets(STDIN));
echo "Enter city\r\n";
$city =trim(fgets(STDIN));
echo "Enter tonnage\r\n";
$tonnage =trim(fgets(STDIN));
echo "Enter startDate\r\n";
$startDate =trim(fgets(STDIN));
echo "Enter endDate \r\n";
$endDate =trim(fgets(STDIN));

echo "attempting to insert record: $jobName $city $tonnage $startDate $endDate".PHP_EOL;
if($endDate == 'none' || 'NONE') {
$insertString = "insert into jobSites(jobName, city, tonnage, startDate) values ('$jobName', '$city', '$tonnage', '$startDate');";
}
else {
$insertString = "insert into jobSites(jobName, city, tonnage, startDate, endDate) values ('$jobName', '$city', '$tonnage', '$startDate', '$endDate');";
}
echo "attempting to execute this SQL:".PHP_EOL;
echo $insertString.PHP_EOL;
$results = $db->query($insertString);
$queryString = "select * from jobSites;";
$results2 = $db->query($queryString);


while($row=mysqli_fetch_array($results2)) {
		echo $row['jobID'].":".$row['jobName']."   ||   ".$row['city']."   ||   ".$row['tonnage']."   ||   ".$row['startDate']."   ||   ".$row['endDate'];
		echo "\r\n";
		echo "\r\n";
	}
$db->close();
echo "DB Connection Success".PHP_EOL;
?>
