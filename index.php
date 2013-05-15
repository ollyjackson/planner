<?php

$people = array('John', 'Paul', 'Ringo', 'Tim', 'Steve', 'Bill');

$months = 6;

echo '<table border=1>';
echo '<thead><tr>';
echo '<th>person</th>';

for ($i = 0; $i < 60; $i++) {
	echo '<th>'.date('j/n/y', strtotime("+".$i." day")).'</th>';
}
echo '</tr></thead>';
echo '<tbody>';

foreach ($people as $person) {
	echo '<tr style="height: 80px;">';
	echo '<td>'.$person.'</td>';

	for ($i = 0; $i < 60; $i++) {
		echo '<td>xxx</td>';
	}

	echo '</tr>';
}

echo '</tbody>';

echo '</table>';