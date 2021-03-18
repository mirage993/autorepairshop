<?php
echo "{$_GET['error_mess']}<br>";
if($_GET['scriptnum']==1){
    echo "<button><a href='./singin1.php'>Назад</a></button>";
}else{
    echo "<button><a href='./singin.php'>Назад</a></button>";
}