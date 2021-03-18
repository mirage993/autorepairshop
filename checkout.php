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

<body class="bg-light">
<?include_once __DIR__."/header_.php";?>
<div class="container">
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Форма регистрации на сайте</h4>
        <form class="form-control" method="post" action="checkoutaction.php">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">Адрес электронной почты</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                    <input type="email" class="form-control" name="email" placeholder="Адрес электронной почты" value="" required="">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Пароль</label>
                    <input type="text" class="form-control" name="pass" placeholder="Пароль" value="" required="">
                </div>
            </div>

            <div class="mb-3">
                <label for="username">ФИО</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="username" placeholder="ФИО" required="">
                </div>
            </div>
            <div class="mb-3">
                <label for="username">Количество лет</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="yearsold" placeholder="Полных лет" required="">
                </div>
            </div>
            <div class="mb-3">
                <label for="username">Активность</label>
                <div class="input-group">
                    <select name='isActive'><option value = '1' selected>Активен</option><option value = '0' >Не активен</option></select>
                </div>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Регистрация</button>
        </form>
    </div>
</div>
<?include_once __DIR__."/footer_.php";?>

</body></html>