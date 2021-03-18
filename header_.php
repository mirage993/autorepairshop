<nav class="site-header sticky-top ">
    <div class="container d-flex flex-column flex-md-row justify-content-around">
        <div class="container d-flex justify-content-between">
            <a class="py-2" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
            </a>
            <a class="py-2 d-none d-md-inline-block" href="customers.php">Заказчики</a>
            <a class="py-2 d-none d-md-inline-block" href="executors.php">Мастера</a>
            <a class="py-2 d-none d-md-inline-block" href="worklist.php">Виды работ</a>
            <a class="py-2 d-none d-md-inline-block" href="orders.php">Заказы на ремонт</a>
            <a class="py-2 d-none d-md-inline-block" href="dirwords.php">Справочник слов</a>
            <?if(!isset($_COOKIE['id'])){echo "<a class=\"py-2 d-none d-md-inline-block\" href=\"singin.php\">Вход_массив</a>";}?>
            <?if(!isset($_COOKIE['id'])){echo "<a class=\"py-2 d-none d-md-inline-block\" href=\"singin1.php\">Вход_бд</a>";}?>
        </div>

        <div id="myId" class="container d-flex justify-content-end">
            <?if(!isset($_COOKIE['id'])){echo "<a class=\"py-2 d-none d-md-inline-block float-end\" href=\"checkout.php\">Регистрация</a>";}?>
            <?if(isset($_COOKIE['id'])){echo "<a class=\"py-2 d-none d-md-inline-block float-end\" href=\"singout.php\">Выйти</a>";}?>

        </div>

    </div>
</nav>
<div class="container">
    <p class="py-2 d-none d-md-inline-block">Добро пожаловать, <?if(isset($_COOKIE['id'])){echo "{$_COOKIE['id']}";}else{echo "Гость";}?></p>
</div>