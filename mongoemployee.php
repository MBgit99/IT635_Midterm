<?php

	try 
	{
	$mdb = new MongoDB\Driver\Manager("mongodb://ITguest:12345@ds139470.mlab.com:39470/ironworks");


	$command = new MongoDB\Driver\Command(['ping' => 1]);
	$mdb->executeCommand ('db', $command);

	$servers = $mdb->getServers();
	//print_r($servers);   
	$filter = array();
	$query = new MongoDB\Driver\Query($filter);
	$results = $mdb->executeQuery("ironworks.employees", $query);
	echo "Generating List of Employees: \r\n";
	foreach ($results as $doc) {
	
	$Fname = $doc->Fname;
	$Lname = $doc->Lname;
	$EID = $doc->EID;
	$Address = $doc->Address;
	$City = $doc->City;
	$State = $doc->State;


	echo $EID.".".$Fname." ".$Lname.": ".$Address.",".$City.",".$State;
	echo "\r\n";
	echo "\r\n";
	
	}
}
catch(exception $e)
 {
	print_r($e);
}

?>
