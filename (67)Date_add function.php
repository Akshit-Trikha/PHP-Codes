WAP in php to demonstrate date_add function
<br>
<!DOCTYPE html>
<html>
<body>

<?php

    $date=date_create("2024-02-21");
    date_add($date,date_interval_create_from_date_string("40 days"));
    echo date_format($date,"Y-m-d");

?>

<br>
    echo "This Program is written by Akshit Trikha, 0221BCA008"
</body>
</html>