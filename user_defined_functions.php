
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-defined Functions: Grade Calculator</title>
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
        h1, h2, h3, h4 {
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
            margin: 5px 0;
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
    <h1>User-defined Functions (Grade Calculator)</h1>

    <!-- Task Description -->
    <p>This page implements a grade calculator that processes scores for multiple students, calculates grades, and provides insights into their performance using user-defined functions.</p>

    <h2>Grade Definitions:</h2>
    <ul>
        <li><strong>A:</strong> Excellent (90-100) - Outstanding performance and mastery of the subject.</li>
        <li><strong>B:</strong> Good (80-89) - Above average understanding and performance.</li>
        <li><strong>C:</strong> Average (70-79) - Basic understanding of the material; meets minimum requirements.</li>
        <li><strong>D:</strong> Below Average (60-69) - Limited understanding; improvement needed.</li>
        <li><strong>F:</strong> Fail (0-59) - Fails to meet the minimum criteria; requires significant improvement.</li>
    </ul>

    <?php
        // Function to calculate grade based on score
        function calculateGrade($score) {
            if ($score >= 90) {
                return "A";
            } elseif ($score >= 80) {
                return "B";
            } elseif ($score >= 70) {
                return "C";
            } elseif ($score >= 60) {
                return "D";
            }
            return "F";
        }

        // Function to check if a student passed
        function hasPassed($grade) {
            return $grade !== "F";
        }

        // Function to calculate average of scores
        function calculateAverage($scores) {
            $total = array_sum($scores);
            return $total / count($scores);
        }

        // Function to list all grades
        function listGrades($scores) {
            foreach ($scores as $score) {
                echo "<li>Score: $score, Grade: " . calculateGrade($score) . "</li>";
            }
        }

        // Function to determine highest grade
        function highestGrade($scores) {
            return calculateGrade(max($scores));
        }

        // Function to determine lowest grade
        function lowestGrade($scores) {
            return calculateGrade(min($scores));
        }

        // Function to count the number of passing grades
        function countPassingGrades($scores) {
            $count = 0;
            foreach ($scores as $score) {
                if (hasPassed(calculateGrade($score))) {
                    $count++;
                }
            }
            return $count;
        }

        // Function to count the number of failing grades
        function countFailingGrades($scores) {
            return count($scores) - countPassingGrades($scores);
        }

        // Function to display results
        function displayResults($scores) {
            echo "<h3>Results:</h3>";
            echo "<p>Average Score: " . calculateAverage($scores) . "</p>";
            echo "<p>Highest Grade: " . highestGrade($scores) . "</p>";
            echo "<p>Lowest Grade: " . lowestGrade($scores) . "</p>";
            echo "<p>Number of Passing Grades: " . countPassingGrades($scores) . "</p>";
            echo "<p>Number of Failing Grades: " . countFailingGrades($scores) . "</p>";
            echo "<h4>All Grades:</h4><ul>";
            listGrades($scores);
            echo "</ul>";
        }

        // Sample student scores
        $studentScores = [85, 92, 78, 60, 55, 89, 73, 95, 80];

        // Display the results for the sample scores
        displayResults($studentScores);
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