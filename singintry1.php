<?php
if(isset($_POST['submit'])) {
    $connect = require_once __DIR__."/config/config.php";
    $result = $connect->query("SELECT MAX(id_user) AS id_user, MAX(login) AS login, MAX(password) AS pass, MAX(user_fio) AS fio FROM USERS WHERE login ='{$_POST['inputEmail']}'")->fetch_all(MYSQLI_ASSOC);
    if(isset($result[0]['login'])){
        if(md5(md5($_POST['inputPassword'])) == $result[0]['pass']){
            header("Location: http://autoshop.test/index.php");
            setcookie("id", $result[0]['fio'], time()+60*60*24*30);
            setcookie("userid", $result[0]['id_user'], time()+60*60*24*30);
        }else{
            header("Location: http://autoshop.test/singinerror.php?error_mess={$result[0]['pass']}_md5(md5({$_POST['inputPassword']}))");
        }
    }else{
        header("Location: http://autoshop.test/singinerror.php?error_mess=Введен не верный email&scriptnum=1");
    }
}else{
    header("Location: http://autoshop.test/singinerror.php?error_mess=Что-то пошло не так&scriptnum=1");
}