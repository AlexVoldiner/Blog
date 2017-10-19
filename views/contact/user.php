<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Site</title>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/template/css/main.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <div id="menu-wrapper">
        <div id="menu">
            <ul>
                <li><a href="/news/">Homepage</a></li>
                <li><a href="/blog/">Blog</a></li>
                <li><a href="/photos/">Photos</a></li>
                <li><a href="/info/">Information</a></li>
                <li class="current_page_item"><a href="/contact/">Contact</a></li>
            </ul>
        </div>
        <!-- end #menu -->
    </div>
</div>
<div id="w">
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <?php if ($result): ?>
                    <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                            <?php foreach ($errors as $error): ?>
                                <h1 id="error">-<?php echo $error; ?></h1>
                            <?php endforeach; ?>
                    <?php endif; ?>
                    <div class="signup-form">
                    <!--sign up form-->
                        <h2>Обратная связь</h2>
                        <h5>Есть вопрос? Напишите нам:</h5>
                        <br/>
                        <form action="#" method="post">
                            <p>Ваша почта</p>
                            <input type="email" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>"/>
                            <p>Сообщение</p>
                            <input type="text" name="userText" placeholder="Сообщение" value="<?php echo $userText; ?>"/>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Отправить" />
                        </form>
                    </div><!--/sign up form-->
                <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>
    <div id="footer">
        <p>Copyright (c) 2017 Alex Voldiner</p>
    </div>
</body>
</html>
