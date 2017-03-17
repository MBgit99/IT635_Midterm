#!/usr/bin/php
<?php
$jobID = $argv[1];

$db = new mysqli('localhost','root','SUPERrootTREE!','IronWorks');
if ($db->connect_errno > 0)
{
   echo __FILE__.":".__LINE__.": failed to connect to db, re: $db->connect_error".PHP_EOL;
   exit(0);
}
$checkString = $db->query("SELECT jobName FROM jobSites WHERE jobID='$jobID' limit 1;");
$results2=mysqli_fetch_array($checkString);
echo "\r\n";
print_r("The equipment required for ".$results2['jobName']." is the following: ");

$insertString = "SELECT jobID, material, materials.machineID, equipment, equipment.model FROM jobMaterials INNER JOIN materials ON jobMaterials.materialID=materials.materialID INNER JOIN equipment ON materials.machineID=equipment.machineID WHERE jobID='$jobID'";

echo "\r\n";

$results = $db->query($insertString);

print_r($results);
while ($obj = $results->fetch_object())
{
    print_r($obj);
}
$db->close();
echo "DB Connection Success".PHP_EOL;
?>
