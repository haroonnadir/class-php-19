<!-- <?php
$array = array("name" => "John", "age" => 30, "city" => "New York");
$json = json_encode($array);
echo $json; // Output: {"name":"John","age":30,"city":"New York"}
?>
 -->
 <!-- <?php
$array = array("name" => "John", "age" => 30, "city" => "New York");
$json = json_encode($array, JSON_PRETTY_PRINT);
echo $json;
/*
Output:
{
    "name": "John",
    "age": 30,
    "city": "New York"
}
*/
?> -->

<!-- <?php
$array = array("name" => "John", "city" => "??");
$json = json_encode($array, JSON_UNESCAPED_UNICODE);
echo $json; // Output: {"name":"John","city":"??"}
?> -->


<?php
$array = array("quantity" => "100");
$json = json_encode($array, JSON_NUMERIC_CHECK);
echo $json; // Output: {"quantity":100}
?>


If json_encode() fails, it returns false. You can use json_last_error() to get the error code and json_last_error_msg() to get a descriptive error message.
<?php
$array = array("name" => "John", "data" => fopen("file.txt", "r"));
$json = json_encode($array);
if ($json === false) {
    echo 'JSON encoding error: ' . json_last_error_msg();
}
?>
