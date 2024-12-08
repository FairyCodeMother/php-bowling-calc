<?php

const filename = 'MessageFile.json';

// Read the contents of the MessageFile.json file
$jsonData = file_get_contents(filename);

// Decode the JSON data into an associative array
$data = json_decode($jsonData, true);

// Output the message from the JSON file
echo $data['message'];
