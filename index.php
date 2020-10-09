<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Kiity Rush</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/start_screen.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="./js/index.js"></script>
</head>

<body>
    <div class="main-flex-container">
        <div class="main-flex-element">
            <div class="menu">
                <div class="menu__title">Kitty Rush</div>
                <button type="button" class="btn btn-primary btn-lg menu__option" id="single-mode-btn">
                    Одиночный режим
                </button>
                <button type="button" class="btn btn-primary btn-lg menu__option" id="multiplayer-mode-btn">
                    Многопользовательский режим
                </button>
                <button type="button" class="btn btn-primary btn-lg menu__option" data-toggle="modal"
                    data-target="#aboutModal">
                    Об игре
                </button>
            </div>
            <img src="./pictures/cat.png" alt="sleeping cat" class="cat">
            <!-- <svg height="250" width="500">
               <polygon points="220,10 300,210 170,250 123,234" style="fill:lime;stroke:purple;stroke-width:1" />
            </svg> -->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutModalLabel">Описание</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="aboutModal-title">Описание и правила игры</div>
                    <div class="aboutModal-description">
                        Kitty Rush - казуальный аркадный экшен, представляющий собой компьютерную настольную игру. Вам необходимо
                        собирать правильную комбинацию из шестиугольных тайлов с изображениями котиков, как можно быстрее! Будьте внимательны,
                        так как за попытку проверки неверно расположенных котиков к вашему результату добавится штраф в виде 5 секунд!
                    </div>
                    <hr>
                    <div class="aboutModal-title">Одиночный режим</div>
                    <div class="aboutModal-description">
                        Вы должны правильно собрать предложенное количество каррточек на скорость. По
                        окончании раунда Вам будет показан результат.
                    </div>
                    <hr>
                    <div class="aboutModal-title">Многопользовательский режим</div>
                    <div class="aboutModal-description">
                        Соревнуйтесь с другими игроками в скорости! После ввода имени и кода, который объединяет игроков
                        для совместной игры, Вы подключитесь в лобби. Нажмите кнопку готовности. Игра запустится
                        после готовности всех игроков. Каждый игрок собирает одинаковую последовательность карточек с заданиями.
                        Кто быстрее справится, тот и победитель!
                    </div>
                    <hr>
                    <div class="aboutModal-title">Управление</div>
                    <div class="aboutModal-description">
                        Пермещение котиков по принципу Drag&Drop.
                        Вращение котиков - клавиши «D» и «A» или стрелки.
                        Переворот котиков - клавиша «S».
                        Проверка карточки - клавиша «Пробел».
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Назад</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>