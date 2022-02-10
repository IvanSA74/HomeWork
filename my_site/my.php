<?
date_default_timezone_set('Asia/Ekaterinburg');
$now=getdate();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/site_style.css">
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    <title>Сафронов Иван</title>
</head>
<body class="body" >
    <header class="header">
         <div class="logo"> <img src="img/logo.jpg" alt="LOGO" height="150" width="200">
         </div>
        <div class="logo_table">
            <a href="../31.01.22/table.html" title="mini" target="_blank"><img src="img/logtable.png" width="120" height="120" alt="Таблица"></a>
        </div>
    </header>
    <?
    $now = date('H');
    if ($now < 8 or $now > 20 ) {
        echo  '<img src="img/night.jpg" alt="no_n" height="200" width="480">';
    }
    elseif ($now < 20 or $now > 8) {
        echo '<img src="img/morning.jpg" alt="no_m" height="200" width="480">';
    }

    ?>
    <main class="main">
    <div class="foto">
        <img src="img/ava.jpg" alt="foto" height="480" width="480">
    </div>
        <div class="info">
        <div class="textname" align="center"><a href="https://vk.com/dont_worry_be_harry">Иван Сафронов</a></div>
            <div class="infotext">Привет. Мне 32 года. Работаю в ПАО "ММК" машинистом крана металлургического производства. Не первый раз пытаюсь вырваться с завода в IT. Был в 5 группе Факт-школы. Надеюсь теперь платные курсы дадут мне дополнительную мотивацию. </div>
            <div class="recom">Второй раз в Факт-школе. Второй раз кайфую от процесса получения знаний. </div>
        </div>
    </main>
    <section class="container">
        <div class="picture">
            <img src="img/tim.jpg" height="250px" width="200px" alt="Sir Timothy John">
        </div>
        <div class="picture">
            <img src="img/hocon.jpg" height="250px" width="200px" alt="Håkon Wium Lie">
        </div>
        <div class="picture">
            <img src="img/rasmus.jpg" height="250px" width="200px" alt="Rasmus Lerdorf">
        </div>
        <div class="picture">
            <img src="img/Brendan.jpg" height="250px" width="200px" alt="Brendan Eich">
        </div>
            <p class="txt1">Сэр Тимоти Джон Бе́рнерс-Ли OM — создатель URI, URL, HTTP, HTML и Всемирной паутины</p>
            <p class="txt2">Хокон Виум Ли — учёный, специалист в области информатики, предложивший каскадные таблицы стилей.</p>
            <p class="txt3">Расмус Лердорф — датский программист, написавший в 1994 году интерпретатор языка сценариев PHP</p>
            <p class="txt4">Брендан Эйх или Айк — американский программист, создатель языка программирования JavaScript</p>
    </section>
    <section class="grid">
        <div class="it_people1"><img src="img/straustul.jpg" alt="straustul"></div>
        <div class="it_people2"><img src="img/ada.jpg" height="400" width="600" alt="ada"></div>
        <div class="it_people3">Бьёрн Страуступ. Программист из Дании. Создатель знаменитого и очень сложного языка программирования C++, популярность которого не падает уже очень много лет, и вряд ли когда-нибудь упадет.</div>
        <div class="it_people4">Ада Лавлейс. Первая женщина-программист, чей интеллект опередил время. С ранних лет начала проявлять интерес к точным наукам, в том числе к математике. Ада была первой дамой, которая разобралась в принципе работы логарифмической вычислительной машины Бэббиджа.</div>
        <div class="it_people5"><img src="img/bram.jpg" alt="bram"></div>
        <div class="it_people6"><img src="img/gvido.jpg" height="400" width="600" alt="gvido"></div>
        <div class="it_people7">Брэм Коэн. Американский программист, получивший свою популярность за разработку протокола BitTorrent. Именно благодаря ему у нас появилась возможность супер - быстрой передачи данных в сети</div>
        <div class="it_people8">Гвидо ван Россум — выдающийся голландский программист. Этот человек создал один из самых популярных и востребованных языков программирования Python.</div>
    </section>
</body>
</html>