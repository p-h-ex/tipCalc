<?php
$i = 0;
$s = 8;
$serviceArray = array();
$serviceMoney = array();
$ktArray = array();
$ktTime = array();
while ($i < $s){	
	    $auswahl = $_REQUEST["station_$i"];
			if (isset($auswahl)){
				if ($auswahl =='Service'){
					array_push($serviceArray,$_POST["nameMa_$i"]);
					array_push($serviceMoney,$_POST["wert_$i"]);
					}
				else {
					array_push($ktArray,$_POST["nameMa_$i"]);			
					array_push($ktTime,$_POST["wert_$i"]);
					}
			}
		$i++;
}
echo '</br>';
print_r($serviceArray);
echo '</br>';
print_r($serviceMoney);
echo '</br>';
print_r($ktArray);
echo '</br>';
print_r($ktTime);
			
echo '</br>';

$faktor = array_sum($serviceMoney) / array_sum($ktTime);

echo "</br> Konrollwert: $faktor </br>";

foreach ($_POST as $key => $value) { 
		echo $key . " = " . $value . "";
		echo '</br>'; 
}			
//calc the tip for each person

echo "<table>";
echo "<tr><td>Name</td><td>Tip</td></tr>";
while ($i < $s) {
	$tip[$i] = $ktArray[$i] * $faktor;
	echo "<tr><td>$ktArray[$i]</td><td>$tip[$i].&#8364</td></tr>";
	$i++;
};
echo "</table>";
?>
