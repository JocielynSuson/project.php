<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Math Functions in PHP</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 600px;
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
        <h2>Using Math Functions in PHP</h2>

        <!-- Explanation of Math Functions -->
        <p>This page demonstrates the use of 15 different math functions in PHP using 5 floating point numbers and 5 whole numbers.</p>

        <!-- PHP Code for Demonstrating Math Functions -->
        <?php
            // Declare five floating point numbers
            $float1 = 12.34;
            $float2 = -56.78;
            $float3 = 45.67;
            $float4 = 98.76;
            $float5 = -123.45;

            // Declare five whole numbers
            $int1 = 12;
            $int2 = -20;
            $int3 = 14;
            $int4 = 23;
            $int5 = -24;

            // Math function examples
            $absolute = abs($float2); // Absolute value
            $squareRoot = sqrt($float3); // Square root
            $power = pow($int1, 3); // 10 raised to the power of 3
            $rounded = round($float1, 1); // Rounding to 1 decimal place
            $max = max($int1, $int2, $int3); // Find the maximum number
            $min = min($int4, $int5, $float4); // Find the minimum number
            $floor = floor($float1); // Rounding down
            $ceil = ceil($float3); // Rounding up
            $random = rand(1, 100); // Generate random number between 1 and 100
            $logarithm = log(10); // Natural logarithm
            $exponential = exp(2); // Exponential of 2 (e^2)
            $sine = sin(deg2rad(30)); // Sine of 30 degrees
            $cosine = cos(deg2rad(60)); // Cosine of 60 degrees
            $tangent = tan(deg2rad(45)); // Tangent of 45 degrees
            $hypotenuse = hypot(3, 4); // Calculate the hypotenuse of a right triangle (3, 4)

            // Display the results
            echo "<p><strong>Absolute Value (abs) of $float2:</strong> $absolute</p>";
            echo "<p><strong>Square Root (sqrt) of $float3:</strong> " . number_format($squareRoot, 2) . "</p>";
            echo "<p><strong>$int1 Raised to Power 3 (pow):</strong> $power</p>";
            echo "<p><strong>Rounded $float1 (round):</strong> $rounded</p>";
            echo "<p><strong>Maximum of $int1, $int2, $int3 (max):</strong> $max</p>";
            echo "<p><strong>Minimum of $int4, $int5, $float4 (min):</strong> $min</p>";
            echo "<p><strong>Floor of $float1 (floor):</strong> $floor</p>";
            echo "<p><strong>Ceiling of $float3 (ceil):</strong> $ceil</p>";
            echo "<p><strong>Random Number (rand) between 1 and 100:</strong> $random</p>";
            echo "<p><strong>Natural Logarithm (log) of 10:</strong> " . number_format($logarithm, 2) . "</p>";
            echo "<p><strong>Exponential (exp) of 2:</strong> " . number_format($exponential, 2) . "</p>";
            echo "<p><strong>Sine (sin) of 30 degrees:</strong> " . number_format($sine, 2) . "</p>";
            echo "<p><strong>Cosine (cos) of 60 degrees:</strong> " . number_format($cosine, 2) . "</p>";
            echo "<p><strong>Tangent (tan) of 45 degrees:</strong> " . number_format($tangent, 2) . "</p>";
            echo "<p><strong>Hypotenuse (hypot) of 3 and 4:</strong> $hypotenuse</p>";
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