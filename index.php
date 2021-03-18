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
    <style>
        img {
            width: 100%;
            height: 300px;
            object-fit: fill;
        }
    </style>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
</head>

<body>
<?include_once __DIR__."/header_.php";?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<!--        <h6 class="display-4 font-weight-normal">Область для отображения результатов следующих лабараторных работ</h6>-->
        <form class="form-control" id="ajax_form" method="POST" action="">
<!--            <input type="text" name="swear">-->
            <input name="swear" type="text" id="swear" class="form-control" placeholder="Введите текст" required="" autofocus="">
            <button class="btn btn-lg btn-primary btn-block ру-2" type="submit" name="submit" id="btn">Применить</button>
        </form>
        <div id="content">

        </div>
        <p class="lead font-weight-normal">
            <?include_once __DIR__."/deleteswear.php";
            $conf = fnc_delete_words1('покапривет, привет, приветпока, привет ');
            echo $conf;
            ?>
        </p>
<!--        <a class="btn btn-outline-secondary" href="#">Coming soon</a>-->
    </div>
<!--    <div class="product-device box-shadow d-none d-md-block"></div>-->
<!--    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>-->
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">Механик года</h2>
            <p class="lead">Сталеваров Михаил</p>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="https://static.ruvita.ru/services/service/243x243_d6775b0b5056236f47c09e06e5181ed0.jpg" alt="" ></div>
<!--        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>-->

    </div>
    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">Шиномонтажник года</h2>
            <p class="lead">Кузеев Григорий</p>
        </div>
        <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="https://images.ru.prom.st/489378412_w640_h640_shinomontazh-3d-pravka.jpg" alt="" ></div>

    </div>
</div>

<?include_once __DIR__."/footer_.php";?>

<script>
    $( document ).ready(function() {
        $("#btn").click(function(e){
            e.preventDefault();
            // console.log(2);
            var form_data = $("#ajax_form").serialize();
            $.ajax({
                type: "POST",
                url: "ajaxswear.php",
                data: form_data,
                success: function (data) {
                    $("#content").html(data);
                    // alert(data);
                }
            });
        });
    });
</script>


</body></html>