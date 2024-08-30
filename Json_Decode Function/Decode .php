<?php
    $json = '{"name": "John", "age": 30, "city": "New York"}';
    $object = json_decode($json);
    echo $object->name; // Output: John
?>


<?php
$json = '{"name": "John", "age": 30, "city": "New York"}';
$array = json_decode($json, true);
echo $array['name']; // Output: John
?>


<?php
    $json = '{"person": {"name": "John", "age": 30}, "city": "New York"}';
    $data = json_decode($json, true);
    echo $data['person']['name']; // Output: John
?>


<?php
    $json = '{"person": {"name": "John", "age": 30}, "city": "New York"}';
    $data = json_decode($json);
    echo $data->person->name; // Output: John
?>

<?php
    $json = '{"large_number": 12345678901234567890}';
    $data = json_decode($json, false, 512, JSON_BIGINT_AS_STRING);
    echo $data->large_number; // Output: 12345678901234567890
?>

<?php
$json = '{"name": "John", "age": 30'; // Invalid JSON
$data = json_decode($json);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo 'JSON decoding error: ' . json_last_error_msg();
}
?>
