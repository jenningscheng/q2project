<?php
include "config.php"
$sql = "CREATE DATABASE questionBank";
         
         if (mysqli_query($conn, $sql)) {
           // echo "Database created successfully";
         } else {
           // echo "Error creating database: " . mysqli_error($conn);
         }
mysqli_select_db($conn, 'questionBank');

$sql = "CREATE TABLE questions (
answer BOOLEAN() AUTO_INCREMENT PRIMARY KEY, 
question VARCHAR(50) NOT NULL,
);"

$sql = "CREATE DATABASE studentInfo";
         
         if (mysqli_query($conn, $sql)) {
           // echo "Database created successfully";
         } else {
           // echo "Error creating database: " . mysqli_error($conn);
         }
mysqli_select_db($conn, 'questionBank');

$sql = "CREATE TABLE questions (
firstName VARCHAR(10) NOT NULL,
lastName VARCHAR(10) NOT NULL,
score int(100)
);"
// sql to create table

 $sql = "TRUNCATE TABLE questionBank";
mysqli_query($conn, $sql);
$sql = "TRUNCATE TABLE studentInfo";
mysqli_query($conn, $sql);


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

sql = "INSERT INTO questions (question, answer)
VALUES ('Localhost is the destination to view php files', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer)
VALUES ('We have been exposed to 3 different scripting languages so far', 'F')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer)
VALUES ('SELECT is a MySQL statement', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer)
VALUES ('Github is a popular code-collaboration site', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer)
VALUES ('Most coding applications demand high processor usage', 'F')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer)
VALUES ('There are many web resources on coding', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer)
VALUES ('W3Schools is a well-known internet resource for web development', 'T')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

?>
