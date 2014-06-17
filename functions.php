<?php 

if ( function_exists('register_nav_menu') ) {
	register_nav_menu('main-menu',"Main Menu");
}

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 200, 200, true );
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
	if ( $store["hour"] >= 12 && $store["hour"] <= 18 && $store["day"] > 2 ) {
	  $store["open"] = true;
	} else {
	  $store["open"] = false;
	}
	return $store;
}

function printStoreOpen(){
	$store=storeOpen();
	
	//test data
	// $store["day"]=7;
	// $store["hour"]=22;
	// $store["open"] = true;

	$hour=18-$store["hour"];
	$openingHour=12-$store["hour"];

	if ($store["open"]) {
	 	echo "We're open! Come visit us...we are open for another ".$hour."&nbsp;hours!";
	} else {
		if ( $store["day"] > 2 && $store["hour"] < 12 ) {
			echo "The store is currently closed, but we'll be opening in ".$openingHour;
			if ( $openingHour == 1 ) {
				echo "&nbsp;hour!";
			} else {
				echo "&nbsp;hours!";
			}
		} elseif ( $store["hour"] >= 18 && $store["hour"] <= 19 ) {
			if ( $store["day"]==7) {
				echo "Sorry...we literally just closed. We'll be open again on Wednesday.";
			} else {
				echo "Sorry...we literally just closed. Come back tomorrow!";
			}	
		} elseif ( $store["day"]==1 ) {
	 		echo "The store is currently closed. We'll be open Wednesday at&nbsp;noon.";
		} elseif ( $store["day"]==2 ) {
	 		echo "The store is currently closed. We'll be open tomorrow at&nbsp;noon.";
		} else {
			echo "We're closed right now, but we'll be open again on&nbsp;Wednesday.";
		}
	}
}

function firstImage() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}


