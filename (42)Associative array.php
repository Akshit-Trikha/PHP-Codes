WAP in php to demonstrate associative array
<br>
<html>
<body>

<?php
    /* First method to associate create array. */
    $salaries = array("roshan" => 2000, "twinkle" => 1000, "zara" => 500);

    echo "Salary of Roshan is " . $salaries['roshan'] . "<br />";
    echo "Salary of Twinkle is " . $salaries['twinkle'] . "<br />";
    echo "Salary of Zara is " . $salaries['zara'] . "<br />";

    /* Second method to create array. */
    $salaries['roshan'] = "high";
    $salaries['qadir'] = "medium";
    $salaries['twinkle'] = "low";

    echo "Salary of Roshan is " . $salaries['roshan'] . "<br />";
    echo "Salary of Twinkle is " . $salaries['twinkle'] . "<br />";
    echo "Salary of Zara is " . $salaries['zara'] . "<br />";
    echo "<br>";
    echo "This Program is written by Akshit Trikha, 0221BCA008"
    ?>

</body>
</html>