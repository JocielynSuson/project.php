<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Constants in PHP</title>
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
        <h2>Using Constants in PHP</h2>

        <!-- Explanation of Constants -->
        <p>In PHP, constants are defined using the <code>define()</code> function or the <code>const</code> keyword. Constants are case-sensitive and cannot be changed once defined. Here are examples of 10 constants:</p>

        <!-- PHP Code for Defining and Displaying Constants -->
        <?php
            // Defining constants using define()
            define("SITE_NAME", "My Website");            // Website name
            define("VERSION", "2.3.1");                   // Version of the site
            define("MAX_USERS", 500);                     // Maximum number of users allowed
            define("PI", 3.14159);                        // Value of Pi
            define("GRAVITY", 9.81);                      // Gravitational constant (m/s^2)
            define("PLANET", "Earth");                    // Planet name
            define("SPEED_OF_LIGHT", 299792458);          // Speed of light in m/s
            define("SECONDS_IN_MINUTE", 60);              // Number of seconds in a minute
            define("DAYS_IN_YEAR", 365);                  // Number of days in a year
            define("IS_LOGGED_IN", true);                 // Boolean constant for user login status

            // Displaying constant values with examples
            echo "<p><strong>Site Name:</strong> " . SITE_NAME . "</p>";
            echo "<p><strong>Version:</strong> " . VERSION . "</p>";
            echo "<p><strong>Maximum Users Allowed:</strong> " . MAX_USERS . "</p>";
            echo "<p><strong>Value of Pi:</strong> " . PI . "</p>";
            echo "<p><strong>Gravitational Constant (Gravity):</strong> " . GRAVITY . " m/s²</p>";
            echo "<p><strong>Our Planet:</strong> " . PLANET . "</p>";
            echo "<p><strong>Speed of Light:</strong> " . SPEED_OF_LIGHT . " m/s</p>";
            echo "<p><strong>Seconds in a Minute:</strong> " . SECONDS_IN_MINUTE . "</p>";
            echo "<p><strong>Days in a Year:</strong> " . DAYS_IN_YEAR . "</p>";
            echo "<p><strong>User Logged In Status (Boolean):</strong> " . (IS_LOGGED_IN ? 'Yes' : 'No') . "</p>";
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