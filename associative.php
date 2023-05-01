<?php

echo '<h1>Associative Arrays</h1>';

$personalDetails = [
    'name' => 'Jane Doe',
    'age' =>  21,
    'town' => 'Bath'
];

echo '<pre>';
print_r($personalDetails);
echo '<pre>';

echo '<p>' . $personalDetails['name']
    . "'s age is " . $personalDetails['age'] . '</p>';

$personalDetails['favColour'] = 'Red';

echo '<pre>';
print_r($personalDetails);
echo '<pre>';

echo count($personalDetails) . ' elements in personal details';
