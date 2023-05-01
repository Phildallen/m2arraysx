<?php

echo '<h1>Array exercise 1</h1>';

$trainees = ['Adam', 'Brent', 'Micheal', 'Anna', 'Dom', 'Henry', 'James', 'Phil'];

foreach ($trainees as $trainee) {
    echo '<p>' . $trainee . '</p>';
}

echo '<h1>Array exercise 2</h1>';

$nums =[1, 2, 3, 4, 5, 6, 7, 8];

$nums[]= 9;
array_push($nums, 10);

Shuffle($nums);

foreach ($nums as $num) {
    if ($num % 2 === 0 ) {
        echo '<p>' . $num. '</p>';
    }
}

foreach ($nums as $num) {
    if ($num % 2 === 1 ) {
        echo '<p>' . $num. '</p>';
    }
}