// Prac_07 - Sam Barrett 13038579
// Commented out lines of code are still being echoed in the PHPStorm terminal when run and in the browser?

<?php
echo "Hello, world\n";

$votingAge = 18;
echo "<p>The legal voting age is: ", $votingAge, ".</p>\n";

$a = 100;
$b = 999;
if ($a > $b)
    echo "a is bigger than b\n";
else
    echo "a is less than b\n";

$array = array(
    "Sam",
    "Sarah",
    "Tony",
    "Rachael",
);
echo "First name : ", $array[3], "\n";

for ($index = 0; $index < count($array); $index++) {
    echo $array[$index] . "\n";
}

$x = 1;
$y = 3;
while ($x <= $y) {
    echo $x . "\n";
    $x++;
}

foreach ($array as $firstName) {
    echo $firstName . "\n";
}
function getName($arrayInput, $a = 0) {
    return $arrayInput[$a];
}
$firstName = '';
$firstName = getName($array, 2);
echo "First name : ", $firstName, "\n";

function returnNumberOfDay($day = ''): ?int {
    $number;
    switch ($day) {
        case 'Monday': $number = 0;
        break;
        case 'Tuesday': $number = 1;
        break;
        case 'Wednesday': $number = 2;
        break;
        case 'Thursday': $number = 3;
        break;
        case 'Friday': $number = 4;
        break;
        case 'Saturday': $number = 5;
        break;
        case 'Sunday': $number = 6;
        break;
        default: echo "Enter day of the week as a string";
        break;
    }
    if (is_null($number)) {
        return null;
    } else {
        return $number;
    }
}
echo returnNumberOfDay("Friday") . "\n";
echo returnNumberOfDay("") . "\n";
echo returnNumberOfDay("Monday") . "\n";


?>