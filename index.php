<?php
//Formular Datenerfassung


//functionTableSet

function inputServiceToI() {
	echo '<tr><td><label>Name: <input type="text" size="20" name="nameMa_';
};
function inputServiceFromM() {
	echo '"placeholder="';
	echo "MA-Name";
	echo '"></label></td>';
	//wert
	echo '<td><label>Wert: <input type="text" size="10" name="wert_';
};
function inputServiceFromW() {
	echo '"placeholder="';
	echo "EUR/h.";
	echo '"></label><td><select name="station_';
};
function radio(){
		echo '"><option>Service</option><option>Kueche</option><option>Theke</option><option>passiv</option></select></td>';
};
function radioErw(){
	echo '"><label> K./T.</label><td></tr>';
}

echo '<html><head><meta name="viewport" content="width=device-width, initial-scale=1.0" /</head><body style="background-color: #ef1c25">';
echo '<p align="center">einfach "Name" des MA und </br>bei "Wert" den abgegebenen TIP oder die Stunden durch . getrennt eintragen,</br>im Menu dann noch die ensprechende Station auswaehlen</p>';
echo '<form action="tip.php" method="post">';
echo '<table align="center"><th><p align="center" style="color: #ffffff" >Dezimalstellen mit Punkt trennen</p></th><tr><td></td></tr>';


$i = 0;
$s = 15;
while ($i < $s){
		//echo "k:$i";
		inputServiceToI();
		echo $i;
		inputServiceFromM();
		echo $i;
		inputServiceFromW();
		echo $i;
		radio();
		$i++;
};
//ziel

//nameText


echo '<tr><td><button align="center" type="submit" name="x">send!</button></td></tr></table></form>';


 
echo '</body></html>';
?>
