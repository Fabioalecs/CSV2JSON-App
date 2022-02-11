<?php 

$fr = fopen("arquivo.csv", "r");

$csvData = array();

while (($row = fgetcsv($fr, 0, ",")) !== FALSE) {
    $csvData[] = $row;
}

echo json_encode($csvData);