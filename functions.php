<?php 

if ( function_exists('register_nav_menu') ) {
	register_nav_menu('main-menu',"Main Menu");
}

function storeHours() {
	$storeHours = array(
		'Monday' => "Closed", 
		'Tuesday' => "Closed", 
		'Wednesday' => "12-6", 
		'Thursday' => "12-6", 
		'Friday' => "12-6", 
		'Saturday' => "12-6", 
		'Sunday' => "12-6", 
	);
	return $storeHours;
}

function listStoreHours(){
	$storeHours=storeHours();
	echo "<table>";
	foreach ($storeHours as $key => $value) {
		echo "<tr>";
		echo "<td>".$key."</td><td>".$value."</td>";
		echo "</td></tr>";
	}
	echo "</table>";
}

function storeOpen() {
	date_default_timezone_set('America/Los_Angeles');
	$store;
	$store["day"]=date("N");
	$store["hour"] = date("G");
	if ( $store["hour"] > 12 && $store["hour"] < 18 && $store["day"] > 2 ) {
	  $store["open"] = true;
	} else {
	  $store["open"] = false;
	}
	return $store;
}

function printStoreOpen(){
	$store=storeOpen();

	if ($store["open"]) {
	  echo "The store is open! Come visit us!";
	} else {
	  echo "The store is currently closed. We will be open again on Wednesday at noon.";
	}
}

