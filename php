<?php
$vadal_info = [
    "name" => "Vadal",
    "taluka" => "Junagadh",
    "district" => "Junagadh",
    "pincode" => 362310,
    "notable_for" => "Agricultural Produce & Highway connectivity"
];

echo "<h2>Profile of " . $vadal_info['name'] . "</h2>";
echo "<ul>";
foreach ($vadal_info as $key => $value) {
    echo "<li><strong>" . ucfirst($key) . ":</strong> " . $value . "</li>";
}
echo "</ul>";
?>
