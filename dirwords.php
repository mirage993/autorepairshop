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
$connect = require_once __DIR__."/config/config.php";
$result = $connect->query("SELECT swear_word FROM d_swear_words WHERE is_active = 1")->fetch_all(MYSQLI_ASSOC);
echo "<div class='table d-flex justify-content-center py-5'><table class='table-bordered'>";
        FOR($i = 0; $i < count($result); $i++){
        echo "<tr><td>{$result[$i]['swear_word']}</td></tr>";
        }
        echo "</table></div>";
include_once __DIR__."/footer_.php";?>
</body>
</html>