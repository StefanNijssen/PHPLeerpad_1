<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gegevens</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	</body>
    

<?php
date_default_timezone_set('Europe/Amsterdam');
$current_time = time(); // verkrijg de huidige tijd als Unix-tijdstempel
$current_hour = date('H', $current_time); // haal het huidige uur op in 24-uurs formaat
echo $current_hour ;
// controleer of het tussen 6.00 en 12.00 uur is
if ($current_hour >= 0 && $current_hour < 6) {
	$background_image = 'img/night.png';
    echo "Het is momenteel tussen 00.00 en 6.00 uur.";
} else if ($current_hour >= 6 && $current_hour < 12) {
	$background_image = 'img/morning.png';
    echo "Het is momenteel tussen 6.00 en 12.00 uur.";
} else if ($current_hour >= 12 && $current_hour < 18) {
	$background_image = 'img/afternoon.png';
    echo "Het is momenteel tussen 12.00 en 18.00 uur.";
} else 
	$background_image = 'img/evening.png';
    echo "Het is momenteel tussen 18.00 en 00.00 uur.";

echo "test";

echo '<html>';
echo '<head>';
echo '<style>';
echo 'body {';
echo '    background-image: url("' . $background_image . '");'; // apply the background image
echo '    background-size: cover;'; // adjust the background size
echo '    background-repeat: no-repeat;'; // prevent background image repetition
echo '}';
echo '</style>';
echo '</head>';

echo '</html>';
?>