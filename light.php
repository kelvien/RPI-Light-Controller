<?php
if(isset($_GET['val'])){
	if($_GET['val'] == "on"){
	exec('sudo python /home/pi/prog/low_light.py');
	}
	else{
	exec('sudo python /home/pi/prog/high_light.py');
	}
}
?>
