WAP in php to demonstrate ksort() an array in assscending order by key
<br>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sorting PHP Associative Array in Assscending Order by key</title>
</head>
<body>
<?php

    // Define array
    $age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
     
    // Sorting array by value and print
    ksort($age);
    print_r($age);

?>

<br>
    echo "This Program is written by Akshit Trikha, 0221BCA008"

</body>
</html>
