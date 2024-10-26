<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulating Numbers - Grade Calculation</title>
    <style>
        .container {
            width: 500px;
            margin: 50px auto;
            padding: 30px;
            border: 1px solid #000;
            text-align: center;
        }
        footer {
            margin-top: 30px;
        } body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 500px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #e9ecef;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }
        strong {
            color: #333;
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
        <h2>Manipulating Numbers - Grade Calculation</h2>

        <!-- Problem Explanation -->
        <p>This page computes the midterm, tentative final, and final-final grades of students based on quizzes, projects, and midterm exam results.</p>
        <ul>
            <li><strong>Grade Calculation Formula:</strong></li>
            <li>Grade = (Average Quizzes * 30%) + (Average Projects * 20%) + (Midterm Exam * 50%)</li>
            <li>Final-Final Grade = (Midterm Grade + Tentative Final Grade) / 2</li>
        </ul>

        <!-- PHP Code for Grade Calculation -->
        <?php
            // Sample data for quizzes, projects, and midterm exam
            $quizzes = [90, 85, 78, 92, 88]; // Example quiz scores
            $projects = [80, 85]; // Example project scores
            $midterm_exam = 82; // Example midterm exam score
            
            // Function to calculate the average of an array
            function calculateAverage($scores) {
                return array_sum($scores) / count($scores);
            }

            // Calculate average of quizzes and projects
            $average_quizzes = calculateAverage($quizzes);
            $average_projects = calculateAverage($projects);

            // Compute midterm grade using the grading formula
            $midterm_grade = ($average_quizzes * 0.3) + ($average_projects * 0.2) + ($midterm_exam * 0.5);

            // Tentative final grade is equal to midterm grade in this scenario
            $tentative_final_grade = $midterm_grade;

            // Compute final-final grade as the average of midterm and tentative final grades
            $final_final_grade = ($midterm_grade + $tentative_final_grade) / 2;

            // Display the calculated results
            echo "<p><strong>Average Quiz Scores:</strong> " . number_format($average_quizzes, 2) . "</p>";
            echo "<p><strong>Average Project Scores:</strong> " . number_format($average_projects, 2) . "</p>";
            echo "<p><strong>Midterm Exam Score:</strong> $midterm_exam</p>";
            echo "<p><strong>Midterm Grade:</strong> " . number_format($midterm_grade, 2) . "</p>";
            echo "<p><strong>Tentative Final Grade:</strong> " . number_format($tentative_final_grade, 2) . "</p>";
            echo "<p><strong>Final-Final Grade:</strong> " . number_format($final_final_grade, 2) . "</p>";
        ?>

        <!-- Back to Main Page link -->
        <p><a href="mainPage.php">Back to Main Page</a></p>

        <!-- Footer with creator info and date -->
        <footer>
            <p>Creator: Jocielyn G. Suson</p>
            <p>Date Created: October 15, 2024</p>
        </footer>
    </div>

</body>
</html>