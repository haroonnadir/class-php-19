<?php
// Step 1: Create dynamic data
$data = array(
    "status" => "success",
    "message" => "Data has been successfully saved.",
    "items" => array(
        array("id" => 1, "name" => "Item 1", "price" => 10.00),
        array("id" => 2, "name" => "Item 2", "price" => 20.00),
        array("id" => 3, "name" => "Item 3", "price" => 30.00)
    )
);
// Step 2: Convert the data to JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);
// Step 3: Define the file path
$filePath = 'data.json';
// Step 4: Write the JSON data to the file
if (file_put_contents($filePath, $jsonData)) {
    echo "JSON file created successfully.";
} else {
    echo "Failed to create JSON file.";
}
?>
