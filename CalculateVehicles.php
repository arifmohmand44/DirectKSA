<?php

function CalculateVehicles($countOfPassengers) {
    // Validate input
    if ($countOfPassengers <= 0) {
        return 0;
    }
    
    // Calculate vehicles needed (each vehicle holds max 5 passengers)
    $vehiclesRequired = ceil($countOfPassengers / 5);
    
    return $vehiclesRequired;
}

// Example usage:
echo CalculateVehicles(0);   // Output: 0
echo CalculateVehicles(5);   // Output: 1
echo CalculateVehicles(10);  // Output: 2
echo CalculateVehicles(12);  // Output: 3
echo CalculateVehicles(23);  // Output: 5

?>
