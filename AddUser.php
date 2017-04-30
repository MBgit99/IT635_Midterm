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

echo "Welcome. Add a New User\r\n";

echo "Enter username\r\n";
$username =trim(fgets(STDIN));

echo "Enter password\r\n";
$passwd =trim(fgets(STDIN));
$hashpasswd= hash('sha256', $passwd);

echo "Enter privilege level\r\n";
$privLvl = trim(fgets(STDIN));

echo "Enter displayName\r\n";
$displayName = trim(fgets(STDIN));

echo "\r\n";
echo "Creating new user: ".$username."\r\n";

$insertString = "INSERT INTO user VALUES ('$username', '$hashpasswd', '$privLvl', '$displayName');";

$results = $db->query($insertString);

echo "\n";

$queryString = $db->query("select * from user;");

while($row=mysqli_fetch_array($queryString)) {
		echo $row['username']."   ||   ".$row['passwd'].":".$row['privilege']."   ||   ".$row['displayName'];
		echo "\r\n";
		echo "\r\n";
	}
$db->close();
echo "\n";
echo "DB Connection Success".PHP_EOL;
?>
