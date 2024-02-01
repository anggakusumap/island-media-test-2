<?php
// Define an array with image paths
$json_data = '[
    {"name": "COFFEE", "path": "public/Home/Gallery1.jpg"},
    {"name": "BREAKFAST", "path": "public/Home/Gallery2.jpg"},
    {"name": "SANDWICH", "path": "public/Home/Gallery3.jpg"},
    {"name": "JUICE", "path": "public/Home/Gallery4.jpg"}
]';

// Decode JSON string into an associative array
$images = json_decode($json_data, true);
?>
