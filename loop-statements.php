<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Statements in PHP</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
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
        <h2>Loop Statements in PHP</h2>

        <!-- Brief Description -->
        <p>
            This page demonstrates various loop statements in PHP using different tasks. 
            It generates a multiplication table using a for loop, calculates Fibonacci series using a while loop, 
            and computes the factorial of a number and the summation of numbers using a do...while loop.
        </p>

        <!-- Declare Variables -->
        <?php
            $n = 5; // First number for multiplication and Fibonacci
            $m = 6; // Second number for Fibonacci and summation
        ?>

        <!-- Multiplication Table using For Loop -->
        <h3>Multiplication Table (n x m) Using For Loop</h3>
        <table border="1" cellspacing="0" cellpadding="5" style="margin: 0 auto;">
            <tr>
                <th>x</th>
                <?php
                    // Display header row
                    for ($i = 1; $i <= $m; $i++) {
                        echo "<th>$i</th>";
                    }
                ?>
            </tr>
            <?php
                // Generate multiplication table
                for ($i = 1; $i <= $n; $i++) {
                    echo "<tr><td><strong>$i</strong></td>";
                    for ($j = 1; $j <= $m; $j++) {
                        echo "<td>" . ($i * $j) . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>

        <!-- Fibonacci Series using While Loop -->
        <h3>Fibonacci Series for n and m Using While Loop</h3>
        <?php
            // Function to generate Fibonacci series
            function fibonacci($num) {
                $f1 = 0;
                $f2 = 1;
                $i = 0;

                echo "<p>Fibonacci series for $num terms: ";
                while ($i < $num) {
                    // Always print the current Fibonacci number
                    echo $f1;
                    // Print a comma only if it's not the last number
                    if ($i < $num - 1) {
                        echo ", ";
                    }
                    // Generate the next Fibonacci number
                    $next = $f1 + $f2;
                    $f1 = $f2;
                    $f2 = $next;
                    $i++;
                }
                echo "</p>";
            }

            // Display Fibonacci series for n and m
            fibonacci($n);
            fibonacci($m);
        ?>

        <!-- Factorial of n and Summation of m using Do...While Loop -->
        <h3>Factorial of n and Summation of m Using Do...While Loop</h3>
        <?php
            // Factorial of n using do...while loop
            $factorial = 1;
            $i = $n;
            do {
                $factorial *= $i;
                $i--;
            } while ($i > 0);
            echo "<p>Factorial of $n is: $factorial</p>";

            // Summation of m using do...while loop
            $summation = 0;
            $i = 1;
            do {
                $summation += $i;
                $i++;
            } while ($i <= $m);
            echo "<p>Summation of numbers from 1 to $m is: $summation</p>";
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