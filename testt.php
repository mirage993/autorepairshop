<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product example for Bootstrap</title>

    <!-- Bootstrap core CSS -->


    <!-- Custom styles for this template -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
</head>

<body>
<div class="form_container">
    <div id="message"></div>
    <form id="form" method="post" action="">
        <input type="text" name="login">
        <input type="text" name="password">
        <input type="submit" name="send" value="Отправить">
    </form>
</div>

<script>
    $("#form").submit(function (e) { // Устанавливаем событие отправки для формы с id=form
        e.preventDefault();
        var form_data = $(this).serialize(); // Собираем все данные из формы
        $.ajax({
            type: "POST", // Метод отправки
            url: "handler.php", // Путь до php файла отправителя
            data: form_data,
            success: function (data) {
                // Код в этом блоке выполняется при успешной отправке сообщения
                $("#message").html(data);
            }
        });
    });
</script>
</body>
</html>