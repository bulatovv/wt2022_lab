<!DOCTYPE HTML>
<html lang="ru">

<head>
    <meta charset="utf-8"/>
    <link rel='stylesheet' type='text/css' href='css/app.css'>
    <script defer src="js/app.js"></script>
    <title>Заголовок</title>
</head>

<body>
    <header class="px-5 mb-3">
        <ul class="nav flex-row">
            <li class="nav-item me-5 align-self-start">
                <div class="site-logo">d</div>
            </li>
            <li class="nav-item align-self-center">
                <div class="site-name">Название сайта</div>
            </li>
            <li class="nav-item ms-auto align-self-center">
                <button type="button" class="btn btn-upload">Загрузить</button>
            </li>
        </ul>
    </header>
    
    <main class="mx-2 mx-lg-auto">
        <h1>Коты</h1>
        <div class="cards-container mb-5">
            <div class="row row-cols-2 row-cols-sm-3 g-5">
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="img/pupsich.jpg"
                         data-bs-toggle="modal" data-bs-target="#modal1">
                        <div class="card-img-overlay">
                            <div class="type">кот</div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Первый кот</div>
                            <div class="card-text">
                                Пупсич
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="img/on.jpg"
                         data-bs-toggle="modal" data-bs-target="#modal2">
                        <div class="card-img-overlay">
                            <div class="type">кот</div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Второй кот</div>
                            <div class="card-text">
                                Смотрит на вас
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="img/like.jpg"
                         data-bs-toggle="modal" data-bs-target="#modal3">
                        <div class="card-img-overlay">
                            <div class="type">кот</div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Третий кот</div>
                            <div class="card-text">
                                Ему очень интересно
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="img/fullof.jpg"
                         data-bs-toggle="modal" data-bs-target="#modal4">
                        <div class="card-img-overlay">
                            <div class="type">кот</div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Четвертый кот</div>
                            <div class="card-text">
                                Наелся кредитных карт
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="img/birthday.jpg"
                         data-bs-toggle="modal" data-bs-target="#modal5">
                        <div class="card-img-overlay">
                            <div class="type">кот</div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">Много котов!!!</div>
                            <div class="card-text">
                                У них день рождения!!!
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer class="d-flex flex-row pt-5 px-2">
        <div class="name me-auto">Фазлыев А.А</div>
        <div class="contacts">
            <a href="https://github.com/bulatovv"> 
                <img class="img-fluid" src="img/github-fill.svg">
            </a>
            <a href="https://t.me/awk_sed"> 
                <img class="img-fluid" src="img/telegram-fill.svg">
            </a>
            <a href="mailto: albert.fz@yandex.ru"> 
                <img class="img-fluid" src="img/mail-fill.svg">
            </a>
        </div>
    </footer>

    <div id="modal1" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Первый кот</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Пупсич</p> 
                    <img class="img-fluid mb-1" src="img/pupsich.jpg">
                    <button type="button" class="btn btn-primary" 
                     data-bs-toggle="popover" title="Заголовок" 
                     data-bs-content="Дополнительная информация">
                        Раскрыть
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal2" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Второй кот</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Смотрит на вас</p> 
                    <img class="img-fluid mb-1" src="img/on.jpg">
                    <button type="button" class="btn btn-primary" 
                     data-bs-toggle="popover" title="Заголовок" 
                     data-bs-content="Дополнительная информация">
                        Раскрыть
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal3" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Третий кот</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Ему очень интересно</p> 
                    <img class="img-fluid mb-1" src="img/like.jpg">
                    <button type="button" class="btn btn-primary" 
                     data-bs-toggle="popover" title="Заголовок" 
                     data-bs-content="Дополнительная информация">
                        Раскрыть
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal4" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Четвертый кот</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Наелся кредитных карт</p> 
                    <img class="img-fluid mb-1" src="img/fullof.jpg">
                    <button type="button" class="btn btn-primary" 
                     data-bs-toggle="popover" title="Заголовок" 
                     data-bs-content="Дополнительная информация">
                        Раскрыть
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal5" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Много котов!!!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>У них день рождения!!!</p> 
                    <img class="img-fluid mb-1" src="img/birthday.jpg"><br>
                    <button type="button" class="btn btn-primary" 
                     data-bs-toggle="popover" title="Заголовок" 
                     data-bs-content="Дополнительная информация">
                        Раскрыть
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div id="not-impl-toast" class="toast position-fixed bottom-0 end-0 p-3" role="alert">
        <div class="toast-header">
            <strong class="me-auto text-danger">Ошибка</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
        </div>
        <div class="toast-body d-flex">
            <i class="load fa fa-spinner fa-spin"></i>
            <p>В данный момент загрузка недоступна</p>
        </div>
    </div>


</body>

</html>