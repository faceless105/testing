<?php

function testItAll(){
	
	global $conn;
	
	$query = "INSERT INTO public.dummytable (\"someText\",\"geometry\",\"json\") VALUES ('dummy text', '(-83.71112, 42.30388), (-83.69988, 42.30613), (-83.70499, 42.29794)', '{\"name\": \"Book the First\", \"author\": {\"first_name\": \"Bob\", \"last_name\": \"White\"}}')";
	$hos_res = $conn->query($query);
	//$hospitals = $hos_res->fetchAll();
	
	return "all done!!";

}


?>
