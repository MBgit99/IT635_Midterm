#!/usr/bin/php
<?php
//$equipment = $argv[1];
//$model = $argv[2];
//$energySource = $argv[3];
//$location = $argv[4];
//$lockable = $argv[5];
//$typeOfLock = $argv[6];
$db = new mysqli('localhost','root','SUPERrootTREE!','IronWorks');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}

echo "Enter Part name\r\n";
$partname =trim(fgets(STDIN));
echo "Enter Brand\r\n";
$brand =trim(fgets(STDIN));
echo "Enter Vendor\r\n";
$vendor =trim(fgets(STDIN));
echo "Enter Price\r\n";
$price =trim(fgets(STDIN));
echo "What machine is associated with? \r\n";
$machineID =trim(fgets(STDIN));

echo "attempting to insert record: $equipment $partname $brand $vendor $price $machineID".PHP_EOL;
echo "\r\n";
$insertString = "insert into parts(partName, brand, vendor, price, machineID) values ('$partname', '$brand', '$vendor', '$price', '$machineID');";
//echo "attempting to execute this SQL:".PHP_EOL;
//echo $insertString.PHP_EOL;
$results = $db->query($insertString);
$queryString = $db->query("select * from parts;");

while($row=mysqli_fetch_array($queryString)) {
		echo $row['partID']."   ||   ".$row['partName'].":".$row['brand']."   ||   ".$row['vendor']."   ||   ".$row['price']."   ||   ".$row['machineID'];
		echo "\r\n";
		echo "\r\n";
	}

$db->close();
echo "DB Connection Success".PHP_EOL;
?>
