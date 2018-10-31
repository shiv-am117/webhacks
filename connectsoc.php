<?php

	$link=@mysqli_connect('localhost','root','');

	if(!$link||!@mysqli_select_db($link,'webhack_login'))
		die("Connection Error");
function society_exists($soc){

	global $link;
	$query="SELECT `society_name` FROM `society info` WHERE `society_name`= '$soc'";
	$result=mysqli_query($link,$query);
		if(mysqli_affected_rows($link)>0)
	return true;
		else
	return false;
	

}

function socpass_match($soc,$pass){

	global $link;
	$query="SELECT `pass` FROM `society info` WHERE `society_name`= '$soc'";
	$result=mysqli_query($link,$query);
		
			$output=mysqli_fetch_assoc($result);
			if($output["pass"]==$pass) return true;
			else return false;
		}


	


?>