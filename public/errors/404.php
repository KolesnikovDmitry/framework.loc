<!DOCTYPE html>
<html>

<head>
    <title>Страница не найдена</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <style type="text/css">
        html {
            height: 100%;
            font-size: 16px;
        }

        body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: #FFF url('errors/images/404.png') right bottom no-repeat;
        }

        .main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .row {
            max-width: 750px;
            padding: 10px;
            font-family: Tahoma;
     
            color: #565656;
            margin: 0 auto;

        }

        h1 {
            margin: 0px;
            margin-bottom: 30px;
            font-size: 23px;
            font-weight: bold
        }

        p {
            font-size: 1.0625em;
        }

        a {
            color: #27579E;
            text-decoration: none
        }

        a:hover {
            color: #0E1D34;
            text-decoration: none
        }

        @media only screen and (max-width: 1000px) {
            body {
                background: #FFF !important
            }
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="row">
            <h1>Ошибка 404</h1>
            <p>Страница, на которую вы попали, не существует. Вы можете попробывать следующее:</p>
            <p>- <a href="<?= PATH ?>">Перейти к главной странице сайта</a></p>
            <p>- Проверить правильность введенного адреса</p>
            <p>- Вернуться туда, откуда пришли (<i>нажать кнопку «Назад» в своем браузере</i>)</p>
        </div>
    </div>
</body>

</html>