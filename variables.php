<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use of Variables</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        h3 {
            color: #555;
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
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
        <h2>Use of Variables in PHP</h2>
        
        <!-- Explanation of Variables -->
        <p>In this task, we will declare 20 variables representing various attributes of items, categorized into whole numbers, floating point numbers, strings, and characters.</p>

        <!-- PHP Code for Demonstrating Variables -->
        <?php
            // Declare whole numbers (item quantities)
            $quantityItem1 = 12;
            $quantityItem2 = 14;
            $quantityItem3 = 8;
            $quantityItem4 = 3;
            $quantityItem5 = 2001;

            // Declare floating point numbers (item prices)
            $priceItem1 = 19.99;
            $priceItem2 = 34.50;
            $priceItem3 = 15.75;
            $priceItem4 = 22.80;
            $priceItem5 = 9.99;

            // Declare strings (item descriptions)
            $descriptionItem1 = "Pizza";
            $descriptionItem2 = "Onion";
            $descriptionItem3 = "Teddy";
            $descriptionItem4 = "Labubu";
            $descriptionItem5 = "Liptint";

            // Declare characters (item ratings)
            $ratingItem1 = 'A';
            $ratingItem2 = 'B';
            $ratingItem3 = 'C';
            $ratingItem4 = 'A';
            $ratingItem5 = 'B';

            // Display whole numbers
            echo "<h3>Item Quantities:</h3>";
            echo "<p>Quantity of $descriptionItem1: $quantityItem1</p>";
            echo "<p>Quantity of $descriptionItem2: $quantityItem2</p>";
            echo "<p>Quantity of $descriptionItem3: $quantityItem3</p>";
            echo "<p>Quantity of $descriptionItem4: $quantityItem4</p>";
            echo "<p>Quantity of $descriptionItem5: $quantityItem5</p>";

            // Display floating point numbers
            echo "<h3>Item Prices:</h3>";
            echo "<p>Price of $descriptionItem1: $$priceItem1</p>";
            echo "<p>Price of $descriptionItem2: $$priceItem2</p>";
            echo "<p>Price of $descriptionItem3: $$priceItem3</p>";
            echo "<p>Price of $descriptionItem4: $$priceItem4</p>";
            echo "<p>Price of $descriptionItem5: $$priceItem5</p>";

            // Display strings
            echo "<h3>Item Descriptions:</h3>";
            echo "<p>Item 1: $descriptionItem1</p>";
            echo "<p>Item 2: $descriptionItem2</p>";
            echo "<p>Item 3: $descriptionItem3</p>";
            echo "<p>Item 4: $descriptionItem4</p>";
            echo "<p>Item 5: $descriptionItem5</p>";

            // Display characters
            echo "<h3>Item Ratings:</h3>";
            echo "<p>Rating of $descriptionItem1: $ratingItem1</p>";
            echo "<p>Rating of $descriptionItem2: $ratingItem2</p>";
            echo "<p>Rating of $descriptionItem3: $ratingItem3</p>";
            echo "<p>Rating of $descriptionItem4: $ratingItem4</p>";
            echo "<p>Rating of $descriptionItem5: $ratingItem5</p>";
        ?>

        <p><a href="mainPage.php">Back to Main Page</a></p>

        <footer>
            <p>Creator: Jocielyn G. Suson</p>
            <p>Date Created: October 15, 2024</p>
        </footer>
    </div>

</body>
</html>