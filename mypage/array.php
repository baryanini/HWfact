<?php
include_once "inc/TimeCheck.php";
?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Алексей Барьянов</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="img/array.png" type="image/x-icon">
        <link rel="stylesheet" href="css/normilize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/arraystyle.css">
        <link rel="stylesheet" type="text/css" href="css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
    </head>
<body>
<?php
include_once "inc/background.php"
?>
<?php
include_once 'inc/header.php'
?>
<main class="main section border">
    <div class="container">
        <div class="hw">
            <p class="text num">Задача №1</p>
            <?
            $n1 = 5;
            for ($i = 0; $i < $n1; $i++) {
                $hw1[] = mt_rand(1, 9);
                if (($hw1[$i] % 2) == 0){
                    echo "<b class='text'>$hw1[$i]</b><br>";
                }
                else{
                    echo "$hw1[$i]<br>";
                }
            }
            ?>
        </div>
        <div class="hw">
            <p class="text num">Задача №2</p>
            <?
            $hw2 = array(
                '1' => array('Батыр','Aзамат','Рамазан','Aйтуган','Назар','Шамиль'),
                '2' => array('Зария','Aйгуль','Гульнур','Aйсылу','Зухра','Сабина'),
            );
            foreach ($hw2 as $c1){
                foreach ($c1 as $c2){
                    if ($c2[0] == 'A'){     //эта хуйня не определяет кириллицу
                        echo "$c2<br>";     //пришлось писать аглийскую "A"
                    }
                }
            }
            ?>
        </div>
        <div class="hw">
            <p class="text num">Задача №3</p>
            <?
            $hw3 = array(
                'A' => array(mt_rand(100,999),mt_rand(100,999),mt_rand(100,999),mt_rand(100,999)),
                'B' => array(mt_rand(100,999),mt_rand(100,999)),
                'C' => array(mt_rand(100,999),mt_rand(100,999),mt_rand(100,999)),
            );
//            echo "<pre class='text'>";
//            print_r($hw3);
//            echo "</pre>";
            $count = 0;
            foreach ($hw3 as $key => $value) {
                $count += count($value);
                echo 'in '.$key.' - '.count($value).' elements<br>';
            }
            echo 'summ of all elements - '.$count;
            ?>
        </div>
        <div class="hw">
            <p class="text num">Задача №4</p>
            <?
            $hw4 = array(
                'Ivanovs' =>['Ivan', 'Kate', 'Tom', 'Sam'],
                'Petrovs'=>array('Sam', 'Ann', 'Tanya', 'Tom'),
                'Smith' => array('Kate', 'Sam','Bob'),
            );
            $fams = array();
            foreach ($hw4 as $fam => $dude){
                echo 'in '.$fam.' '.count($dude).' dudes<br>';
                $fams = array_merge($fams,$dude);
            }
            echo'<pre class="text">';print_r(array_count_values($fams));echo'</pre>';
            ?>
        </div>
    </div>
</main>
<?
include_once 'inc/footer.php'
?>
<script src="js/theme.js"></script>
</body>
</html>
