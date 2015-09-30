<?php
session_start();
if (empty($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
    if($_SESSION['count']==4){
        $_SESSION['count'] = 1;
    }
}
if(!empty($_GET['ad_block'])){
    if($_GET['ad_block']==1){
        $ad_block='display:none';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ads task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        .bt { border-top: 1px solid;}
    </style>
    <meta charset="UTF-8">
</head>
<body>
<div class="container">
    <br>
    <!-- Ads block begin -->
    <?php
    switch($_SESSION['count']){
        case 1:
            $p='Лучший поисковик в мире!';
            $a='http://www.google.com';
            break;
        case 2:
            $p='Лучший российский поисковик!';
            $a='http://www.yandex.ru';
            break;
        case 3:
            $p='А когда то я была лучшей!';
            $a='http://www.opera.ru';
            break;
    }
    ?>
    <div class="row" style="<?=$ad_block?>">
        <div class="alert alert-info"><a href="<?=$a?>" target="_blank"><?=$p?></a></div>
    </div>
    <!-- Ads block end -->
    <br>
    <div class="row">
        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
    </div>
    <br>
    <div class="row bt">
        <br>
        &copy; <?=date('Y'); ?> Ads inc.
    </div>
    <br>
</div>
</body>
</html>