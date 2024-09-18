<?php

$matrix = [
    [12, 23, 34],
    [45, 55, 62],
    [71, 84, 90]
];

$row = 0;

echo "<ul>";
while ($row < count($matrix)) {
    $col = 0;
    while ($col < count($matrix[$row])) {
        // Check if the element is even
        if ($matrix[$row][$col] % 2 == 0) {
            echo "<li>" . $matrix[$row][$col] . "</li>";
        }
        $col++;
    }
    $row++;
}
echo "</ul>";
?>