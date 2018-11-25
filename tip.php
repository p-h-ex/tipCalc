<?php
session_start();
//counter & array set
$i = 0;
$s = $_SESSION['counter'];
$serviceArray = array();
$serviceMoney = array();
$ktArray = array();
$ktTime = array();
//sort different stations to arrays
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
echo '</br><h1>arrayCheck</h1>';
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
$faktorRound = round($faktor,2,PHP_ROUND_HALF_DOWN);
echo '<html><head><meta name="viewport" content="width=device-width, initial-scale=1.0" /</head><body>';
echo "<p align='center' style='background-color:#ef1c25;color:#ffffff;font-size:25px;border-style: dashed;border-color: black;'><b> Faktor: $faktorRound </b></p>";

/*
foreach ($_POST as $key => $value) { 
		echo $key . " = " . $value . "";
		echo '</br>'; 
		}

Liefert: Hll PHP-Wlt
$vokale = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vokale, "", "Hallo PHP-Welt");
*/			
//make table with calculated tip
echo "<table border='1' align='center'>";
echo "<tr><td style='background-color: #E5E5E5'><b>Name</b></td><td style='background-color: #E5E5E5'>Tip</td></tr>";
$tip = array();
for ($i = 0; $i < $s ;$i++) {
		if(isset($ktTime["$i"])){
		$timeString = $ktTime[$i];
		$komma = ",";
		$punkt = ".";
		$pointTime = str_replace($komma, ".",$timeString);
		$ergebnis = $pointTime * $faktor;
		$ergebnisRound = round($ergebnis,2,PHP_ROUND_HALF_DOWN);
		$ergebnisRoundKomma = str_replace($punkt, ",",$ergebnisRound);
		$tip["$i"] = $ergebnisRoundKomma;
		echo "<tr><td style='background-color: #ef1c25'><b>$ktArray[$i]</b></td><td>$tip[$i] eur </td></tr>";
		}
		$i++;
		if(isset($ktTime["$i"])){
		$timeString = $ktTime[$i];
		$komma = ",";
		$punkt = ".";
		$pointTime = str_replace($komma, ".","$timeString");
		$ergebnis = $pointTime * $faktor;
		$ergebnisRound = round($ergebnis,2,PHP_ROUND_HALF_DOWN);
		$ergebnisRoundKomma = str_replace($punkt, ",",$ergebnisRound);
		$tip["$i"] = $ergebnisRoundKomma;
		echo "<tr><td style='background-color: #E5E5E5'><b>$ktArray[$i]</b></td><td>$tip[$i] eur </td></tr>";
		}
};
echo "</table>";
echo '</body></html>';
?>

