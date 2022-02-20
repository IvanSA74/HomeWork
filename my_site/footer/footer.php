<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet", href="footer/footer_style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<footer>
    <div class = "calc">
    <?php
        $words[] = " ";
        $word_add = 0;
        for ($q = 0; $q < count($words); $q++) {
        $word_add += count(explode(' ', $words[$q]));}
        echo 'Колличество слов =', $word_add, '<br>';

        $a = ['А','а','о','у', 'Э','э','ы','я','ё','е','ю', 'И','и'];
        $my = file_get_contents("my.php");
        $page = mb_str_split($my);
        $r = 0;
        foreach ($page as $value){
        if(in_array($value, $a)) {$r ++;}}
        echo 'Колличество гласных =', str_word_count($my);?>
    </div>
    <div class = "days">
        <?php
        echo 'Я родился: 23.03.1989', '<br>';
        echo 'Сегодня: ', date("d.m.y"), '<br>';
        $time = (strtotime(date("d.m.y")) - strtotime("23.03.1989")) / (82400);
        echo 'Уже прошло: ', floor($time);
        ?>
    </div>
    <div class="icon">
        <a href="http://localhost:63342/HomeWork/my_site/my.php" target="_blank"><img src="img/telegram.jpg" alt="icon_telegram"></a>
        <a href="http://localhost:63342/HomeWork/my_site/my.php" target="_blank"><img src="img/whats.jpg" alt="icon_whatsup"></a>
        <a href="http://localhost:63342/HomeWork/my_site/my.php" target="_blank"><img src="img/viber.jpg" alt="icon_viber"></a>
        <a href="https://vk.com/dont_worry_be_harry" target="_blank"><img src="img/vk.jpg" alt="icon_vk"></a>
    </div>
</footer>
</body>
</html>