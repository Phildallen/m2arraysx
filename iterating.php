<?php


echo '<h1>Iterating Through Arrays</h1>';

$days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

$personalDeatails = [
    'name' => 'Jane Doe',
    'age' =>  21,
    'town' => 'Bath'
];


echo '<h2>While Loop</h2>';

$dayArrayLength = count($days);

$i = 0;
//A count controlled while loop
while ($i < $dayArrayLength) {
    echo '<p>' . $days[$i] . '</p>';
    $i++;
}

echo '<h2>For Loop</h2>';

for($i = 0; $i < $dayArrayLength; $i++) {
    echo '<p>' . $days[$i] . '</p>';
}

echo '<h2>Foreach Loop</h2>';

foreach ($days as $day) {
    echo '<p>' . $day . '</p>';
}

foreach ($days as $day) {
    if ($day === 'Sat') { //misses Sat out
        continue; // means jump back to foreach, miss everything below
    }
    echo '<p>' . $day . '</p>';
}

foreach ($personalDeatails as $detail) {
    echo '<p>' . $detail . '</p>';
}

foreach ($personalDeatails as $key => $detail) { //the variable before the => receives the key, doesn't have to be $key
    echo '<p>' . $key . ' is ' . $detail . '</p>';
}

echo '<h2>Even numbers from an array 1 - 10</h2>';

$nums = [1,2,3,4,5,6,7,8,9,10];

for($i = 1; $i < count($nums); $i += 2) {
    echo '<p>' . $nums[$i] . '</p>';
}
//using modulos
foreach ($nums as $num) {
    if ($num % 2 === 0 ) {
        echo '<p>' . $num. '</p>';
    }
}
