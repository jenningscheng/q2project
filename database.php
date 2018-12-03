<?php
include "config.php"
$sql = "CREATE DATABASE questionBank";
         
         if (mysqli_query($conn, $sql)) {
           // echo "Database created successfully";
         } else {
           // echo "Error creating database: " . mysqli_error($conn);
         }
mysqli_select_db($conn, 'questionBank');
// sql to create table
$sql = "CREATE TABLE questions (
answer BOOLEAN() AUTO_INCREMENT PRIMARY KEY, 
question VARCHAR(30) NOT NULL,

)";

if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
sql = "INSERT INTO questions (question, answer)
VALUES ('There are 365 days in a year', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer)
VALUES ('PHP is a client-side scripting language', 'F')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer)
VALUES ('The population of the U.S. is more than 330 million', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer)
VALUES ('The last solar eclipse in the U.S. happened in 2017', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer)
VALUES ('Java is a scripting language', 'F')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

?>
