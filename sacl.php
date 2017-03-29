<?php
if($_POST){
	$family = array("Saad Veigar", "Haider Teemo", "Sana Lux","Rumaisa Annie", "Sara Tristana", "Musab Amumu", "Amir Darius");
	$i=false;
	foreach($family as $value){
		if($value==$_POST['name'])
		{
			$i=true;
		}
	}
	if($i){
		echo "Access Granted ".$_POST['name'];
	}else {
		echo "Access Denied ".$_POST['name'];
	}
}
?>
<form method= "post">
<p>What's your name </p>
<p>Type name and and surnames with capital letters</p>
<p>once more into the fray
into the last fight I'll ever know
live and die on this day
live and die on this day </p>
<input name="name" type="text">
<input type="submit" value= "GO">

</form>