<?php
//// Получаем идентификатор товара из запроса
//$id = $_POST['id'];
//// Подключаемся к базе данных
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "bazad";
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Проверяем соединение
//if ($conn->connect_error) {
//    die("Ошибка подключения к базе данных: " . $conn->connect_error);
//}
//// Удаляем изображение товара с сервера
//$sql = "SELECT picture FROM products WHERE id = " . $id;
//$result = $conn->query($sql);
//if ($result->num_rows > 0) {
//    // Если найден товар с таким идентификатором, получаем имя файла изображения
//    $row = $result->fetch_assoc();
//    $picture = $row['picture'];
//    // Удаляем файл изображения с сервера
//    unlink("../images/" . $picture);
//}
//// Удаляем товар из базы данных
//$sql = "DELETE FROM products WHERE id = " . $id;
//if ($conn->query($sql) === TRUE) {
//    echo "success";
//} else {
//    echo "error";
//}
//$conn->close();
//?>
<!---->
<!--<!-- Вывод списка товаров -->-->
<!---->
<?php //foreach ($products as $product): ?>
<!--    <div class="product">-->
<!--        <h3>--><?php //echo $product['name']; ?><!--</h3>-->
<!--        <p>--><?php //echo $product['description']; ?><!--</p>-->
<!--        <p>--><?php //echo number_format($product['price'], 2, '.', ''); ?><!-- руб.</p>-->
<!--        <img src="../images/--><?php //echo $product['picture']; ?><!--" alt="--><?php //echo $product['name']; ?><!--">-->
<!--        <button onclick="deleteProduct(--><?php //echo $product['id']; ?>//)">Удалить товар</button>
//    </div>
<?php //endforeach; ?>
<!---->
