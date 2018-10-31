<?php

	$link=@mysqli_connect('localhost','root','');

	if(!$link||!@mysqli_select_db($link,'webhack_login'))
		die("Connection Error");
function username_exists($name){

	global $link;
	$query="SELECT `name` FROM `userregister` WHERE `name`= '$name'";
	$result=mysqli_query($link,$query);
		if(mysqli_affected_rows($link)>0)
	return true;
		else
	return false;
	

}

function pass_match($name,$pass){

	global $link;
	$query="SELECT `pass` FROM `userregister` WHERE `name`= '$name'";
	$result=mysqli_query($link,$query);
		
			$output=mysqli_fetch_assoc($result);
			if($output["pass"]==$pass) return true;
			else return false;
		}


	


?>