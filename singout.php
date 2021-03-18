<?php
setcookie("id", 1, time()-60*60*24*30);
setcookie("userid", 1, time()+60*60*24*30);
header("Location: http://autoshop.test/index.php");