#!/usr/bin/php
<?php
//$jobID = $argv[1];

$db = new mysqli('localhost','root','SUPERrootTREE!','IronWorks');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}

$queryString = "select * from equipment;";
$results2 = $db->query($queryString);

while($row=mysqli_fetch_array($results2)) {
		echo $row['machineID'].":".$row['equipment']."---".$row['model'];
		echo "\r\n";
	}
echo "\r\n";
echo "Please select a machine by entering its ID \r\n";
$machineID =trim(fgets(STDIN));


$checkString = $db->query("SELECT * FROM equipment WHERE machineID='$machineID' limit 1;");
$results2=mysqli_fetch_array($checkString);
if ($results2==0) {
	exit("No such machine");
}
echo "\r\n";



	$insertString = $db->query("SELECT equipment, model, equipment.machineID, partName, brand, vendor, price FROM equipment INNER JOIN parts ON equipment.machineID=parts.machineID WHERE equipment.machineID=$machineID;");
	//var_dump($insertString);

$checkParts = mysqli_num_rows($insertString); 
if ($checkParts == 0) {

	exit("No Parts curretly listed for this machine\r\n");
}

print_r("The following Parts are used by: ".$results2['equipment']."---".$results2['model']);
echo "\r\n";
echo "\r\n";
	
	$totalParts=mysqli_num_rows($insertString);


	while($row=mysqli_fetch_array($insertString)) {
		echo "Part: ".$row['partName']."\r\n";
		echo "Brand: ".$row['brand']."\r\n";
		echo "Vendor: ".$row['vendor']."\r\n";
		echo "Price: ".$row['price']."\r\n";
		
		echo "\r\n";
	}
	echo "\r\n";
	echo "Total number of Parts needed: ".$totalParts."\r\n";
	

echo "\r\n";

$db->close();
echo "DB Connection Success".PHP_EOL;
?>
