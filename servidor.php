<?php
include __DIR__ . '/conect.php';


$stmt = $pdo->prepare("SELECT CONCAT(Nombres,' ',Apellidos) as nomApe, id_datos_benef, DNI FROM datos_benef" );












// DUMMY SEARCH SCRIPT - DO YOUR OWN!
// E.G. Search database - SELECT * FROM `table` WHERE `name` LIKE "%SEARCH%"

// (A) DUMMY DATA
$data = ["Aaronn", "Baattyy", "Chaarles", "Dionn", "Elly"];

// (B) SEARCH
$search = strtolower($_POST["search"]);
$results = [];
foreach ($data as $d) {
  if (strpos(strtolower($d), strtolower($search)) !== false) { $results[] = $d; }
}

// (C) RESPOND
echo count($results)==0 ? null : json_encode($results);
