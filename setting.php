<?php 

	function getRandom()
	{
		$randm = 'rand-'.rand(1000,9999);
		return $randm;
	}

	$set_random = getRandom();
?>