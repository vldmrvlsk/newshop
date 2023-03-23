<?php
    session_start(["use_strict_mode" => true]);


if (isset($_POST["login"]) and $_POST["login"]!='')
{
    try {
        $sql = 'SELECT id, name, password, is_admin FROM users WHERE email=(:login)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':login', $_POST['login']);
        $stmt->execute();


    } catch (PDOexception $error) {
    function prompt($msg){
        if ($msg){
            echo("<script alert='alert/javascript'> var answer = alert('".$msg."'); </script>"); } }
        echo "<script>alert(\"Ошибка аутентификации\");</script>";
//        header('Location: /index.php?page=login');
//        exit( );

    }
    // если удалось получить строку с паролем из БД
    if (is_null($msg)) {
        if ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
            if (MD5($_POST["password"]) != $row['password'])
                echo "<script>alert(\"Неправильный пароль.\");</script>";
            else {
                // успешная аутентификация
                $_SESSION['login'] = $_POST["login"];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['is_admin'] = $row['is_admin'];
                echo "<script>alert(\"Вы вошли на сайт.\");</script>";
//                header('Location: /index.php?page=login');
//                exit( );
            }
        }

        else
            echo "<script>alert(\"Неправильный логин.\");</script>";

    }
}


if (isset($_GET["logout"]))

{
    session_unset();
    $_SESSION = null;
    $_SESSION['msg'] =  "Вы успешно вышли из системы";
    header('Location: http://newshop/index.php?page=login');
    exit( );

}

?>



