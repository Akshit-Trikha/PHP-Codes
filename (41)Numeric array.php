WAP in php to demonstrate numeric array
<br>
<?php

/* First method to create array. */
$numbers = array( 1, 2, 3, 4, 5);
 
foreach( $numbers as $value )
{
    echo "Value is $value\<br>";
}
 
/* Second method to create array. */
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach( $numbers as $value )
{
    echo "Value is $value\<br>";
}

echo "<br>";
    echo "This Program is written by Akshit Trikha, 0221BCA008"
?>