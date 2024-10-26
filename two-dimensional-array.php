<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-dimensional Array</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            max-width: 800px;
            text-align: center;
            background-color: #f9f9f9;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        footer {
            margin-top: 30px;
        }
        h1, h2, h3 {
            color: #333;
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Two-dimensional Array</h1>

    <p>In this task, we will create and manipulate a two-dimensional array to store NxN integers and display various statistics.</p>

    <?php
        // Define the size of the array (n)
        $arraySize = 4; // Change this to any desired size
        $numberArray = generateRandomArray($arraySize);

        // Display the array
        displayArray($numberArray);

        // Calculate and display statistics
        displayStatistics($numberArray);
        
        // Function to generate a random NxN array
        function generateRandomArray($size) {
            $array = [];
            for ($i = 0; $i < $size; $i++) {
                for ($j = 0; $j < $size; $j++) {
                    $array[$i][$j] = rand(1, 100); // Random integers between 1 and 100
                }
            }
            return $array;
        }

        // Function to display the 2D array
        function displayArray($array) {
            echo "<h2>Array:</h2>";
            echo "<table>";
            foreach ($array as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }

      // Function to calculate and display statistics
function displayStatistics($array) {
    $overallSum = 0;
    $overallMin = PHP_INT_MAX; // Initialize overall minimum to the largest possible integer
    $overallMax = PHP_INT_MIN; // Initialize overall maximum to the smallest possible integer
    $size = count($array);
    $rowSums = [];
    $rowMins = [];
    $rowMaxs = [];
    $colSums = array_fill(0, $size, 0); // Initialize column sums to 0
    $colMins = array_fill(0, $size, PHP_INT_MAX); // Initialize column mins
    $colMaxs = array_fill(0, $size, PHP_INT_MIN); // Initialize column maxs

    for ($i = 0; $i < $size; $i++) {
        $rowSum = 0;
        for ($j = 0; $j < $size; $j++) {
            $value = $array[$i][$j];
            $rowSum += $value;
            $overallSum += $value;

            // Update overall min and max
            if ($value < $overallMin) {
                $overallMin = $value; // Update overall minimum
            }
            if ($value > $overallMax) {
                $overallMax = $value; // Update overall maximum
            }

            // Update row statistics
            if (!isset($rowMins[$i]) || $value < $rowMins[$i]) {
                $rowMins[$i] = $value;
            }
            if (!isset($rowMaxs[$i]) || $value > $rowMaxs[$i]) {
                $rowMaxs[$i] = $value;
            }

            // Update column statistics
            $colSums[$j] += $value; // Correctly adding the value to the column sum
            if ($value < $colMins[$j]) {
                $colMins[$j] = $value;
            }
            if ($value > $colMaxs[$j]) {
                $colMaxs[$j] = $value;
            }
        }
        $rowSums[$i] = $rowSum; // Store the row sum
    }

    // Calculate overall average
    $overallAverage = $overallSum / ($size * $size);

    // Display results
    echo "<h2>Statistics:</h2>";
    echo "<h3>Row Sums, Min, and Max:</h3>";
    for ($i = 0; $i < $size; $i++) {
        echo "Row " . ($i + 1) . ": Sum = $rowSums[$i], Min = $rowMins[$i], Max = $rowMaxs[$i]<br>";
    }

    echo "<h3>Column Sums, Min, and Max:</h3>";
    for ($j = 0; $j < $size; $j++) {
        echo "Column " . ($j + 1) . ": Sum = $colSums[$j], Min = {$colMins[$j]}, Max = {$colMaxs[$j]}<br>";
    }

    echo "<h3>Overall Statistics:</h3>";
    echo "Overall Sum = $overallSum<br>";
    echo "Overall Average = " . round($overallAverage, 2) . "<br>";
    echo "Overall Smallest Number = $overallMin<br>"; // Updated to display correct overall min
    echo "Overall Largest Number = $overallMax<br>";  // Updated to display correct overall max
}
    ?>

    <!-- Link to go back to the main page -->
    <p><a href="mainPage.php">Back to Main Page</a></p>

    <!-- Footer -->
    <footer>
        <p>Creator: Jocielyn G. Suson</p>
        <p>Date Created: October 15, 2024</p>
    </footer>
</body>
</html>