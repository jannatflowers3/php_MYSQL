<?php
$OpenWeather = ['api_key' => '8e780d44f71862847fd703c241a99477'];
$zip = "98109";
$lat = "23.73666435825669";
$lon = "90.41163846923658";
$base_url =
"https://api.openweathermap.org/data/2.5";
// $weather_url = "/forecast?lat=" . $lat. "&lon=".$lon;
$weather_url = "/forecast?zip=" . $zip;

$api_key = "&appid={$OpenWeather['api_key']}";
$api_url = $base_url . $weather_url . $api_key;
$weather = json_decode(file_get_contents($api_url));
echo "<pre>";
print_r($weather);
?>