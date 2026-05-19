<?php
//Variables always start with $
$name = "Alice";
$age = 25;
$isAdmin = true;

//Output to page
echo "Hello". $name . "\n";

//Conditionals
if ($age>= 18){
    echo "Adult";
}
else {
        echo "Minor";
}

//Arrays
$skills = ["HTML","CSS"];
foreach ($skill as &s){
    echo "<li>" . $s . "</li>\n";
}

?>
