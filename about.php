<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мой второй сайт</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">
</head>
<body>

<?php
require_once "header.php";
?>
<div class="container mt-5">

    <div class="row-fluid">
        <div class="span8" style="display: inline-block">
            <iframe  width="400" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=15+Springfield+Way,+Hythe,+CT21+5SH&amp;aq=t&amp;sll=52.8382,-2.327815&amp;sspn=8.047465,13.666992&amp;ie=UTF8&amp;hq=&amp;hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=51.077429,1.121722&amp;output=embed"></iframe>
        </div>

        <div class="span4" style="display: inline-block" >
            <h2>Snail mail</h2>
            <address>
                <strong>Hythe Window Cleaning</strong><br>
                15 Springfield Way<br>
                Hythe<br>
                Kent<br>
                United Kingdon<br>
                CT21 5SH<br>
                <abbr title="Phone">P:</abbr> 01234 567 890
            </address>
        </div>
    </div>


<form action="check.php" method="post">
    <input type="email" name="email" placeholder="Введите Email"
    class="form-control"><br/>
    <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br/>
    <button type="submit" name="send" class="btn btn-success">Отправить</button>
</form>
</div>

<?php
require_once "footer.php";
?>
</body>
</html>
