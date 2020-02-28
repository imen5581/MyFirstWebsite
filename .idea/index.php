<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мой первый сайт</title>
    <link rel="stylesheet" href="reset.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="section">
    <h1 class="header"><span>Получите видео-инструкцию</span><strong>Как заработать свой первый миллион</strong></h1>
    <div class="main">
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/8csrmFtztaU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="form">
            <p class="form-header">Введите ваш Email</p>
            <form action="form.php">
            <input type="text" placeholder="Ваше имя" name="name" value="">
            <input type="text" placeholder="Ваш Email" name="email" value="">
                <button class="btn">Получить инструкцию</button>
            </form>
        </div>
    </div>
</div>
<div class="section">
    <h2 class = "feature-header">Почему это нужно сделать сейчас</h2>
    <div class="feature">
        <div class="col"><img src="img\02.png" alt="">
            <p>Первое преимущество</p>
        </div>
        <div class="col"><img src="img\02.png" alt="">
            <p>Второе преимущество</p>
        </div>
        <div class="col"><img src="img\02.png" alt="">
            <p>Третье преимущество</p>
        </div>
        <div class="col"><img src="img\02.png" alt="">
            <p>Четвертое преимущество</p>
        </div>
    </div>
    <button class="btn">
        Получить инструкцию
    </button>
</div>
</body>
</html>
