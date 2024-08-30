<?php
// Sample data to be returned as JSON
$data = array(
    "status" => "success",
    "message" => "Data retrieved successfully",
    "items" => array(
        array("id" => 1, "name" => "Item 1", "price" => 10.00),
        array("id" => 2, "name" => "Item 2", "price" => 20.00),
        array("id" => 3, "name" => "Item 3", "price" => 30.00)
    )
);
// Set content type to JSON and output the data
header('Content-Type: application/json');
echo json_encode($data);
?>
