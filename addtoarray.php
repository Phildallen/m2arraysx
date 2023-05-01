<?php

echo '<h1>Added to Arrays</h1>';

$programmingLanguages = ['PHP', 'C++', 'C#', 'Python', 'Java'];

$programmingLanguages[] = 'Ruby';

array_push($programmingLanguages, 'Pearl', 'C');

echo '<pre>';
print_r($programmingLanguages);
echo '<pre>';


$personalDetails = [
    'name' => 'Jane Doe',
    'age' =>  21,
    'town' => 'Bath'
];
// Don't do this an associative array. Array push cannot accept keys. Use [] bracket syntax
array_push($personalDetails, 'Pearl', 'C');

echo '<pre>';
print_r($personalDetails);
echo '<pre>';
