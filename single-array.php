 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-dimensional Array</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            margin: 20px;
            max-width: 1500px;
            text-align: center;
            background-color: #f9f9f9;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            margin-top: 30px;
        }
        h1, h2 {
            margin: 10px 0;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
            text-align: left;
            margin: auto;
            display: inline-block;
        }
        li {
            margin: 15px 0;
            line-height: 1.6;
            color: #666;
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
    <h1>Single-dimensional Array</h1>

    <!-- Task Description -->
    <p>In this task, we will create and manipulate a single-dimensional array to store and display information about ten people.</p>

    <?php
        // Define parallel arrays for people's information
        $names = ["Mikha", "Aiah", "Colet", "Maloi", "Stacey", "Sheena", "Gwen", "Jhoana", "Rain", "Kai"];
        $ages = [25, 30, 22, 28, 35, 27, 24, 23, 31, 29];
        $sexes = ["Female", "Female", "Female", "Female", "Female", "Female", "Female", "Female", "Female", "Female"];
        $nationalities = ["American", "Canadian", "British", "Australian", "Indian", "German", "French", "Italian", "Spanish", "Dutch"];

        // Function to display people's information
        function displayPeople($names, $ages, $sexes, $nationalities) {
            echo "<h2>List of People:</h2>";
            echo "<ul>";
            for ($i = 0; $i < count($names); $i++) {
                echo "<li>Name: {$names[$i]}, Age: {$ages[$i]}, Sex: {$sexes[$i]}, Nationality: {$nationalities[$i]}</li>";
            }
            echo "</ul>";
        }

        // Function to sort people by name
        function sortPeople(&$names, &$ages, &$sexes, &$nationalities) {
            $length = count($names);
            for ($i = 0; $i < $length - 1; $i++) {
                for ($j = 0; $j < $length - $i - 1; $j++) {
                    if ($names[$j] > $names[$j + 1]) {
                        // Swap names
                        $tempName = $names[$j];
                        $names[$j] = $names[$j + 1];
                        $names[$j + 1] = $tempName;

                        // Swap ages
                        $tempAge = $ages[$j];
                        $ages[$j] = $ages[$j + 1];
                        $ages[$j + 1] = $tempAge;

                        // Swap sexes
                        $tempSex = $sexes[$j];
                        $sexes[$j] = $sexes[$j + 1];
                        $sexes[$j + 1] = $tempSex;

                        // Swap nationalities
                        $tempNationality = $nationalities[$j];
                        $nationalities[$j] = $nationalities[$j + 1];
                        $nationalities[$j + 1] = $tempNationality;
                    }
                }
            }
        }

        // Display the unsorted list
        displayPeople($names, $ages, $sexes, $nationalities);

        // Sort the people by name
        sortPeople($names, $ages, $sexes, $nationalities);

        // Display the sorted list
        echo "<h2>Sorted List of People (by Name):</h2>";
        displayPeople($names, $ages, $sexes, $nationalities);
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