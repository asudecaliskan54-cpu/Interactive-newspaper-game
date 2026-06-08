CREATE DATABASE MysteryGame;

USE MysteryGame;

-- Creating the TestQuestions table
CREATE TABLE TestQuestions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    correct_answer VARCHAR(255) NOT NULL
);

-- Inserting data into TestQuestions
INSERT INTO TestQuestions (question, correct_answer) VALUES
('Who has found the dead body near the Gala?', 'Det. Evans'),
('What was the name of the victim?', 'Jonathan Price'),
('Who called the police after hearing a loud noise?', 'Mr. Smith'),
('Where was the victim found?', 'Lake'),
('Who is the owner of Essence Allure?', 'Ms. Davenport'),
('What is the answer of the Riddle Corner?', 'Moon');


-- Creating the KillerQuestion table
CREATE TABLE KillerQuestion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    correct_answer VARCHAR(255) NOT NULL
);

-- Inserting data into KillerQuestion
INSERT INTO KillerQuestion (question, correct_answer) VALUES
('Who is the murderer?', 'Ms. Davenport');

-- Query to check all questions and answers
SELECT 'TestQuestions' AS TableName, id, question, correct_answer FROM TestQuestions
UNION ALL
SELECT 'KillerQuestion' AS TableName, id, question, correct_answer FROM KillerQuestion;
