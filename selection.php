<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Statements in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #333;
        }
        h3 {
            color: #555;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        footer {
            margin-top: 30px;
            text-align: center;
            color: #777;
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

    <div class="container">
        <h2>Selection Statements in PHP</h2>

        <!-- Brief Description -->
        <p>
            This page demonstrates the use of selection statements in PHP. 
            It sorts five string variables in ascending and descending order, 
            and checks if the first integer is divisible by the fifth integer. 
            Based on the result, it either calculates the sum, product, and average of the integers, 
            or sorts them in ascending order.
        </p>

        <!-- PHP Code -->
        <?php
            // Initialize five string variables
            $strings = ["Mikha", "Aiah", "Colet", "Maloi", "Stacey"];

            // Initialize five integer variables
            $numbers = [25, 15, 40, 10, 5];

            // Custom function to sort strings in ascending order (Bubble sort)
            function sortStringsAsc($arr) {
                for ($i = 0; $i < count($arr) - 1; $i++) {
                    for ($j = 0; $j < count($arr) - $i - 1; $j++) {
                        if (strcmp($arr[$j], $arr[$j + 1]) > 0) {
                            // Swap if the current string is greater than the next string
                            $temp = $arr[$j];
                            $arr[$j] = $arr[$j + 1];
                            $arr[$j + 1] = $temp;
                        }
                    }
                }
                return $arr;
            }

            // Custom function to sort strings in descending order (Bubble sort)
            function sortStringsDesc($arr) {
                for ($i = 0; $i < count($arr) - 1; $i++) {
                    for ($j = 0; $j < count($arr) - $i - 1; $j++) {
                        if (strcmp($arr[$j], $arr[$j + 1]) < 0) {
                            // Swap if the current string is less than the next string
                            $temp = $arr[$j];
                            $arr[$j] = $arr[$j + 1];
                            $arr[$j + 1] = $temp;
                        }
                    }
                }
                return $arr;
            }

            // Display strings in ascending order
            echo "<h3>Strings in Ascending Order:</h3>";
            $sortedAscStrings = sortStringsAsc($strings);
            echo "<p>" . implode(", ", $sortedAscStrings) . "</p>";

            // Display strings in descending order
            echo "<h3>Strings in Descending Order:</h3>";
            $sortedDescStrings = sortStringsDesc($strings);
            echo "<p>" . implode(", ", $sortedDescStrings) . "</p>";

            // Check if the first number is divisible by the fifth number
            if ($numbers[0] % $numbers[4] === 0) {
                // Calculate sum, product, and average
                $sum = array_sum($numbers);
                $product = array_product($numbers);
                $average = $sum / count($numbers);

                echo "<h3>First number is divisible by the fifth number:</h3>";
                echo "<p>Sum: $sum</p>";
                echo "<p>Product: $product</p>";
                echo "<p>Average: $average</p>";
            } else {
                // Sort and display numbers in ascending order
                echo "<h3>First number is not divisible by the fifth number. Numbers in Ascending Order:</h3>";

                // Custom function to sort numbers in ascending order (Bubble sort)
                function sortNumbersAsc($arr) {
                    for ($i = 0; $i < count($arr) - 1; $i++) {
                        for ($j = 0; $j < count($arr) - $i - 1; $j++) {
                            if ($arr[$j] > $arr[$j + 1]) {
                                // Swap if the current number is greater than the next number
                                $temp = $arr[$j];
                                $arr[$j] = $arr[$j + 1];
                                $arr[$j + 1] = $temp;
                            }
                        }
                    }
                    return $arr;
                }

                $sortedNumbers = sortNumbersAsc($numbers);
                echo "<p>" . implode(", ", $sortedNumbers) . "</p>";
            }
        ?>

        <!-- Link to go back to the main page -->
        <p><a href="mainPage.php">Back to Main Page</a></p>

        <!-- Footer with creator info and date -->
        <footer>
            <p>Creator: Jocielyn G. Suson</p>
            <p>Date Created: October 15, 2024</p>
        </footer>
    </div>

</body>
</html>