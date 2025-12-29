<?php

// 1. Sort array of objects by age (descending)
function sortByAgeDescending(&$arrayOfObjects) {
    usort($arrayOfObjects, function($a, $b) {
        return $b['age'] - $a['age']; // Descending order
    });
    return $arrayOfObjects;
}

// 2. Extract just the ages into an array
function extractAges($arrayOfObjects) {
    return array_map(function($obj) {
        return $obj['age'];
    }, $arrayOfObjects);
    
    // Alternative using array_column:
    // return array_column($arrayOfObjects, 'age');
}

// 3. Convert array of objects to array of arrays, keyed by age
function convertToArraysByAge($arrayOfObjects) {
    $result = [];
    
    foreach ($arrayOfObjects as $obj) {
        $age = $obj['age'];
        if (!isset($result[$age])) {
            $result[$age] = [];
        }
        $result[$age][] = $obj;
    }
    
    return $result;
}

// Example usage:
$arrayOfObjects = [
    ['id' => 1, 'name' => 'John', 'age' => '20'],
    ['id' => 2, 'name' => 'Jane', 'age' => '21'],
    ['id' => 3, 'name' => 'Jack', 'age' => '22'],
];

//Question#1. a function that sorts the given $arrayOfObjects by age, Descendingly
sortByAgeDescending($arrayOfObjects);
print_r($arrayOfObjects);

//Question#2. a function that returns array of just the ages such as [20, 21, 22
$ages = extractAges($arrayOfObjects);
print_r($ages); // Output: [22, 21, 20]

//Question#3. a function that converts the $arrayOfObjects to $arrayOfArrays using the 'age'  as array key
$byAge = convertToArraysByAge($arrayOfObjects);
print_r($byAge);
?>
