<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Product example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/product/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
<?include_once __DIR__."/header_.php";
if(isset($_COOKIE['id'])){
    $connect = require_once __DIR__."/config/config.php";
    $result = $connect->query("SELECT des.executor_fio, dws.work_name, created_at, ord.executed_at, ord.currect_status FROM orders ord JOIN d_works dws ON dws.id_work = ord.fid_work JOIN d_executors des ON des.id_executor = ord.fid_executor JOIN USERS ON users.id_user = ord.fid_user WHERE users.id_user = {$_COOKIE['userid']}")->fetch_all(MYSQLI_ASSOC);
    echo "<div class='table d-flex justify-content-center py-5'><table class='table-bordered'>";
    echo "<tr><td>Исполнитель</td><td>Вид работы</td><td>Время получааения заказа</td><td>Время исполенния заказа</td><td>Текущий статус</td></tr>";
            FOR($i = 0; $i < count($result); $i++){
            echo "<tr><td>{$result[$i]['executor_fio']}</td><td>{$result[$i]['work_name']}</td><td>{$result[$i]['created_at']}</td><td>{$result[$i]['executed_at']}</td><td>{$result[$i]['currect_status']}</td></tr>";
            }
            echo "</table></div>";
}
include_once __DIR__."/footer_.php";?>
</body>
</html>
