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

echo '<html><head></head><body style="background-color: #009688";>';
echo '<form action="tip.php" method="post">';
echo '<table align="center"><th><p align="center">- Dezimalstellen mit Punkt trennen</p></th><tr><td></td></tr>';


$i = 0;
$s = 8;
while ($i < $s){
		echo "k:$i";
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
