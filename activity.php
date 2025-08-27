<?php
// activity.php - A script to demonstrate basic string and array manipulations in PHP.

echo "<h1>PHP Activity</h1>";


echo '
<form method="GET" action="activity.php">
    <label for="input">Enter a string:</label>
    <input type="text" id="input" name="input" value="' . (isset($_GET['input']) ? htmlspecialchars($_GET['input']) : '') . '">
    <br><br>
    <label for="new_fruit">Add a fruit:</label>
    <input type="text" id="new_fruit" name="new_fruit" value="' . (isset($_GET['new_fruit']) ? htmlspecialchars($_GET['new_fruit']) : '') . '">
    <br><br>
    <input type="submit" value="Submit">
</form>
<hr>
';


echo "<h2>Part 1: String Manipulation</h2>";


$input_string = " asdasidjisadoa ";


if (isset($_GET['input'])) {
   
    $input_string = htmlspecialchars($_GET['input']);
}


echo "Original: " . $input_string . "<br>";
echo "Uppercase: " . strtoupper($input_string) . "<br>";
echo "Lowercase: " . strtolower($input_string) . "<br>";
echo "Ucfirst: " . ucfirst($input_string) . "<br>";
echo "Ucwords: " . ucwords($input_string) . "<br>";
echo "Trimmed: " . trim($input_string) . "<br>";


echo "<h2>Part 2: Arrays</h2>";

$fruits = [];


if (isset($_GET['new_fruit']) && !empty($_GET['new_fruit'])) {
    
    array_push($fruits, htmlspecialchars($_GET['new_fruit']));
}


echo "Array contents:<br>";
if (!empty($fruits)) {
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }
} else {
    echo "No fruits added yet.<br>";
}


echo "Array size: " . count($fruits) . "<br>";

?>
