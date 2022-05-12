<?php
require_once 'app/db_connection.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/main.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <title>Calculate</title>
</head>
<body>
<header>
    <h1>Калькулятор витрат</h1>
</header>

<div class="container">
    <div class="wrapper">
        <div class="choise">
            <p class="title">Вид продукту</p>

            <!--            <div class="imageContainer">-->
        </div>
    </div>
    <div class="content">
        <div class="name-product">
            <h4 class="vareniks-potato">
                Вареники з картоплею
            </h4>
            <fieldset class="for-patepos">
                <form method="post" action="vendor/save_potato.php">
                    <div class="image">
                        <img src="/img/potato.jpg" alt="">
                    </div>
                    <div class="products">
                        <p>Мука:</p> <input type="number" class="flour" name="flour" placeholder="ціна за мішок" required>
                        <p>Картопля:</p> <input type="number" class="potato" name="potato" placeholder="ціна за кг" required>
                        <p>Маргарин:</p> <input type="number" class="margarine" name="margarine" placeholder="ціна за 1 пачку"
                                                required>
                        <p>Цибуля:</p> <input type="number" class="onion" name="onion" placeholder="ціна за кг" required>
                        <p>Олій:</p> <input type="number" class="olis" name="olis" placeholder="ціна за 1 л" required>
                        <p>Світло:</p> <input type="number" class="light" name="light" placeholder="ціна" required>
                        <input type="number" class="finish-price" name="finish_price" hidden>
                    </div>
                    <div class="count">
                        <button class="save" type="submit">
                            Зберегти дані
                        </button>
                        <button class="total" type="submit">
                            Розрахувати
                        </button>
                        <div class="result result-potato">

                        </div>
                    </div>
                </form>
            </fieldset>

        </div>
        <div class="name-product">
            <h4 class="vareniks-cheese">
                Вареники з сиром
            </h4>
            <fieldset class="for-cheese">
                <form action="vendor/save_cheese.php" method="post">
                    <div class="image">
                        <img src="/img/cheese.jpg" alt="">
                    </div>
                    <div class="products for-cheese">
                        <p>Мука:</p> <input type="number" class="flour" name="flour" placeholder="ціна за мішок" required>
                        <p>сиром:</p> <input type="number" class="cheese" name="cheese" placeholder="ціна за 1кг" required>
                        <p>Маргарин:</p> <input type="number" class="margarine" name="margarine" placeholder="ціна за 1 пачку"
                                                required>
                        <p>Яйця:</p> <input type="number" class="eggs" name="eggs" placeholder="ціна за 1 шт" required>
                        <p>Світло:</p> <input type="number" class="light" name="light" placeholder="ціна" required>
                        <input type="number" class="finish-price" name="finish_price" hidden>
                    </div>
                    <div class="count">
                        <button class="save" type="submit">
                            Зберегти дані
                        </button>
                        <button class="total" type="submit">
                            Розрахувати
                        </button>
                        <div class="result result-cheese">

                        </div>
                    </div>
                </form>
            </fieldset>

        </div>
        <div class="name-product">
            <h4 class="dumplings">
                Пельмені
            </h4>
            <fieldset class="for-dumpl">
                <form action="vendor/save_dumplings.php" method="post">
                    <div class="image">
                        <img src="/img/dumplings.jpg" alt="">
                    </div>
                    <div class="products for-dumpl">
                        <p>Мука:</p> <input type="number" class="flour" name="flour" placeholder="ціна за мішок" required>
                        <p>Маргарин:</p> <input type="number" class="margarine" name="margarine" placeholder="ціна за 1 пачку"
                                                required>
                        <p>Світло:</p> <input type="number" class="light" name="light" placeholder="ціна" required>
                        <input type="number" class="finish-price" name="finish_price" step="0.01">
                    </div>
                    <div class="count">
                        <button class="save" type="submit">
                        Зберегти дані
                        </button>
                        <button class="total" type="submit">
                            Розрахувати
                        </button>
                        <div class="result result-dumpl">

                        </div>
                    </div>
                </form>
            </fieldset>

        </div>
    </div>
</div>


</div>
<footer>

</footer>

<script src="js/main.js"></script>
<script src="js/test-zoom.js"></script>

</body>
</html>