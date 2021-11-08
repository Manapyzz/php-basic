<?php

$identity = [
    'lastname' => 'Sanchez',
    'firstname' => 'Rick',
    'age' => 70,
    'isAdult' => true
]; // tableau assiociatifs

echo sprintf('%s et %s', $identity['firstname'], $identity['age']);