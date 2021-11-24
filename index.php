<?php
// Подключение к  БД ООП

/*$servername = "localhost";
$username = "root";
$pass = "";

$con = new mysqli($servername, $username, $pass);

if($con->connect_error) {
    die("connection failed: " .$con->connect_error);
}

echo "Connection succesfully";
*/


// Подключение к  БД PDO

/*$servername = "localhost";
$username = "root";
$pass = "";

try{
    $con = new PDO("mysql:host=$servername; dbname=newdb", $username, $pass);
    echo "Connection succesfully";
}catch(PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}
*/

// Как создать базу данных mysql

/*$servername = "localhost";
$username = "root";
$pass = "";

$con = new mysqli($servername, $username, $pass);

if($con->connect_error) {
    die("connection failed: " .$con->connect_error);
}

$sql = "CREATE DATABASE testDB";

if($con->query($sql)===true) {
    echo "Database created ok";
}else {
    echo"Eror" . $con->error;
}
*/

//Как создать таблицу. Mysqli, PDO.

/*$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "testdb";

$con = new mysqli($servername, $username, $pass, $dbname);

if($con->connect_error) {
    die("connection failed: " .$con->connect_error);
}

$sql = "CREATE TABLE users(
name VARCHAR(30) NOT NULL,
surname VARCHAR(30) NOT NULL PRIMARY KEY,
pass VARCHAR(30) NOT NULL)";

if ($con->query($sql)===true){
    echo "Users created - ok!";
}else{
    echo "Error" . $con->error;
}
*/

// Как добавить данные в таблицу. PDO, mysqli.

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "testdb";

$connection = new mysqli($servername, $username, $pass, $dbname);

$sql = "INSERT INTO users(name, surname, pass) 
       VALUES('Alex', 'Maiko', '1234q56');";
$sql .= "INSERT INTO users(name, surname, pass) 
       VALUES('Alexhhjj', 'Maikoggfr', 'iikj1234q56');";
$sql .= "INSERT INTO users(name, surname, pass) 
       VALUES('Alexerrt', 'Maikouui', 'iii1234q56')";




if($connection->multi_query($sql)===true){
    echo 'Vse ok!';
}


// Как получить последний id. Auto Increment. PDO.

/*$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "testdb";

$connection = new mysqli($servername, $username, $pass, $dbname);

$sql = "INSERT INTO users(name, surname, pass) 
        VALUES ('Grischa', 'Goga', 'qwerty')";

if($connection->query($sql)===true){
    $last_id=$connection->insert_id;
    echo 'last id' . $last_id;
}
*/

echo "Hallo";

class Mark{

}


