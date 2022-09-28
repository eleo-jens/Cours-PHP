<?php 
$pistesCD = ['Another Love' => 360, 'Bruxelles' => 270, 'Hello' => 250];

foreach ($pistesCD as $nom => $duree){
    $duree = $duree / 60;
    $min = floor($duree);
    $sec = ($duree - $min) * 10;
    print $nom. " : " .$min. "m ".$sec. "s\n";
}

$album = ['pop', 'Angele', 16.5, $pistesCD];
print_r($album);

?>