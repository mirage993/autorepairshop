<?php
if(isset($_GET['submit']))
{
    $check = array("alex@mail"=>"123", "dima@gmail"=>"111");
    $is_error = 'false';//Использую переменную, потому что с несколькими header без условий возникают ошибки
    foreach($check as $item => $item_pass) {
        if($item == $_GET['inputEmail']){
            if($item_pass == $_GET['inputPassword']){
                $is_error = 'false';
                break;
            }else{
                $is_error = 'pass';
                break;
            }
        }else{
            $is_error = 'login';
        }
    }

    if($is_error == 'false'){
        header("Location: http://autoshop.test/index.php");
        setcookie("id", $_GET['inputEmail'], time()+60*60*24*30);
        setcookie("userid", 1, time()+60*60*24*30);
    }elseif ($is_error == 'login'){
        header("Location: http://autoshop.test/singinerror.php?error_mess=Введен не верный email");
    }elseif ($is_error == 'pass'){
        header("Location: http://autoshop.test/singinerror.php?error_mess=Введен не верный пароль");
    }

}
