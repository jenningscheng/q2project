<?php
include "config.php"
mysqli_select_db($conn, 'quiz');

$sql = "CREATE TABLE questions (
answer BOOLEAN() AUTO_INCREMENT PRIMARY KEY, 
question VARCHAR(50) NOT NULL,
number int(20) NOT NULL
);"
         

 $sql = "TRUNCATE TABLE questions";
mysqli_query($conn, $sql);


if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
sql = "INSERT INTO questions (question, answer, number)
VALUES ('SQL stands for Structured Query Language', 'T', '1')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('PHP is a client-side scripting language', 'F', '2')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('SELECT is used to extract data from a database', 'T', '3')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('MODIFY is used to update data in a database', 'F', '4')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('Java is a scripting language', 'F', '5')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('Localhost is the destination to view php files', 'T', '6')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('PHP Stands for Pre Hyper Processor', 'F', '7')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('SELECT is a MySQL statement', 'T', '8')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('<?php>...<?> is the delimiter used in php', 'F', '9')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('Document.write is used in php to display something on the screen', 'F', '10')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('PHP variables must start with $', 'T', '11')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('$_POST is more secure than $_GET', 'T' '12')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('/*...*/ Is the way to comment in PHP', 'T', '13')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('makecookie() is the method to create a cookie in PHP', 'T', '14')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('= is used to check if two values are equal and of the same data type', 'F', '15')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('There are three ways of styling in CSS', 'T', '16')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('script name is the correct way of referring to an external script', 'F', '16')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('Calling a function in Javascript requires call before function', 'F', '17')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('Do while, while, and for are all loops in javascript', 'T', '18')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('if i != is the correct way to start the if statement if i is not equal to a value', 'T', '19')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

sql = "INSERT INTO questions (question, answer, number)
VALUES ('<!DOCTYPE HTML> is used to indicate to the text editor that the file created is of type html', 'T', '20')";
 
if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

?>
