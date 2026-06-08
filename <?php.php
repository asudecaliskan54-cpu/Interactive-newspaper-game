<?php
$servername = "localhost"; // Database server (adjust as needed)
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "MysteryGame";

try {
    // Connect to MySQL server
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $conn->exec($sql);
    echo "Database created successfully<br>";

    // Select database
    $conn->exec("USE $dbname");

    // Create TestQuestions table
    $sql = "
        CREATE TABLE IF NOT EXISTS TestQuestions (
            id INT AUTO_INCREMENT PRIMARY KEY,
            question TEXT NOT NULL,
            correct_answer VARCHAR(255) NOT NULL
        );
    ";
    $conn->exec($sql);
    echo "Table TestQuestions created successfully<br>";

    // Insert questions into TestQuestions
    $sql = "
        INSERT INTO TestQuestions (question, correct_answer) VALUES
        ('Who has found the dead body near the Gala?', 'Det. Evans'),
        ('What was the name of the victim?', 'Jonathan Price'),
        ('Who called the police after hearing a loud noise?', 'Mr. Smith'),
        ('Where was the victim found?', 'lake'),
        ('Who is the owner of Essence Allure?', 'Ms. Davenport'),
        ('What is the answer of the Riddle Corner?', 'Moon');
    ";
    $conn->exec($sql);
    echo "Questions inserted into TestQuestions table successfully<br>";

    // Create KillerQuestion table
    $sql = "
        CREATE TABLE IF NOT EXISTS KillerQuestion (
            id INT AUTO_INCREMENT PRIMARY KEY,
            question TEXT NOT NULL,
            correct_answer VARCHAR(255) NOT NULL
        );
    ";
    $conn->exec($sql);
    echo "Table KillerQuestion created successfully<br>";

    // Insert question into KillerQuestion
    $sql = "
        INSERT INTO KillerQuestion (question, correct_answer) VALUES
        ('Who is the murderer?', 'Mr. Smith');
    ";
    $conn->exec($sql);
    echo "Question inserted into KillerQuestion table successfully<br>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
