<?php
$connect = require_once __DIR__."/config/config.php";

$result = $connect->query("SELECT COUNT(1) FROM USERS WHERE login = '{$_POST['email']}'")->fetch_all(MYSQLI_NUM);
$_POST['pass'] = md5(md5($_POST['pass']));
if($result[0][0]==0){
    $connect->query("INSERT INTO USERS(login,password,user_fio,years_old,is_active)VALUES('{$_POST['email']}','{$_POST['pass']}','{$_POST['username']}','{$_POST['yearsold']}','{$_POST['isActive']}')");
    $connect->commit();
    $connect->close();
    header("Location: http://autoshop.test/index.php");
}else{
    echo "Такой Email уже существует!";
}
echo "<button><a href=\"/checkout.php\">НАЗАД</a></button>";
