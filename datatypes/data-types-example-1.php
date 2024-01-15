<?php

// 1. bool
$is_completed = true;

var_dump($is_completed);
echo "<br>";
echo gettype($is_completed);
echo "<br>";
// 2. int
$age = 30;
var_dump($age);
echo "<br>";
// 3. float
$deposit = 4000.55;
var_dump($deposit);
echo "<br>";
// 4. string
$msg = "John, 348976589, 33";
var_dump($msg);
echo "<br>";
// 5. array
    # indexed
    $students = ["John", "Mary", "Erick", "Mitchelle"];
    var_dump($students);
    echo "<br>";
    # associative
    $user_input = array("username" => "John", "email" => "john@gmail.com", "password" => "John$$0000");
    var_dump($user_input);

    echo "<br>";
// 6. object
// 7. null
$cart = null;
var_dump($cart);
// 8. resource