WAP in php to demonstrate date_add function
<br>
<!DOCTYPE html>
<html>
<body>

<?php

    //Calculate the sunrise time for Lisbon, Portugal
    //Latitude: 38.4 North
    //Longitude: 9 West
    //Zenith ~= 90
    //offset: +1 GMT
    
    echo "Lisbon, Portugal\n";
    echo("Date: " . date("D M d Y"));
    echo("<br>Sunrise time: ");
    echo(date_sunrise(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
    echo("<br>Sunset time: ");
    echo(date_sunset(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));

?>

<br>
    echo "This Program is written by Akshit Trikha, 0221BCA008"
</body>
</html>
