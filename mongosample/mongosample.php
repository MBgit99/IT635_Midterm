<?php

	try 
	{
	$mdb = new MongoDB\Driver\Manager("mongodb://ITguest:12345@ds139470.mlab.com:39470/ironworks");


	$command = new MongoDB\Driver\Command(['ping' => 1]);
	$mdb->executeCommand ('db', $command);

	$servers = $mdb->getServers();
	print_r($servers);
	$filter = array ('name'=> 'steve');
	$query = new MongoDB\Driver\Query($filter);
	$results = $mdb->executeQuery("ironworks.names", $query);
	print_r($results);

}
catch(exception $e)
 {
	print_r($e);
}
?>
