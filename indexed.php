<?php

echo '<h1>Indexed Arrays</h1>';

$days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];


echo '<pre>';
print_r($days);
echo '<pre>';

echo $days[1];

// mon is key 0, not 1

$rando = [1 => 'One', 4 => 'Four', 7 => 'Seven'];

echo '<pre>';
print_r($rando);
echo '<pre>';

$rando[]='Nine';

echo '<pre>';
print_r($rando);
echo '<pre>';
