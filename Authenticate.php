#!/usr/bin/php
<?php
//$username = $argv[1];
//$passwd = $argv[2];
$db = new mysqli('localhost','root','SUPERrootTREE!','IronWorks');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}

echo "Enter username\r\n";
$username =trim(fgets(STDIN));
echo "Enter password\r\n";
$passwd =trim(fgets(STDIN));
$hashpasswd= hash('sha256', $passwd);


echo "\r\n";
echo "Checking credentials for: $username".PHP_EOL;
//echo "This is your hash: ".$hashpasswd."\r\n";

$insertString = "SELECT * FROM user WHERE username='$username' AND passwd='$hashpasswd';";
$checkPrivilege = $db->query("SELECT privilege FROM user WHERE username ='$username' limit 1;");
$results = $db->query($insertString);
$result2 = mysqli_fetch_array($checkPrivilege);
echo "\n";
//print_r("You're privilege level is: ".$result2['privilege']);
//echo "\n";

//var_dump($checkPrivilege);


do {

if($results->num_rows===0){
	echo "Authentication error\r\n";
}

if (($result2['privilege']=='1') && $results->num_rows!=0){
	print_r("You're privilege level is: ".$result2['privilege']."\r\n");

	echo "Welcome admin, please observe the following options: ".PHP_EOL;
	echo "\n";
	echo "Add Equipment - AddEquipment.php ".PHP_EOL;
	echo "Add a new job site - AddJobSite.php ".PHP_EOL;
	echo "Add a new Equipment Status - AddEquipmentStatus.php ".PHP_EOL;
	echo "Update equipment's current status - UpdateEquipment.php".PHP_EOL;
	echo "Invoice materials for a site - AddJobMaterials.php ".PHP_EOL;
	echo "Generate a status report for a machine - EquipmentReport.php".PHP_EOL;
	echo "Generate a status report for a job site - JobReport.php".PHP_EOL;
}
if (($result2['privilege']=='0') && $results->num_rows!=0) {
	print_r("You're privilege level is: ".$result2['privilege']."\r\n");

	echo "Congratulations, you authenticated!".PHP_EOL;
	echo "Sadly you're a big noob and have no privileges".PHP_EOL;
}

} while(0);

$db->close();
echo "\n";
echo "DB Connection Success".PHP_EOL;
?>
