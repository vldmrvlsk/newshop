<?php
//$name = $_POST['name'];
//// Подключение к базе данных
//$mysqli = new mysqli("mysql:host=localhost;dbname=bazad", 'root', '');
//// Проверка на ошибки при подключении
//if ($mysqli->connect_error) {
//    die('Ошибка подключения к базе данных: ' . $mysqli->connect_error);
//}
//// Фильтрация входных данных
//$name = $mysqli->real_escape_string($name);
//// Параметризованный запрос к базе данных
//$sql = "SELECT COUNT(*) AS count FROM products WHERE name = $name";
//$stmt = $mysqli->prepare($sql);
//$stmt->bind_param('s', $name);
//$stmt->execute();
//$stmt->bind_result($count);
//$stmt->fetch();
//$stmt->close();
//$mysqli->close();
//// Возвращение результата
//if ($count > 0) {
//    echo 'exists';
//} else {
//    echo 'not exists';
//}
//?>



<?php
//require ('dbconnect.php');

// подключение к БД
$db = new PDO('mysql:host=localhost;dbname=bazad;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// проверяем, был ли передан параметр name в POST-запросе
if(!isset($_POST['name'])) {
    http_response_code(400);
    exit("Отсутствует параметр name");
}
$name = $_POST['name'];
$name = trim($name);
// проверяем, не является ли name пустой строкой
if($name === '') {
    http_response_code(400);
    exit("Наименование не может быть пустым");
}
// фильтруем значение параметра name
$name = $db->quote($name);
// выполняем запрос к БД
$stmt = $db->prepare("SELECT COUNT(*) FROM products WHERE name = $name");
$stmt->execute();
$count = $stmt->fetchColumn();
if ($count > 0) {
    // товар с таким наименованием уже существует
    http_response_code(200);
    exit("1");
}
else {
    // товар с таким наименованием не существует
    http_response_code(200);
    exit();
}

?>



<?php
//// Подключение к БД
//$host = 'localhost';
//$user = 'root';
//$password = '';
//$database = 'bazad';
//$mysqli = new mysqli($host, $user, $password, $database);
//// Проверка на ошибки при подключении
//if ($mysqli->connect_error) {
//    die('Ошибка подключения к базе данных: ' . $mysqli->connect_error);
//}
//// Фильтрация входных данных
//$name = $mysqli->real_escape_string($_POST['name']);
//// Параметризованный запрос к базе данных
//$sql = "SELECT COUNT(*) AS count FROM products WHERE name = $name";
//$stmt = $mysqli->prepare($sql);
//$stmt->bind_param('s', $name);
//$stmt->execute();
//$stmt->bind_result($count);
//$stmt->fetch();
//$stmt->close();
//$mysqli->close();
//// Возвращение результата
//if ($count > 0) {
//    echo 'exists';
//} else {
//    echo 'not exists';
//}
//
//?>
