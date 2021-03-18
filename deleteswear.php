<?php

function fnc_delete_words1( $text){
    $connect = require_once __DIR__."/config/config.php";//подключение БД
    $pattern = "/(^|[^а-яёЁ0-9])(";
    $swords = $connect->query("SELECT swear_word FROM d_swear_words WHERE is_active = 1")->fetch_all(MYSQLI_NUM);//Получение списка слов
    FOR($i = 0; $i < count($swords); $i++){
        if($i==0){
            $pattern=$pattern.$swords[$i][0];
        }else{
            $pattern=$pattern."|".$swords[$i][0];
        }
    }
    $pattern = $pattern.")($|[^а-яёЁ0-9])/iu";
    $expArray = preg_replace($pattern, '#',$text);

    return "Исходный текст: "."<br>".$text."<br>"."Преобразованный: "."<br>".$expArray;
}


//print_r( $conf);